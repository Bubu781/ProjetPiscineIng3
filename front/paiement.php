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
	<title>Paiement</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<h1>Paiement</h1>
	<form action="../back/paiementBDD.php" method="post">
		<table>
			<tr>
				<tr><td><label for="carte">Type de carte : </label></td>
				<td><br><input  type="radio" name="carte[]" value="Carte Bleue">Carte Bleue <br>
				<input type="radio" name="carte[]" value="Visa">Visa<br>
				<input type="radio" name="carte[]" value="MasterCard">MasterCard </td>
			</tr>
			<tr class="form-group">
				<td><label for="numero">Nom du propriétaire de la carte : </label>
					<input class="form-control" type="text" name="nom" required>
				</td>
			</tr>	
			<tr class="form-group">
				<td><label for="numero">Numéro de carte : </label>
					<input class="form-control" type="text" name="numero" required>
				</td>
			</tr>
			<tr class="form-group">
				<td><label for="date">Date de fin de validité : </label>
					<input class="form-control" type="month" name="date" required>
				</td>
			</tr>
			<tr class="form-group">
				<td><label for="crypto">Cryptogramme visuel : </label>
					<input class="form-control" type="text" name="crypto" required><br>
				</td>
			</tr>
			<tr class="form-group">
  			<td><input type="submit" class="bouton btn" value="Soumettre"/></td>
  		</tr>
		</table>
	</form>
	<?php
		include("footer.php");
	?>
</body>
</html>