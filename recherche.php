<?php


$postData = $_POST;

try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=zoo;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
?>
<?php if(isset($postData['recherche'])):?>
    <?$sqlQuery = 'SELECT * FROM animals WHERE `name` LIKE :recherche ';
	$resultStatement = $mysqlClient->prepare($sqlQuery);
	$resultStatement->execute(['recherche' => $postData['recherche']]);
	$result = $resultStatement->fetchAll();?>
    <a href="#<?=$result?>">Trouver</a>
<?php endif ;?>

<input type="text" id="animal-search" name='recherche' placeholder="Rechercher un animal...">
<button id="search-button">Rechercher</button>
