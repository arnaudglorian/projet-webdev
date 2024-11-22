<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Parc animalier Barben</title>
    <link rel="stylesheet" type="text/css" href ="accueil.css">
    <script type="text/javascript" src="accueil.js"></script>
    <link rel="stylesheet" type="text/css" href ="boutonConn.css">
    <script type="text/javascript" src="boutonConn.js"></script>
</head>

<body>
     <!-- En-tête -->
     <header>
        <a href="accueil.php">
            <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/Logo_Parc_animalier_de_La_Barben.JPEG?raw=true" alt="Logo du site" class="logo">
        </a>
        <h1>Parc animalier de la Barben</h1>
        <p>Découvrez la faune sauvage au cœur de notre réserve</p>
        <button class="btn-connexion" onclick="openModal()">Connexion</button>
    </header>

    <div class="modal" id="loginModal" >
    <div class="modal-content">
        <button class="close-btn" onclick="closeModal()">X</button>
        <h2>Connexion</h2>
        <?php require_once(__DIR__ . '/login.php'); ?>
        <p>    </p>
        <button class="btn-connexion" onclick="openModal2()">inscription</button>
    </div>
    </div>

    <div class="modal2" id="inscrModal">
    <div class="modal-content2">
        <button class="close-btn" onclick="closeModal2()">X</button>
        <h2>Inscription</h2>
        <?php require_once(__DIR__ . '/signin.php'); ?>
    </div>
    </div>
</body>
</html>

 <!-- Menu de navigation -->
 <nav>
    <a href="#contact">Contact</a>
    <a href="avis.html">Avis</a>
    <a href="Les_animaux.html">Les animaux</a>
    <a href="billeterie.html">Billeterie</a>
    <a href="Nosservices.html">Nos services</a>
</nav>

 <!-- Section d'introduction -->
 <div class="hero" id="home">
    <h2>Bienvenue au Parc animalier de la Barben</h2>
    <p>Un lieu unique pour découvrir les merveilles de la faune et de la flore.</p>
    <?php if (isset($loggedUser)) : ?>
            <p>Bienvenue <?php echo $loggedUser['email']; ?> !</p>
    <?php endif; ?>
</div>


 <!-- Plan du parc -->
<div class="section" id="plan">
    <h2>Plan du parc</h2>
    <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/PLANS-DU-PARC-2024-WEB-FR-1.jpg?raw=true" alt="Plan du parc" width="1100" et height="600">
</div>

<!-- Section Contact -->
<footer id="contact">
    <p>Contactez-nous : parcanimalier@labarbene.fr | Téléphone : 01 23 45 67 89</p>
    <p>&copy; La barbene - Tous droits réservés</p>
</footer>