<?php
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

// Exemple de graphe (enclos et distances entre eux)
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
    'Macaque crabier' => ['Cerf' => 1, 'Loutre' => 6],
    'Cerf' => ['vautour' => 7, 'Macaque crabier' =>1],
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

// Entrée utilisateur : enclos de départ et d'arrivée
$start = 'Rhinocéros/Oryx beisa/Gnou'; // Remplacez par l'entrée de l'utilisateur
$end = 'Hyène';   // Remplacez par l'entrée de l'utilisateur

// Calcul du chemin le plus court
$result = dijkstra($graph, $start, $end);

// Afficher les résultats
if (!empty($result['path'])) {
    echo "Chemin le plus court de $start à $end : " . implode(' -> ', $result['path']) . "\n";
    echo "Distance totale : " . $result['distance'] . "\n";
} else {
    echo "Aucun chemin trouvé entre $start et $end.\n";
}
?>
