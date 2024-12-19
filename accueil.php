<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Parc animalier Barben</title>
    <link rel="stylesheet" type="text/css" href ="accueil.css">
    <script type="text/javascript" src="connexion.js"></script>
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
        <?php if (!isset($_SESSION['username'])) : ?>
            <button class="btn-connexion" onclick="openModal()">Connexion</button>
        <?php else: ?>
            <button class="btn-deconnexion" onclick="<?php session_destroy();?>">Se Déconnecter </button>
        <?php endif;?>
    </header>

    <div class="modal" id="loginModal" >
    <div class="modal-content">
        <button class="close-btn" onclick="closeModal()">X</button>
        <h2>Connexion</h2>
        <?php require(__DIR__ . '/login.php'); ?>
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


 <!-- Menu de navigation -->
 <nav>
    <a href="#contact">GPS</a>


    <a href="avis.php">Avis</a>

    <?php if(isset($_SESSION['username'])):?>
        <?php if($_SESSION['username']=='admin'):?>
            <a href="Horraire.php">Horaire<a>
        <?php endif;?>
    <?php endif;?>
    

    <a href="lesanimaux3.php">Les animaux</a>

    <a href="billeterie.html">Billeterie</a>
    <a href="Nosservices.html">Nos services</a>
</nav>

 <!-- Introduction -->
 <div class="hero" id="home">
    <h2>Bienvenue au Parc animalier de la Barben</h2>
    <p>Un lieu unique pour découvrir les merveilles de la faune et de la flore.</p>
    <?php if (isset($_SESSION['username'])) : ?>
            <p>Bienvenue <?php echo $_SESSION['username']; ?> !</p>
            <script>
                document.getElementsByClassName("btn-connexion").style.display = "none";
            </script>
    <?php endif; ?>
</div>


 <!-- Plan du parc -->
<div class="section" id="plan">
    <h2>Plan du parc</h2>
    <img src="https://github.com/arnaudglorian/projet-webdev/blob/main/photo/PLANS-DU-PARC-2024-WEB-FR-1.jpg?raw=true" alt="Plan du parc" width="1100" et height="600">
</div>


<!-- GPS -->
<section class="gps-section">
    <h3><span>🧭</span> Planifiez votre visite</h3>
    <p>Indiquez votre position d'origine et votre destination pour découvrir l'itinéraire optimal.</p>


<!-- Formulaire HTML -->
<form method="post" action="">

    <label for="origine">Position d'origine :</label>
    <input type="text" id="origine" name="origine" required>
    <br><br>

    <label for="destination">Position de destination :</label>
    <input type="text" id="destination" name="destination" required>
    <br><br>

    <input type="submit" value="Envoyer">
</form>
    

