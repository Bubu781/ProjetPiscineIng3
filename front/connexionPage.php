<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
?>

<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Connexion</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<!--Formulaire pour se connecter-->

		 <table>	
		 	<form action="../connexion.php" method="post">
		 		<tr class="form-group">
		 		
		 		<td><label for="pseudo">Pseudo: </label>
		 		<?php echo '<input type="text" class="form-control" name="pseudo" value="' . (isset($_COOKIE['pseudo'])?$_COOKIE['pseudo']:'') . '" required/>'; ?>
		 		 </td>
		 		</tr>

		 		<tr class="form-group">
		 			
		 			<td><label for="mdp">Mot de passe:</label>
    			<?php echo '<input type="password" class="form-control" name="mdp" value="' . (isset($_COOKIE['password'])?$_COOKIE['password']:'') . '"required/>'; ?></td>
		 		</tr>

		 		<tr class="form-group form-check">
    			<td><label class="form-check-label">
      		<input class="form-check-input" type="checkbox" name="remember"/> Se souvenir de moi
   				</label> </td>
  			</tr>
  			<tr>
  				<td><input type="submit" class="btn btn-primary" value="Soumettre"/></td>	
  			</form>
  				<td>	<form action="newPeople.php" method="post"><input type="submit" class="btn btn-primary" value="S'inscrire"/></td></form>
  			</tr>

		 </table>

	<?php
		include("footer.php");
	?>
</body>
</html>