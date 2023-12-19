<?php

require_once 'config/config.php';
require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['nouvelle-cle'];

    // Préparer la requête de recherche de l'utilisateur par email
    $requete = $pdo->prepare("SELECT * FROM participant WHERE cle_unique = :cle_unique");
    $requete->execute([':cle_unique' => $code]);

    // Récupérer les données de l'utilisateur
    $participant = $requete->fetch(PDO::FETCH_ASSOC);
    

    if ($participant) {
        
    $tmp = sys_get_temp_dir();

     $dompdf = new Dompdf([
        'logOutputFile' => '',
        // authorize DomPdf to download fonts and other Internet assets
        'isRemoteEnabled' => true,
        'isFontSubsettingEnabled' => true,
        'defaultMediaType' => 'all',
        // all directories must exist and not end with /
        'fontDir' => $tmp,
        'fontCache' => $tmp,
        'tempDir' => $tmp,
        'chroot' => [__DIR__, __DIR__.'/images/images/']
    ]);
    
    // Charger le contenu HTML depuis le fichier template.html
    $html = file_get_contents("template.html");

    // on a besoin du chemin pour les images
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] === 443 ? "https://" : "http://";
    $page_url = "{$protocol}{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $url=str_split($page_url,strlen($page_url)-strlen("generate-pdf.php"))[0];

    // Remplacer les placeholders dans le HTML avec les valeurs du formulaire
    $html = str_replace(["{{ name }}","{{ prenom }}","{{ age }}","{{ telephone }}","{{ Parcours }}","{{ paiement }}", "{{ Clef }}", "{{ Chemin }}"], [$participant['nom'], $participant['prenom'], $participant['age'],$participant['telephone'], $participant['idParcours'], $participant['statut_paiement'], $participant['cle_unique'],$url], $html);

    file_put_contents("invoice.html", $html);

    // Charger le HTML dans Dompdf
    $dompdf->loadHtml($html);


    // Choisir la taille et l'orientation du papier
    
    $customSize = array( 0,0,210,540);
    $dompdf->setPaper($customSize, "landscape");
    

    // Rendre le PDF
    $dompdf->render();

    // Enregistrer le PDF localement
    $output = $dompdf->output();
    file_put_contents("invoice.pdf", $output);

    // Envoyer le PDF au navigateur
    $dompdf->stream("invoice.pdf", ["Attachment" => 0]);

    } else {
        // Adresse email ou mot de passe incorrect
        $message = "Adresse email ou mot de passe incorrect.";
        error_log($message); // Enregistrement du message dans le journal des erreurs

    }
}

?>