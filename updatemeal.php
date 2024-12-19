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
<?php if (isset($postData['enclo']) &&  isset($postData['repas'])) :?>
	<?php $sqlQuery = 'UPDATE enclosures SET meal=:repas WHERE `id`=:enclo ';
	$resultStatement = $mysqlClient->prepare($sqlQuery);
	$resultStatement->execute(['enclo' => $postData['enclo'],'repas'=>$postData['repas']]);?>
    <div> L'heure a bien été mise à jour</div>
<?php endif;?>

    <form action="horraire.php" id="loginForm" method="POST">
    	<div class="mb-3">
			<div id="email-help" class="form-text">Entrez l'id de l'enclos</div>
        	<input class="form-control" id="enclo" name="enclo" placeholder="id de l'enclos" required>
    	</div>
    	<div class="mb-3">
        	<label class="form-label">Entrez la nouvelle heure de repas</label>
        	<input class="form-control" id="repas" name="repas" required>
    	</div>
    	<button type="submit" class="login-btn">changer l'heure</button>
	</form>