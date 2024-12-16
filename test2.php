<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saisie des positions</title>
</head>
<body>
    <h1>Entrez votre position d'origine et de destination</h1>

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs des champs
        $origine = htmlspecialchars($_POST["origine"]);
        $destination = htmlspecialchars($_POST["destination"]);
    }
    ?>
</body>
</html>
