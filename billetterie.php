<?php
session_start();
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $parcours = $_POST['parcours'];
    $modePaiement = isset($_POST['modePaiement']) ? $_POST['modePaiement'] : '';

    // Déterminer le statut de paiement
    $statutPaiement = ($modePaiement === 'enLigne') ? 'payé' : 'non payé';

    // Générer la clé unique
    $cleUnique = substr(strtoupper($nom), 0, 3) . substr(strtoupper($prenom), 0, 3) . rand(1000, 9999);

    // Récupérer l'ID du compte s'il existe
    $idCompte = isset($_SESSION['utilisateur']['IdCompte']) ? $_SESSION['utilisateur']['IdCompte'] : NULL;
    // Insérer les données dans la table participant
    $requete = $pdo->prepare("INSERT INTO participant (nom, prenom, genre, age, email, telephone, cle_unique, statut_paiement, idParcours, idCompte) 
                              VALUES (:nom, :prenom, :genre, :age, :email, :telephone, :cleUnique, :statutPaiement, :idParcours, :idCompte)");
    
    $resultat = $requete->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':genre' => $genre,
        ':age' => $age,
        ':email' => $email,
        ':telephone' => $telephone,
        ':cleUnique' => $cleUnique,
        ':statutPaiement' => $statutPaiement,
        ':idParcours' => $parcours,
        ':idCompte' => $idCompte
    ]);

    // // Vérifier si l'insertion a réussi
    // if ($resultat) {
    //     echo "Les données ont été insérées avec succès.";
    // } else {
    //     echo "Erreur lors de l'insertion des données.";
    // }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billetterie - La marche du flocon d'espoir</title>
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
        <div class="presentationBilletterie">
            <h2>Bienvenue sur la page Billetterie.</h2>
            <p>Ici, vous pouvez réserver vos places pour les différents parcours de randonnées et raquettes ! Inscrivez-vous nombreux ! </p>
        </div>
       
        <div class="billetterie">    
            <h2>Inscrivez-vous à un de nos parcours !</h2>            
            <form id="billetterieForm" action="" method="post">

                <label for="nom"><img src="images/user.png" alt="Nom Icon"> Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Nom *" required>

                <label for="prenom"><img src="images/users.png" alt="Prénom Icon"> Prénom :</label>
                <input type="text" id="prenom" name="prenom" placeholder="Prénom *" required>

                <label for="genre"><img src="images/image 12.png" alt="Genre Icon"> Genre :</label>
                <select id="genre" name="genre" required>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="autre">Autre</option>
                </select>

                <label for="age"><img src="images/timer.png" alt="Âge Icon"> Âge :</label>
                <input type="number" id="age" name="age" placeholder="Âge *" required>

                <label for="email"><img src="images/mail.png" alt="Email Icon"> Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Email *" required>

                <label for="telephone"><img src="images/phone.png" alt="Téléphone Icon"> Téléphone :</label>
                <input type="number" id="telephone" name="telephone" placeholder="Téléphone *" required>

                <label for="parcours"><img src="images/map.png" alt="Parcours Icon"> Parcours :</label>
                <select id="parcours" name="parcours" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>


                <label for="modePaiement">Choisissez votre mode de paiement :</label>
                <div id="modePaiement">
                    <label for="payeSurPlace">Paiement sur place</label>
                    <input type="radio" id="payeSurPlace" name="modePaiement" value="surPlace" checked><br>
                    <label for="payeEnLigne">Paiement en ligne</label>
                    <input type="radio" id="payeEnLigne" name="modePaiement" value="enLigne">
                </div>

                <!-- Formulaire pour le paiement sur place -->
                <div id="formulaireSurPlace" style="display: block;">
                    <input type="submit" value="Valider" name="submit-billetterie">
                </div>

                <!-- Formulaire pour le paiement en ligne -->
                <div id="formulaireEnLigne" style="display: none;">
                    <label for="nomCarte">Nom sur la carte :</label>
                    <input type="text" id="nomCarte" name="nomCarte">
            
                    <label for="montant">Montant :</label>
                    <input type="number" id="montant" name="montant">
            
                    <label for="carte">Numéro de carte :</label>
                    <input type="text" id="carte" name="carte" pattern="[0-9]{16}" maxlength="16">
            
                    <label for="expiration">Date d'expiration :</label>
                    <input type="text" id="expiration" name="expiration" placeholder="MM/AA" pattern="[0-9]{2}/[0-9]{2}">
            
                    <label for="cvv">CVV :</label>
                    <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3">
            
                    <input type="submit" value="Valider et Payer" name="submit-billetterie">
                </div>
            </form>
        </div>
        <section id="formulaire-cle">
            <h2>Récupérer votre billet</h2>
            <form method="POST" action="generate-pdf.php">
                <label for="nouvelle-cle">Entrer Clé :</label>
                <input type="text" id="nouvelle-cle" name="nouvelle-cle" required>
                <button type="submit">Générer Billet</button>
            </form>
        </section>
        
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
    <script src="scripts/billetterieform.js"></script>
</body>
</html>