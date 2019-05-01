<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
?>

<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<!--Vérification que la catégorie envoyée existe, sinon on n'affiche rien -->
	<?php
		if( isset($_GET['categorie']) && ($_GET['categorie'] == "0" || $_GET['categorie'] == "1" || $_GET['categorie'] == "2" || $_GET['categorie'] == "3") || $_GET['categorie'] == 4){
	?>
	<!--Les ventes flash, affichées dans un container, le container contient 4 div, chaque div contient 
	un titre h2 et au maximum 4 produits relatifs à la catégorie choisie -->
	<h1><?php
		if($_GET['categorie'] == 0){
			echo "Vêtements";
		}else if($_GET['categorie'] == 1){
			echo "Musiques";
		}else if($_GET['categorie'] == 2){
			echo "Livres";
		}else if($_GET['categorie'] == 2){
			echo "Sports et Loisirs";
		}else{
			echo "Toutes catégories";
		}
	?></h1>
	<div id="container">
		<?php
			displayArticles($_GET['categorie']);
		?>
	</div>
	<?php
		}else{
			echo "Page non trouvée..";
		}
	?>
	<?php
		include("footer.php");
	?>
</body>
</html>