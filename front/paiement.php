<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
	include("../createCard.php");
?>

<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Paiement</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<h1>Paiement</h1>
	<form action="">
		<table>
			<tr class="form-group">
				<td><label for="carte">Type de carte : </label><br>
				<input class="form-check-input" type="radio" name="carte" value="Carte Bleue">Carte Bleue
				<input class="form-check-input" type="radio" name="carte" value="Visa">Visa
				<input class="form-check-input" type="radio" name="carte" value="MasterCard">MasterCard</td>
			</tr>
			<tr class="form-group">
				<td><label for="numero">Numéro de carte : </label>
					<input class="form-control" type="text" name="numero">
				</td>
			</tr>
			<tr class="form-group">
				<td><label for="date">Date de fin de validité : </label>
					<input class="form-control" type="month" name="date">
				</td>
			</tr>
			<tr class="form-group">
				<td><label for="crypto">Cryptogramme visuel : </label>
					<input class="form-control" type="text" name="crypto">
				</td>
			</tr>
			<tr class="form-group">
  			<td><input type="submit" class="btn btn-primary" value="Soumettre"/></td>
  		</tr>
		</table>
	</form>
	<?php
		include("footer.php");
	?>
</body>
</html>