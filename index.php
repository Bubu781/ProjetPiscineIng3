<!-- Initialisation de la session -->
<?php
	session_start();
	include("sendRequest.php");
	include("autoConnect.php");
	include("createCard.php");
?>

<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>Ventes flash</h1>
	<div id="container">
		<div class="row">
			<div id="Vetements" class="col-sm-6">
				<h2>Vêtements</h2>
				<?php
					displayCards("Vetements");
				?>
			</div>
			<div id="Musiques" class="col-sm-6">
				<h2>Musiques</h2>
				<?php
					displayCards("musiques");
				?>
			</div>
		</div>
		<div class="row">
			<div id="Livres" class="col-sm-6">
				<h2>Livres</h2>
				<?php
					displayCards("livres");
				?>
			</div>
			<div id="SportsLoisirs" class="col-sm-6">
				<h2>Sports et Loisirs</h2>
				<?php
					displayCards("sport_et_loisir");
				?>
			</div>
		</div>
	</div>
</body>
</html>