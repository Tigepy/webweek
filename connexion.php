<?php
// Démarrer la session
session_start();
// Inclure le fichier de paramètres
require_once 'config/config.php';

// Initialiser le message de résultat de la connexion
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot-de-passe'];

    // Préparer la requête de recherche de l'utilisateur par email
    $requete = $pdo->prepare("SELECT * FROM compte WHERE email = :email");
    $requete->execute([':email' => $email]);

    // Récupérer les données de l'utilisateur
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mdp'])) {
        // Connexion réussie
        session_start(); // Démarrer la session si ce n'est pas déjà fait
        $_SESSION['utilisateur'] = $utilisateur; // Stocker les informations de l'utilisateur dans la session
        header("Location: compte.php"); // Rediriger vers la page du compte
        exit();
    } else {
        // Adresse email ou mot de passe incorrect
        $message = "Adresse email ou mot de passe incorrect.";
        error_log($message); // Enregistrement du message dans le journal des erreurs

    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - La marche du flocon d'espoir</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="menu">
        <a href="index.php">
            <div class="logo">
                <img src="images/logova.png" alt="Logo du Velay Athlétisme">
                <h1>La marche du flocon d'espoir</h1>
            </div>
        </a>
        <nav>
          <ul>
            <li><a href="parcours.php">Parcours</a></li>
            <li><a href="association.php">Association</a></li>
            <li><a href="billetterie.php">Billetterie</a></li>
            <li><a href="compte.php">Compte</a></li>
          </ul>
        </nav>
      </header>

      <div class="inscription-form">
        <h2>Connexion</h2>
        <form action="#" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="mot-de-passe">Mot de passe :</label>
            <input type="password" id="mot-de-passe" name="mot-de-passe" required>

            <button type="submit">Se connecter</button>
        </form>

        <p>Pas de compte ? <a href="inscription.php">Inscription ici</a></p>
    </div>

      <footer>
        <div class="container">
            <div class="logo-column">
                <div class="flocon">
                <img src="images/logova.png" alt="Logo">
                <h3>La Marche du Flocon d'Espoir</h3>
                </div>
                <p class="bleu">La Marche du Flocon d'Espoir : Ensemble, semons des étoiles dans le ciel des Petits Princes!</p>
            </div>
            
            <div class="other-pages-column">
                <h3>Autres Pages</h3>
                    <p class="bleu"><a href="compte.php">Compte</a></p>
                    <p class="bleu"><a href="parcours.php">Parcours</a></p>
                    <p class="bleu"><a href="association.php">Association</a></p>    
                    <p class="bleu"><a href="billetterie.php">Billetterie</a></p>       
            </div>
    
            <div class="social-media-column">
                <h3>Réseaux Sociaux</h3>
                <div class="reseaux-images">
                    <a href="#"><img src="images/icon _facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a>
                </div>
            </div>
    
            <div class="contact-column">
                <h3>Contact</h3>
                <p>Email:</p>
                <p class="bleu">contact@velay-athletisme.fr</p>
                <p>Téléphone :</p>
                <p class="bleu">01 02 03 04 05</p>
                <p>Adresse :</p>
                <p class="bleu">5 rue Francheterre, 43 000 LE PUY-EN-VELAY</p>
            </div>
        </div>
        <div class="mentions"><p>Copyright © 2023 - Velay Athlétisme</p></div>
    </footer>
</body>
</html>