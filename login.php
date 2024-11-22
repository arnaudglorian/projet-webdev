<?php


$postData = $_POST;

try {
    // On se connecte à MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=zoo;charset=utf8', 'root', '',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

/**
 * On ne traite pas les super globales provenant de l'utilisateur directement,
 * ces données doivent être testées et vérifiées.
 */



// Validation du formulaire
if (isset($postData['email']) &&  isset($postData['password'])) {
	$sqlQuery = 'SELECT * FROM users WHERE `password`=:pw AND mail=:email';
	$resultStatement = $mysqlClient->prepare($sqlQuery);
	$resultStatement->execute(['pw' => $postData['password'],'email'=>$postData['email']]);
	$user = $resultStatement->fetchAll();
	
	if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    	$errorMessage = 'Il faut un email valide pour soumettre le formulaire.';
	} else {
    	foreach ($user as $user) {
        	if (
            	$user['mail'] === $postData['email'] &&
            	$user['password'] === $postData['password']
        	) {
            	$loggedUser = [
                	'email' => $user['mail'],
            	];
        	}
    	}

    	if (!isset($loggedUser)) {
        	$errorMessage = sprintf(
            	'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
            	$postData['email'],
            	strip_tags($postData['password'])
        	);
    	}
	}
}
?>

	<!--
   	Si utilisateur/trice est non identifié(e), on affiche le formulaire
	-->
<?php if (!isset($loggedUser)) : ?>
	<form action="accueil.php" method="POST">
    	<!-- si message d'erreur on l'affiche -->
    	<?php if (isset($errorMessage)) : ?>
        	<div class="alert alert-danger" role="alert">
            	<?php echo $errorMessage; ?>
        	</div>
    	<?php endif; ?>
    	<div class="mb-3">
			<div id="email-help" class="form-text">Email utilisé lors de la création de compte</div>
        	<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
    	</div>
    	<div class="mb-3">
        	<label for="password" class="form-label">Mot de passe</label>
        	<input type="password" class="form-control" id="password" name="password">
    	</div>
    	<button type="submit" class="login-btn">Se Connecter</button>
	</form>
	<!-- Si utilisateur/trice bien connectée on affiche un message de succès -->
<?php else : ?>
	<div class="alert alert-success" role="alert">
    	Bonjour <?php echo $loggedUser['email']; ?> et bienvenue sur le site !
	</div>
<?php endif; ?>