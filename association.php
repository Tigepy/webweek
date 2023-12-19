<?php
session_start();
require_once 'config/config.php';

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['utilisateur'])) {
    header("Location: compte.php"); // Rediriger vers la page du compte
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association - La marche du flocon d'espoir</title>
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
        <div class="presentationAssociation">
            <h2>Bienvenue sur la page dédiée à l'association "Les Petits Princes".</h2>
            <p>Notre organisation a pour vocation de réaliser les rêves d'enfants gravement malades, apportant une lueur d'espoir dans leur parcours difficile. Fondée avec une passion inébranlable pour le bien-être des enfants, Les Petits Princes s'efforcent de créer des moments magiques qui transcendent la maladie. Chaque rêve réalisé représente une victoire collective de la communauté, réunie autour d'une cause commune : offrir un soutien exceptionnel à ces petits héros.</p>
        </div>
        <div class="presentationAssociation2">
            <h2>Association Les petit Princes</h2>
            <div class="associationTexte">
                <p>Les Petits Princes" est une association à vocation caritative qui œuvre en faveur des enfants malades en France. Fondée en 1987, cette organisation a pour mission principale de réaliser les rêves d'enfants gravement malades, âgés de 3 à 17 ans, afin de leur offrir des moments d'évasion, de bonheur et d'espoir au cours de leur combat contre la maladie.</p>
                <p>L'Association "Les Petits Princes" s'engage à transformer les rêves les plus chers des enfants en réalité, en collaboration avec des partenaires et des bénévoles dévoués. Ces rêves peuvent prendre diverses formes, allant d'une rencontre avec leur idole à des expériences uniques telles que des voyages extraordinaires, des aventures sportives ou des découvertes artistiques.</p>
                <p>Au fil des années, l'association a su mobiliser un réseau de soutien engagé, comprenant des bénévoles, des partenaires et des donateurs, tous unis par le désir de faire une différence dans la vie des enfants malades. "Les Petits Princes" incarne ainsi l'esprit de solidarité et de générosité, visant à apporter de la lumière et de l'espoir aux enfants confrontés à des défis de santé difficiles.</p>
            </div> 
            <div class="associationImage">
                <img src="images/logoPP.png" alt="Logo des petits princes">
            </div>
        </div>
        <div class="presentationDon">
            <h2>Faites un don !</h2>
            <p>Tous les dons seront intégralement reversés à l'association Les Petits Princes pour soutenir nos actions en faveur des enfants malades.</p>
        </div>
        <div class="don">
            <div class="statistiquesDonateurs">
                <h2>Statistiques des Donateurs</h2>
                <div class="dernierDon">
                    <h3>Dernier Don</h3>
                    <p>Nom: John Doe</p>
                    <p>Montant: 50€</p>
                </div>
                <div class="totalCollecte">
                    <h3>Total Collecté</h3>
                    <p>Montant total: 1500€</p>
                    <p>Nombre de donateurs: 30</p>
                </div>
                <div><h3>MERCI !</h3></div>
            </div>
            <div class="fairedon">    
                <h2>Vous n'êtes plus qu'a un clic de réaliser le rêve d'un enfant !</h2>            
                <form id="donationForm" action="" method="post">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="message">Message :</label>
                    <input type="text" id="message" name="message">
            
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
            
                    <label for="montant">Montant :</label>
                    <input type="number" id="montant" name="montant" required>
            
                    <label for="carte">Numéro de carte :</label>
                    <input type="text" id="carte" name="carte" pattern="[0-9]{16}" maxlength="16" required>
            
                    <label for="expiration">Date d'expiration :</label>
                    <input type="text" id="expiration" name="expiration" placeholder="MM/AA" pattern="[0-9]{2}/[0-9]{2}" required>
            
                    <label for="cvv">CVV :</label>
                    <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" required>
            
                    <input type="submit" value="Faire un don">
                </form>
            </div>

  
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