<?php
// Vérifier si le formulaire a été soumis
if(isset($_POST['origine'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs
    $start = htmlspecialchars($_POST["origine"]);
    $end = htmlspecialchars($_POST["destination"]);
}
}
?>


<?php

if (isset($start) && isset($end)){

function dijkstra($graph, $start, $end) {
    
    // Initialisation
    $distances = [];  // Distance de départ à chaque noeud
    $previous = [];   // Prédecesseurs pour reconstituer le chemin
    $queue = [];      // File des noeuds à explorer

    foreach ($graph as $node => $neighbors) {
        $distances[$node] = INF;  // Distance infinie pour tous les noeuds
        $previous[$node] = null; // Pas de précédent initialement
        $queue[$node] = INF;     // Ajouter à la file avec une priorité infinie
    }

    $distances[$start] = 0; // Distance à soi-même = 0
    $queue[$start] = 0;     // Ajouter le point de départ avec priorité 0

    // Boucle principale
    while (!empty($queue)) {
        // Trouver le noeud avec la plus petite distance dans la file
        $current = array_search(min($queue), $queue);
        if ($current === $end) break; // Si on atteint la destination, on termine

        // Explorer les voisins
        foreach ($graph[$current] as $neighbor => $weight) {
            $alt = $distances[$current] + $weight; // Nouvelle distance potentielle
            if ($alt < $distances[$neighbor]) {   // Meilleur chemin trouvé ?
                $distances[$neighbor] = $alt;
                $previous[$neighbor] = $current;
                $queue[$neighbor] = $alt;         // Mettre à jour la priorité
            }
        }

        unset($queue[$current]); // Marquer le noeud comme traité
    }

    // Reconstituer le chemin
    $path = [];
    $current = $end;
    while ($previous[$current] !== null) {
        array_unshift($path, $current);
        $current = $previous[$current];
    }
    if ($path) {
        array_unshift($path, $start);
    }

    return [
        'distance' => $distances[$end],
        'path' => $path
    ];
}

// Matrice d'adhèrence du graphe (uniquement les enclos de proximité)
$graph = [
    'Ara/Perroquet' => ['Grand Hocco' => 1, 'Panda roux' => 100,'Python/Tortue/Iguane' => 60],
    'Grand Hocco' => ['Ara/Perroquet' => 1, 'Panthère' => 1],
    'Panthère' => ['Grand Hocco' => 1,'Suricate' => 40],
    'Panda roux' => ['Ara/Perroquet' => 100, 'Chèvre naine' => 5],
    'Chèvre naine' => ['Panda roux' => 5, 'Lémurien' => 6],
    'Lémurien' => ['Chèvre naine' => 6, 'Chèvre naine/Tortue' => 4],
    'Chèvre naine/Tortue' => ['Lémurien' => 4,'Mouflon' => 2],
    'Mouflon' => ['Chèvre naine/Tortue' => 2, 'Binturong/Loutre' => 25, 'Macaque crabier' => 20],
    'Binturong/Loutre' => ['Mouflon' => 25,'Grivet/Cercopithèque' => 9, 'Girafe' => 6,'Macaque crabier' => 6],
    'Python/Tortue/Iguane' => ['Ara/Perroquet' => 60],
    'Rhinocéros/Oryx beisa/Gnou' => ['Suricate' => 15,'Gazelle/Autruche' => 3],
    'Suricate' => ['Panthère' => 40, 'Fennec' => 3, 'Rhinocéros/Oryx beisa/Gnou' => 15,'Tamarin' => 22],
    'Fennec' => ['Suricate' => 3,'Coati/Saïmiri' => 4],
    'Coati/Saïmiri' => ['Tapir' => 11,'Fennec' => 4],
    'Tapir' => ['Casoar' => 5, 'Coati/Saïmiri' => 11],
    'Casoar' => ['Crocodile nain' => 4, 'Tapir' => 5,'Lion' => 7],
    'Crocodile nain' => ['Guépard' => 6, 'Casoar' => 4],
    'Guépard' => ['Gazelle/Autruche' => 3, 'Crocodile nain' => 6],
    'Gazelle/Autruche' => ['Rhinocéros/Oryx beisa/Gnou' => 3, 'Guépard' => 3],
    'Tamarin' => ['Suricate' => 22,'Capucin' => 1],
    'Capucin' => ['Tamarin' =>1,'Ouistiti' => 1],
    'Ouistiti' => ['Capucin' =>1,'Gibbon' => 1],
    'Gibbon' => ['Ouistiti' => 1,'Grivet/Cercopithèque' => 7, 'Varan de komodo' => 6],
    'Grivet/Cercopithèque' => ['Gibbon' => 7, 'Binturong/Loutre' => 9,'Girafe' => 2],
    'Varan de komodo' => ['Gibbon' => 6, 'Eléphant' => 10],
    'Girafe' => ['Grivet/Cercopithèque' => 2, 'Eléphant' => 15,'Hyène' => 9],
    'Eléphant' => ['Varan de komodo' => 10,'Girafe' => 15],
    'Hyène' => ['Girafe' => 9,'Loup à crinière' => 4],
    'Loup à crinière' => ['Hyène' => 4,'Zèbre' => 17,'Ibis/Tortue' => 13, 'Lynx' => 12],
    'Zèbre' => ['Loup à crinière' =>17,'Cigogne/Marabout' => 6,'Hippopotame' => 9],
    'Lion' => ['Hippopotame' => 6,'Casoar' => 7],
    'Macaque crabier' => ['Cerf' => 1, 'Binturong/Loutre' => 6],
    'Cerf' => ['Vautour' => 7, 'Macaque crabier' =>1],
    'Vautour' => ['Tigre' => 11, 'Cerf' => 7],
    'Daim/Antilope/Nilgat' => ['Tigre' => 20, 'Loup europe' => 1, 'Ane de provence/Dromadaire' => 6],
    'Loup europe' => ['Daim/Antilope/Nilgat' => 1],
    'Cigogne/Marabout' => ['Hippopotame' => 15, 'Oryx gazelle/Watusi/Ane de somalie' => 17,'Ibis/Tortue' => 12],
    'Hippopotame' => ['Zèbre' => 9,'Lion' => 6,'Cigogne/Marabout' => 15],
    'Oryx gazelle/Watusi/Ane de somalie' => ['Cigogne/Marabout' => 17, 'Ibis/Tortue' => 5,'Yack/Mouton noir' => 4],
    'Yack/Mouton noir' => ['Oryx gazelle/Watusi/Ane de somalie' => 4, 'Tamanoir/Flamant rose/Nandou' => 2],
    'Ibis/Tortue' => ['Oryx gazelle/Watusi/Ane de somalie' => 5, 'Cigogne/Marabout' => 12,'Pécari' => 2, 'Loup à crinière' => 13],
    'Pécari' => ['Emeu/Wallaby' => 21, 'Ibis/Tortue' => 2, 'Chien des buissons' => 1],
    'Tamanoir/Flamant rose/Nandou' => ['Yack/Mouton noir' => 2, 'Porc-épic' => 7],
    'Emeu/Wallaby' => ['Ane de provence/Dromadaire' => 12, 'Pécari' => 21, 'Tigre' => 14],
    'Porc-épic' => ['Tamanoir/Flamant rose/Nandou' => 7, 'Bison' => 14],
    'Lynx' => ['Loup à crinière' => 12, 'Serval' => 3],
    'Serval' => ['Lynx' => 3, 'Tigre' => 13],
    'Chien des buissons' => ['Pécari' => 1],
    'Tigre' => ['Serval' => 13, 'Emeu/Wallaby' => 14, 'Daim/Antilope/Nilgat' => 20, 'Vautour' => 11],
    'Bison' => ['Porc-épic' => 14, 'Ane de provence/Dromadaire' => 8],
    'Ane de provence/Dromadaire' => ['Bison' => 8, 'Emeu/Wallaby' => 12, 'Daim/Antilope/Nilgat' => 6]

];

// Calcul du chemin le plus court
$result = dijkstra($graph, $start, $end);

// Afficher les résultats
if (!empty($result['path'])) {
    echo "Chemin le plus court de $start à $end : " . implode(' -> ', $result['path']) . "\n";
    echo "Distance totale : " . $result['distance'] . "\n";
} else {
    echo "Aucun chemin trouvé entre $start et $end.\n";
}
}
?>

</body>
</html>

<!-- Section Contact -->
<footer id="contact">
    <p>Contactez-nous : parcanimalier@labarbene.fr | Téléphone : 01 23 45 67 89</p>
    <p>&copy; La barbene - Tous droits réservés</p>

</footer>