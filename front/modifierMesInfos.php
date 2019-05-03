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
	<title> Mofification des informations</title>
</head>
<body>
	<?php
		include("header.php");
	?>
	<h1> Mofification des informations </h1>





	<form action="../back/traitementNewPeople.php" enctype="multipart/form-data" method="post">

		<div id="formulaireUp" class="block">
			<table class="was-validated">
		
				<tr class="form-group">
					<td>Nom :</td>
	<?php	
		$media = sendRequest('SELECT * FROM people WHERE id = '.$_SESSION['ID_people']);
		$data = mysqli_fetch_assoc($media);

	echo '<td><input type="text" name="nom" value='.$data['Nom'].' class="form-control" placeholder="Saisisez le nom"required>';


			echo'	</tr>';

				echo'<tr class="form-group">';
			echo'		<td>Prenom :</td>';
		echo'			<td><input type="text" name="prenom" value='.$data['Prenom'].'  class="form-control" placeholder="Saisisez le prenom"required></td>';
		echo'		</tr>';

		echo'		<tr class="form-group">';
		echo'			<td>Pseudo :</td>';
		echo'			<td><input type="text" name="pseudo" value='.$data['Pseudo'].'  class="form-control" placeholder="Saisisez le pseudo"required></td>';
		echo'		</tr>';

		echo'		<tr class="form-group">';
		echo'			<td>Mail :</td>';
		echo'			<td><input type="mail" name="mail" value='.$data['Mail'].' class="form-control" placeholder="Saisisez l'."'".'adresse mail"required></td>';
		echo'		</tr>';

		echo'		<tr class="form-group">';
				echo'	<td>Numero de telephonne :</td>';
				echo'	<td><input type="text" name="tel" value='.$data['N_Telephonne'].'  class="form-control" placeholder="Saisisez le numero de telephonne"required></td>';
			echo'	</tr>';



	?>

				

				<tr class="form-group">
					<td>mot de passe :</td>
					<td><input type="password" name="mdp1"  id="mdp1" class="form-control" placeholder="Saisisez le mot de passe"required></td>
				</tr>

				<tr class="form-group">
					<td>mot de passe :</td>
					<td><input type="password" name="mdp2" id="mdp2" class="form-control" placeholder="Saisisez à nouveau le mot de passe"required></td>
				</tr>

				<tr class="form-group">
					<td>Votre image :</td>
					<td><input type="file" name="photo" id="photo" placeholder="votre image "required></td>
				</tr>

				<tr class="form-group">
					<td>Catégorie :</td>
					<td>
						<SELECT name="categorie" id="categorie" class="form-control" onclick="loadFormulaireNewPeople()">
						<OPTION VALUE="client" selected="selected">Client</OPTION>
						<OPTION VALUE="vendeur" >Vendeur</OPTION>
						</SELECT>
					</td>
				</tr>

		</table>

		</div>

		<div id="formulaireDown"  class="block">
			<table>

				<tr class="form-group">
					<td>Pays :</td>
					<td><input type="text" name="pays" required class="form-control" placeholder="Saisisez le pays"></td>
				</tr>

				<tr class="form-group">
					<td>Code Postal :</td>
					<td><input type="number" name="code_postal" required class="form-control" placeholder="Saisisez le code postal"></td>
				</tr>

				<tr class="form-group">
					<td>Ville :</td>
					<td><input type="text" name="ville" required class="form-control" placeholder="Saisisez la ville"></td>
				</tr>

				<tr class="form-group">
					<td>Adresse L1 :</td>
					<td><textarea type="text" name="adresse_l1" required class="form-control" placeholder="ligne 1"></textarea> </td>
				</tr>

				<tr class="form-group">
					<td>Adresse L2 :</td>
					<td><textarea type="text" name="adresse_l2" required class="form-control" placeholder="ligne 2"></textarea> </td>
				</tr>

				<tr class="form-group">
					<td>Type de carte :</td>
					<td>
						<SELECT name="type_carte" required class="form-control">
						<OPTION VALUE="visa" selected="selected" >Visa </OPTION>
						<OPTION VALUE="master">MasterCard</OPTION>
						</SELECT>
					</td>
				</tr>

				<tr class="form-group">
					<td>Numéro de carte :</td>
					<td><input type="text" name="Num_Carte" class="form-control" required placeholder="Saisisez le numero de la carte "></td>
				</tr>

				<tr class="form-group">
					<td>nom sur la carte :</td>
					<td><input type="text" name="Nom_Carte" class="form-control" required placeholder="Saisisez le nom écris sur la carte "></td>
				</tr>

				<tr class="form-group">
					<td>date d'expiration de la carte :</td>
					<td><input type="date" name="Date_Expiration_Carte" class="form-control" required placeholder="Saisisez la date d'expiration de la carte "></td>
				</tr>

				<tr class="form-group">
					<td>code de carte :</td>
					<td><input type="text" name="code_carte" class="form-control" required placeholder="Saisisez le code de la carte "></td>
				</tr>

				<tr class="form-group">
					<td>Porte monnaie :</td>
					<td><input type="text" name="banque" class="form-control" required placeholder="Saisisez la quantité d'argent dans la banque "></td>
				</tr>

			</table>
		</div>

		<tr class="form-group">
			<td align="center"><input class="btn btn-primary" type="submit" name="Valider" onmouseover="validatePwd()"></td>
			<td align="center"><input class="btn btn-primary" type="reset" name="Réinitialiser"></td>
		</tr>

	</form>

	<?php
include("footer.php");
	?>
</body>
</html>