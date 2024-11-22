

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Connexion - Page d'accueil</title>

</head>
<body class="d-flex flex-column min-vh-100">
	<div class="container">
    	<!-- inclusion de l'entête du site -->
    	<h1>Connexion</h1>

    	<!-- Formulaire de connexion -->
    	<?php require_once(__DIR__ . '/login.php'); ?>

    	<?php if (isset($loggedUser)) : ?>

    	<?php endif; ?>
	</div>
</body>
</html>