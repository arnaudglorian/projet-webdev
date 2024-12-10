<?php
session_start();

// Activer les messages d'erreur pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zoo', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Soumission d'un avis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['username'])) {
    $name = $_SESSION['username']; // Récupérer le nom de l'utilisateur connecté
    $review = htmlspecialchars($_POST['reviewText']); // Échapper le contenu de l'avis

    if (!empty($review)) {
        // Insérer l'avis dans la base de données
        $stmt = $pdo->prepare('INSERT INTO avis (name, review) VALUES (:name, :review)');
        $stmt->execute(['name' => $name, 'review' => $review]);
        header('Location: avis.php'); // Rediriger pour éviter une double soumission
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis</title>
    <!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="avis3.css">
</head>
<body>

<header class="header">
    <h1>Avis sur notre parc</h1>
</header>

<nav>
    <a href="accueil.php">Accueil</a>
    <a href="#contact">Contact</a>
    <a href="billeterie.html">Billeterie</a>
    <a href="Nosservices.html">Nos services</a>
    <a href="lesanimaux3.php">Nos enclos et animaux</a>
    
</nav>

<section class="reviews" id="avis">
    <div class="container">
        <h2>Laissez votre avis</h2>

        <!-- Formulaire pour ajouter un avis -->
        <div class="review-form">
            <?php if (isset($_SESSION['username'])) : ?>
                <form method="POST" action="">
                    <textarea id="reviewText" name="reviewText" placeholder="Votre avis" rows="4" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            <?php else : ?>
                <p>Vous devez être connecté pour laisser un avis. <a href="accueil.php">Se connecter</a></p>
            <?php endif; ?>
        </div>

        <!-- Liste des avis -->
        <div class="reviews-list">
            <h3>Ce que disent nos utilisateurs :</h3>
            <?php
            // Récupérer les avis depuis la table 'avis'
            $stmt = $pdo->query('SELECT name, review, created_at FROM avis ORDER BY created_at DESC');
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="review-card">';
                echo '<p>"' . htmlspecialchars($row['review']) . '"</p>';
                echo '<h4>' . htmlspecialchars($row['name']) . '</h4>';
                echo '<small>' . htmlspecialchars($row['created_at']) . '</small>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<footer id="contact">
    <p>Contactez-nous : parcanimalier@labarbene.fr | Téléphone : 01 23 45 67 89</p>
</footer>

</body>
</html>
