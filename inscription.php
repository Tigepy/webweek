<?php
session_start();
require_once 'config/config.php';

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['utilisateur'])) {
    header("Location: compte.php"); // Rediriger vers la page du compte
    exit();
}

// Variable pour stocker le message
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = password_hash($_POST['mot-de-passe'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Vérifier si l'email existe déjà dans la base de données
    $requeteEmailExistant = $pdo->prepare("SELECT COUNT(*) FROM compte WHERE email = :email");
    $requeteEmailExistant->execute([':email' => $email]);
    $emailExistant = $requeteEmailExistant->fetchColumn();

    if ($emailExistant) {
        $message = "L'email est déjà utilisé. Veuillez utiliser une autre adresse email ou vous connecter a votre compte déjà existant.";
    } else {
        // Préparer la requête d'insertion
        $requete = $pdo->prepare("INSERT INTO compte (nom_utilisateur, mdp, nom, prenom, email, telephone) VALUES (:nom_utilisateur, :mot_de_passe, :nom, :prenom, :email, :telephone)");

        // Exécuter la requête avec les valeurs des paramètres
        $resultat = $requete->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':mot_de_passe' => $mot_de_passe, // Modifier ici pour correspondre à la variable
            ':nom_utilisateur' => $nom_utilisateur,
            ':telephone' => $telephone
        ]);        

        if ($resultat) {
            $utilisateurId= $pdo->lastInsertId();
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['utilisateur'] = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'mot_de_passe' => $mot_de_passe,
                'nom_utilisateur' => $nom_utilisateur,
                'telephone' => $telephone,
                'IdCompte' => $utilisateurId
            ];
            header("Location: compte.php"); // Rediriger vers la page du compte
            exit();
        } else {
            // Erreur lors de l'inscription
            $message = "Erreur lors de l'inscription.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - La marche du flocon d'espoir</title>
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
        <h2>Inscription</h2>
        <form action="#" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="nom_utilisateur">Nom d'utilisateur :</label>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="mot-de-passe">Mot de passe :</label>
            <input type="password" id="mot-de-passe" name="mot-de-passe" required>

            <button type="submit">S'inscrire</button>
        </form>
        <p>Déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></p>
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