<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours - La marche du flocon d'espoir</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="scripts/parcours.js" defer></script>
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
        <div class="presentationParcours">
            <h2>Bienvenue sur la page Parcours.</h2>
            <p>Ici, vous pouvez visualiser les différents parcours de randonnées et raquettes ! Toutes les informations sont disponibles, mais si vous avez des questions supplémentaires, n'hésitez pas à nous contacter par mail ! </p>
        </div>
        <div class="parcours-description">
            <h2>Explication de nos différents parcours</h2>
            <p>Voici une brève description de nos parcours et leurs caractéristiques...</p>
        </div>
    
        <div class="parcours-cards">
            <div class="parcours-card">
                <img src="images/bgimage.avif" alt="Image parcours 1">
                <div class="card-content">
                    <h3>Nom du parcours 1</h3>
                    <p>Une courte description du parcours 1...</p>
                </div>
            </div>
    
            <div class="parcours-card">
                <img src="images/bgimage.avif" alt="Image parcours 1">
                <div class="card-content">
                    <h3>Nom du parcours 1</h3>
                    <p>Une courte description du parcours 1...</p>
                </div>
            </div>

            <div class="parcours-card">
                <img src="images/bgimage.avif" alt="Image parcours 1">
                <div class="card-content">
                    <h3>Nom du parcours 1</h3>
                    <p>Une courte description du parcours 1...</p>
                </div>
            </div>
        </div>
    
        <div class="carte-image">
            <div id="map"></div>
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