<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - La marche du flocon d'espoir</title>
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
      <div class="background-image"></div>
      <div class="countdown">
        <h2>DEBUT DE L'EVENEMENT DANS</h2>
        <div id="timer">
          <span id="days"></span> jours
          <span id="hours"></span> heures
          <span id="minutes"></span> minutes
          <span id="seconds"></span> secondes
        </div>
      </div>
      <script src="./scripts/countdown.js"></script>
      
      <div class="cta-buttons">
        <a href="billetterie.php" class="btn">Acheter des billets</a>
        <a href="association.php" class="btn">Faire un don</a>
      </div>
      <div class="contenu">
        <div>
          <h3>La marche du flocon d'espoir</h3>
        </div>
        <div class="section-texte">
          <p>La Marche du Flocon d'Espoir est un événement caritatif empreint de solidarité et d'espoir, organisé au profit de l'association Les Petits Princes. Cette marche réunit des participants de tous horizons pour une noble cause : réaliser les rêves d'enfants gravement malades. Parcourant ensemble un itinéraire symbolique, les marcheurs portent le flambeau de la générosité et de la bienveillance. Chaque pas contribue à faire fondre le froid de la maladie et à créer un véritable flocon d'espoir dans le cœur des enfants en lutte contre la maladie. C'est une journée dédiée à la solidarité, à la sensibilisation et à la collecte de fonds indispensables pour offrir des moments magiques à ces petits princes et princesses courageux. La Marche du Flocon d'Espoir unit ainsi les forces de la communauté pour écrire ensemble une histoire de compassion et de soutien envers ceux qui en ont le plus besoin.</p>
        </div>
        
        <div class="section-image">
          <img src="./images/imageaccueil.jpg" alt="Image d'une personne qui court dans la neige">
        </div>
        
        <div class="section-texte">
            <p>La Marche du Flocon d'Espoir est un événement caritatif empreint de solidarité et d'espoir, organisé au profit de l'association Les Petits Princes. Cette marche réunit des participants de tous horizons pour une noble cause : réaliser les rêves d'enfants gravement malades. Parcourant ensemble un itinéraire symbolique, les marcheurs portent le flambeau de la générosité et de la bienveillance. Chaque pas contribue à faire fondre le froid de la maladie et à créer un véritable flocon d'espoir dans le cœur des enfants en lutte contre la maladie. C'est une journée dédiée à la solidarité, à la sensibilisation et à la collecte de fonds indispensables pour offrir des moments magiques à ces petits princes et princesses courageux. La Marche du Flocon d'Espoir unit ainsi les forces de la communauté pour écrire ensemble une histoire de compassion et de soutien envers ceux qui en ont le plus besoin.</p>
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