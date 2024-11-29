<!DOCTYPE html>
<?php

session_start();

include 'includeDB.php';

$sql="SELECT * FROM enclosures";
$stmt=$pdo->query($sql);
$enclos_data =$stmt->fetchAll();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie d'Animaux</title>
    <link rel="stylesheet" href="lesanimaux3.css">
</head>

<body>
    <header class="header">
        <h1>Nos animaux</h1>
    </header>

    <!-- Menu de navigation -->
    <nav>
        <a href="accueil.php">Accueil</a>
        <a href="#contact">Contact</a>
        <a href="#Les Clairières">Les Clairières</a>
        <a href="billeterie.html">Billeterie</a>
    </nav>

    <!-- Contenu principal -->
    <main class="main-content">
        <section>
            <h2>Les Clairières</h2>

            <!-- Enclos -->
            <?php foreach($enclos_data as $enclos):?>
                <div class="enclos" data-enclos="<?=$enclos['id']?>">
                    <h3>Enclos <?=$enclos['id']?></h3>
                    <div class="image-gallery">
                        <div class="image-container">
                            <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/marabout.jpg?raw=true" alt="Marabout">
                            <span class="image-label">Marabout</span>
                            <p>Le marabout est un grand oiseau échassier, appartenant à la famille des cigognes, reconnaissable à son long bec puissant et à son cou dépourvu de plumes.</p>
                            <p>Horaire:<?=$enclos['meal']?></p>
                        </div>
                        <div class="image-container">
                            <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/cigognee.jpg?raw=true" alt="Cigogne">
                            <span class="image-label">Cigogne</span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
            <!-- Enclos 2 -->
            <div class="enclos" data-enclos="2">
                <h3>Enclos des Mammifères</h3>
                <div class="image-gallery">
                    <div class="image-container">
                        <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/moutonnoir.jpg?raw=true" alt="Mouton Noir">
                        <span class="image-label">Mouton Noir</span>
                    </div>
                    <div class="image-container">
                        <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/porcepic.jpg?raw=true" alt="Porc-épic">
                        <span class="image-label">Porc-épic</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Carrousel -->
    <div id="carousel" class="carousel">
        <span class="close">&times;</span>
        <img id="carousel-image" src="" alt="Image de carrousel">
        <p id="carousel-description" class="carousel-description"></p>
        <div class="navigation">
            <span id="prev" class="nav">&lt;</span>
            <span id="next" class="nav">&gt;</span>
        </div>
    </div>

    <script src="lesanimaux3.js"></script>
</body>
</html>
