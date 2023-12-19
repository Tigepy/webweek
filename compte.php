<?php

// Démarrer la session
session_start();
// Inclure le fichier de paramètres
require_once 'config/config.php';

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['utilisateur'])) {
    header("Location: connexion.php");
    exit();
}

// Récupérer l'ID de l'utilisateur connecté depuis la session
$utilisateurId = $_SESSION['utilisateur']['IdCompte'];

// Variable pour stocker le message
$message = '';
$lienDeconnexion = '';

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['utilisateur'])) {
    // Utilisateur connecté
    $utilisateur = $_SESSION['utilisateur'];
    $message = "Bonjour {$utilisateur['prenom']} {$utilisateur['nom']}, vous êtes connecté à votre compte. Vous pouvez accéder à votre tableau de bord et au suivi de vos véhicules dans les onglets correspondants.";

    // Lien de déconnexion
    $lienDeconnexion = '<a href="?action=deconnexion">Se déconnecter</a>';

    // Gérer la déconnexion
    if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
        session_destroy(); // Détruire la session
        header("Location: compte.php"); // Rediriger vers la page de compte
        exit();
    }
} else {
    // Utilisateur non connecté
    $message = "Veuillez vous <a href='connexion.php'>connecter</a> pour accéder à votre compte.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte - La marche du flocon d'espoir</title>
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
        <div id="infos-et-billets">
            <section id="infos-personnelles">
                <h2>Informations Personnelles</h2>
                <div class="infos">
                <p><strong>Nom :</strong> <?php echo $utilisateur['nom']; ?></p>
                <p><strong>Prénom :</strong> <?php echo $utilisateur['prenom']; ?></p>
                <p><strong>Email :</strong> <?php echo $utilisateur['email']; ?></p>
                <p><strong>Téléphone :</strong> <?php echo $utilisateur['telephone']; ?></p>
                <p><strong>Nom d'utilisateur :</strong> <?php echo $utilisateur['nom_utilisateur']; ?></p>
                <p><strong>Identifiant Compte :</strong> <?php echo $utilisateur['IdCompte']; ?></p>
                <p><strong>Mot de passe :</strong> <?php echo '*****'; // Par mesure de sécurité, ne pas afficher le mot de passe ?></p>
                    <!-- Autres informations personnelles -->
                </div>
                <button class="modifier-bouton">Modifier votre mot de passe</button>
            </section>
        
            <section id="billets" >
                <h2>Mes Billets</h2>
                <ul>
                    <li>Clé de billet 1</li>
                    <li>Clé de billet 2</li>
                    <li>Clé de billet 1</li>
                    <li>Clé de billet 2</li>
                    <!-- Liste des clés de billets de l'utilisateur -->
                </ul>
            </section>
        </div>
        <section id="formulaire-cle">
            <h2>Récupérer votre billet</h2>
            <form method="POST" action="generate-pdf.php">
                <label for="nouvelle-cle">Entrer Clé :</label>
                <input type="text" id="nouvelle-cle" name="nouvelle-cle" required>
                <button type="submit">Générer Billet</button>
            </form>
        </section>
        <div class="deconnexion">
            <?php echo $lienDeconnexion; ?>
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
        <script src="scripts/billetterieform.js"></script>
    </body>
    </html>