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
	<title>Recherche</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<!--Les ventes flash, affichées dans un container, le container contient 4 div, chaque div contient 
	un titre h2 et au maximum 4 produits relatifs à la catégorie choisie -->
	<h1>Résultat de la recherche :</h1>
	<div id="container">
		<?php
			displayRecherche($_GET['search']);
		?>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>