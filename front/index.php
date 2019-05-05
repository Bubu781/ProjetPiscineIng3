<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
	include("../traitement.php");
?>

<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Ventes flashs</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<!--Les ventes flash, affichées dans un container, le container contient 4 div, chaque div contient 
	un titre h2 et au maximum 4 produits relatifs à la catégorie choisie -->
	<h1>Ventes flash<br></h1>
	<div id="container">
		<div class="row">
			<div id="Vetements" class="col-sm-6">
				<h2 class="title">Vêtements</h2>
				<?php
					displayCards("Vetements");
				?>
			</div>
			<div id="Musiques" class="col-sm-6">
				<h2 class="title">Musiques</h2>
				<?php
					displayCards("musiques");
				?>
			</div>
		</div>
		<div class="row">
			<div id="Livres" class="col-sm-6">
				<h2 class="title">Livres</h2>
				<?php
					displayCards("livres");
				?>
			</div>
			<div id="SportsLoisirs" class="col-sm-6">
				<h2 class="title">Sports et Loisirs</h2>
				<?php
					displayCards("sport_et_loisir");
				?>
			</div>
		</div>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>