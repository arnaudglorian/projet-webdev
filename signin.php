<?php


$postData = $_POST;

try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=zoo;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

if (isset($postData['emailI']) &&  isset($postData['passwordI'])) {
	$sqlQuery = 'SELECT * FROM users WHERE mail = :email';
    $statment = $mysqlClient->prepare($sqlQuery);
    $statment->execute(['email' => $postData['emailI']]);
    $user = $statment->fetch();
	if (!filter_var($postData['emailI'], FILTER_VALIDATE_EMAIL)) {
    	$errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
	} else {
        if ($user){
		$errorMessage = sprintf(
			'Vous êtes déjà inscrit(%s)',
			$postData['emailI']
		);
        }
        
    	else  {
			$sqlAdd = 'INSERT INTO users(`password`, mail,username) VALUES (:pw, :mail,:un)';
        	$addStatement = $mysqlClient->prepare($sqlAdd);
        	$addStatement->execute([
				'pw' => $postData['passwordI'],
				'mail'=>$postData['emailI'],
				'un'=>$postData['usernameI']
			]);
			$signedUser = ['username' => $postData['usernameI'],];
    	}
	}
}
?>

<?php if (!isset($signedUser)) : ?>
	<form action="accueil.php" method="POST">
    	<!-- si message d'erreur on l'affiche -->
    	<?php if (isset($errorMessage)) : ?>
        	<div class="alert alert-danger" role="alert">
            	<?php echo $errorMessage; ?>
        	</div>
    	<?php endif; ?>
    	<div class="mb-3">
			<div class="form-text">Email</div>
        	<input type="email" class="form-control"  name="emailI" aria-describedby="email-help" placeholder="you@exemple.com">
    	</div>
		<div class="mb-3">
			<div>Username</div>
			<input class="form-control" name="usernameI">
		</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="password" class="form-control" name="passwordI">
    	</div>
    	<button type="submit" class="btn-connexion">S'inscrire</button>
	</form>
	<!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
<?php else : ?>
	<div class="alert alert-success" role="alert">
    	Inscription effectuée !
	</div>
<?php endif; ?>