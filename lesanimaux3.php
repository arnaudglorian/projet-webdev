<!DOCTYPE html>
<?php

session_start();
try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=zoo;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
include 'includeDB.php';

$sql="SELECT biome_name,animals.name,enclosures.id,enclosures.meal FROM biomes INNER JOIN (enclosures INNER JOIN (relation_enclos_animals INNER JOIN animals ON relation_enclos_animals.id_animal=animals.id) ON relation_enclos_animals.id_enclos=enclosures.id) ON enclosures.id_biomes=biomes.id GROUP BY enclosures.id";
$stmt=$pdo->query($sql);
$enclos_data =$stmt->fetchAll(); 
$sql2="SELECT * FROM biomes";
$stmt2=$pdo->query($sql2);
$biomes_data=$stmt2->fetchAll();
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
        <?php foreach($biomes_data as $biomes):?>
            <a href="#<?=$biomes['biome_name']?>"><?=$biomes['biome_name']?></a>
        <?php endforeach ;?>
        <a href="billeterie.html">Billeterie</a>
    </nav>

     <!-- Barre de recherche -->
    <div class="search-container">
        <?php require_once(__DIR__ . '/recherche.php'); ?>
    </div>

    <!-- Contenu principal -->
    <main class="main-content">
        <section>
        <?php foreach($biomes_data as $biomes):?>
            <h2 id="<?=$biomes['biome_name']?>"><?=$biomes['biome_name']?></h2>

            <!-- Enclos -->
            <?php foreach($enclos_data as $enclos):?>
                <?php if ($enclos['biome_name']==$biomes['biome_name']):?>
                    <div class="enclos" data-enclos="<?=$enclos['id']?>">
                        <h3>Enclos <?=$enclos['id']?></h3>  
                            <div class="image-gallery">
                            <?php 
                            $sql3="SELECT * FROM animals INNER JOIN relation_enclos_animals ON relation_enclos_animals.id_animal=animals.id WHERE relation_enclos_animals.id_enclos=:enclo";
                            $stmt3=$pdo->prepare($sql3);
                            $stmt3->execute(['enclo'=>$enclos['id']]);
                            $animals_data=$stmt3->fetchAll();
                            ?>
                            <?php foreach($animals_data as $animals):?>
                                
                                <div class="image-container">
                                
                                
                                    <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/<?=$animals['name']?>.jpg?raw=true" alt="<?=$animals['name']?>">
                                    <span class="image-label"><?=$animals['name']?></span>
                                    <p><?=$animals['bio']?> Horaire du repas:<?=$enclos['meal']?></p>
                                    
                                
                                
                                </div>
                            <?php endforeach ;?>
                            </div>
                    </div>
                <?php endif ;?>
            <?php endforeach;?>
        <?php endforeach;?>
          

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
