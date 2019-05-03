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





	<form action="../back/traitementUpdatePeople.php" enctype="multipart/form-data" method="post">

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

				

			echo'		<tr class="form-group">';
			echo'			<td>mot de passe :</td>';
			echo'			<td><input type="password" name="mdp1"  value='.$data['Mot_De_Passe'].'  id="mdp1" class="form-control" placeholder="Saisisez le mot de passe"required></td>';
			echo'		</tr>';
	
			echo'		<tr class="form-group">';
			echo'			<td>mot de passe :</td>';
			echo'			<td><input type="password" name="mdp2"  value='.$data['Mot_De_Passe'].' id="mdp2" class="form-control" placeholder="Saisisez à nouveau le mot de passe"required></td>';
			echo'		</tr>';

			echo'		<tr class="form-group">';
			echo'			<td>Votre image :</td>';
			echo'			<td><input type="file" name="photo" id="photo"  placeholder="votre image "></td>';
			echo'		</tr>';



		  if ($_SESSION['type_utilisateur'] == 2){


		$media = sendRequest('SELECT * FROM people,client WHERE people.id = '.$_SESSION['ID_people'].' AND people.id = client.people');
		$data = mysqli_fetch_assoc($media);

		echo'		<tr class="form-group">';
	echo'				<td>Pays :</td>';
	echo'				<td><input type="text" name="pays" required  value='.$data['Pays'].' class="form-control" placeholder="Saisisez le pays"></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Code Postal :</td>';
	echo'				<td><input type="number" name="code_postal" value='.$data['Code_Postal'].'  required class="form-control" placeholder="Saisisez le code postal"></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Ville :</td>';
	echo'				<td><input type="text" name="ville" required value='.$data['Ville'].'  class="form-control" placeholder="Saisisez la ville"></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Adresse L1 :</td>';
	echo'				<td><textarea type="text" name="adresse_l1" required   class="form-control" placeholder="ligne 1">'.$data['Adresse_L1'].'</textarea> </td>';
	echo'			</tr>';
	echo'			<tr class="form-group">';
	echo'				<td>Adresse L2 :</td>';
	echo'				<td><textarea type="text" name="adresse_l2" required  value='.$data['Adresse_L2'].' class="form-control" placeholder="ligne 2"></textarea> </td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Type de carte :</td>';
	echo'				<td>';
	echo'					<SELECT name="type_carte" required class="form-control">';
	echo'					<OPTION VALUE="visa" selected="selected" >Visa </OPTION>';
	echo'					<OPTION VALUE="master">MasterCard</OPTION>';
	echo'					</SELECT>';
	echo'				</td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Numéro de carte :</td>';
	echo'				<td><input type="text" name="Num_Carte"  value='.$data['Num_Carte'].' class="form-control" required placeholder="Saisisez le numero de la carte "></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>nom sur la carte :</td>';
	echo'				<td><input type="text" name="Nom_Carte" value='.$data['Nom_Carte'].'  class="form-control" required placeholder="Saisisez le nom écris sur la carte "></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>date d'."'".'expiration de la carte :</td>';
	echo'				<td><input type="date" name="Date_Expiration_Carte" value='.$data['Date_Expiration_Carte'].'  class="form-control" required placeholder="Saisisez la date d'."'".'expiration de la carte "></td>';
	echo'			</tr>';
	echo'			<tr class="form-group">';
	echo'				<td>code de carte :</td>';
	echo'				<td><input type="text" name="code_carte" class="form-control"  value='.$data['Code_Carte'].' required placeholder="Saisisez le code de la carte "></td>';
	echo'			</tr>';

	echo'			<tr class="form-group">';
	echo'				<td>Porte monnaie :</td>';
	echo'				<td><input type="text" name="banque" class="form-control"  value='.$data['Porte_Monnaie'].' required placeholder="Saisisez la quantité d'."'".'argent dans la banque "></td>';
	echo'			</tr>';

		  }
		  else if ($_SESSION['type_utilisateur'] == 1){
		  			$media = sendRequest('SELECT * FROM people,vendeur WHERE people.id = '.$_SESSION['ID_people'].' AND people.id = vendeur.people');
		$data = mysqli_fetch_assoc($media);

	echo'			<tr class="form-group">';
	echo'				<td>Porte monnaie :</td>';
	echo'				<td><input type="text" name="banque" class="form-control"  value='.$data['Porte_Monnaie'].' required placeholder="Saisisez la quantité d'."'".'argent dans la banque "></td>';
	echo'			</tr>';

			echo'		<tr class="form-group">';
			echo'			<td>Votre image Favorite :</td>';
			echo'			<td><input type="file" name="photo2" id="photo2"  placeholder="votre image Favorite "></td>';
			echo'		</tr>';


		  }


	?>
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