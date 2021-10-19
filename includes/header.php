<?php
	

	session_start();
	require_once  'includes/var.php';
	require_once  'includes/functions.php';
	
	?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EXERCICE INTRO PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
	
	include 'includes/navbar.php';
	
	if (!empty($_GET['disconnected']) && $_GET['disconnected'] == 1) {
		echo "<div class='alert alert-warning' role='alert'>Vous êtes bien déconnecté</div>";
	}
	if (!empty($_GET['connected']) && $_GET['connected'] == 1) {
		echo "<div class='alert alert-info' role='alert'>Vous êtes bien connecté</div>";
	}

?>


    <div class="d-flex flex-column">
            <h1 class="display-4 m-auto">EXERCICE INTRO PHP</h1>
            <a href="https://formation-hb.drakolab.fr/php-cda/02-exercices.html#_9-header" class="m-auto">🔗</a>
    </div>
	
	
