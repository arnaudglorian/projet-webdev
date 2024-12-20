<?php
session_start();
include 'config.php';

$animals = [];
$message = "";

// Vérifier si une recherche a été effectuée
if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
    $query = trim($_GET['query']);

    // Vérifier la longueur minimale du terme de recherche
    if (strlen($query) < 2) {
        $message = "Veuillez entrer au moins 2 caractères pour effectuer une recherche.";
    } else {
        // Préparer et exécuter une requête sécurisée
        $stmt = $conn->prepare("
            SELECT animals.id AS animal_id, animals.name, relation_enclos_animals.id_enclos
            FROM animals
            JOIN relation_enclos_animals ON animals.id = relation_enclos_animals.id_animal
            WHERE animals.name LIKE ?");
        $searchTerm = "%$query%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $animals[] = [
                    'id' => $row['animal_id'],
                    'name' => $row['name'],
                    'enclosure_id' => $row['id_enclos'],
                ];
            }
        } else {
            $message = "Aucun animal trouvé pour \"$query\".";
        }

        $stmt->close();
    }
} elseif (isset($_GET['query'])) {
    $message = "Le champ de recherche est vide. Veuillez entrer un nom.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'animaux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .search-container {
            margin-bottom: 20px;
        }
        .search-container input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .search-container button {
            padding: 10px 15px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-container button:hover {
            background-color: #0056b3;
        }
        .results {
            margin-top: 20px;
        }
        .results .animal {
            background: white;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Recherche d'animaux</h1>

    <div class="search-container">
        <form method="GET" action="">
            <input type="text" name="query" placeholder="Entrez le nom d'un animal" value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
            <button type="submit">Rechercher</button>
        </form>
    </div>

    <div class="results">
        <?php if (!empty($animals)): ?>
            <h2>Résultats de la recherche :</h2>
            <?php foreach ($animals as $animal): ?>
                <div class="animal">
                    <strong>Nom :</strong> <?= htmlspecialchars($animal['name']) ?><br>
                    <strong>ID Animal :</strong> <?= htmlspecialchars($animal['id']) ?><br>
                    <strong>ID Enclos :</strong> <?= htmlspecialchars($animal['enclosure_id']) ?>
                </div>
            <?php endforeach; ?>
        <?php elseif (!empty($message)): ?>
            <p><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
