<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
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
	<title>Panier</title>
	<script>
		$(document).ready(function(){
			displayTotal();
		});
		$(document).on('change','input', function(){displayTotal()});
	</script>
</head>
<body>
	<?php
		include("header.php");
	?>
	<h1 >Votre Panier</h1>
	<form action="../back/validerPanier.php" method="post">
		<div class="block col-sm-8 row">
			<?php
				displayPanier();
			?>
		</div>
			
		
		<div class="block col-sm-4">
			<span id="Total">
				
			</span>
			<br/>
			<input class="btn btn-sm" type="submit" value="Payer">
		</div>
	</form>
	<?php
		include("footer.php");
	?>
</body>
</html>