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
	<title>Panier</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<h1>Votre Pannier</h1>
	<div class="block col-sm-8 row">
		<?php
			include("../articlesPanier.php");
		?>
	</div>
	<div class="block col-sm-4">
		<a href="#"><input type="button" value="Payer"></a>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>