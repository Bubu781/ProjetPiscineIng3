<!-- Initialisation de la session -->
<?php
	session_start();
	include("sendRequest.php");
	include("autoConnect.php");

	$_SESSION['type_utilisateur'] = 1;
	$_SESSION['ID_people'] = 3;
?>


<!DOCTYPE html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Ajouter Item</title>
</head>
<body>
	<?php
		include("header.php");
	?>

	<div class="formulaireUp">

		<table>

			<tr class="form-group">
				<td>Nom :</td>
				<td><input type="text" id="nom" class="form-control" placeholder="Saisisez le nom"></td>
			</tr>

			<tr class="form-group">
				<td>Prenom :</td>
				<td><input type="text" id="prenom" class="form-control" placeholder="Saisisez le prenom"></td>
			</tr>

			<tr class="form-group">
				<td>Pseudo :</td>
				<td><input type="text" id="pseudo" class="form-control" placeholder="Saisisez le pseudo"></td>
			</tr>

			<tr class="form-group">
				<td>Mail :</td>
				<td><input type="mail" id="pseudo" class="form-control" placeholder="Saisisez l'adresse mail"></td>
			</tr>

			<tr class="form-group">
				<td>Numero de telephonne :</td>
				<td><input type="text" id="tel" class="form-control" placeholder="Saisisez le numero de telephonne"></td>
			</tr>

			<tr class="form-group">
				<td>mot de passe :</td>
				<td><input type="password" id="mdp1" class="form-control" placeholder="Saisisez le mot de passe"></td>
			</tr>

			<tr class="form-group">
				<td>mot de passe :</td>
				<td><input type="password" id="mdp2" class="form-control" placeholder="Saisisez à nouveau le mot de passe"></td>
			</tr>

			<tr class="form-group">
				<td>Catégorie :</td>
				<td>
					<SELECT id="categorie" class="form-control" onclick="loadFormulaireNewPeople()">
					<OPTION VALUE="client" selected="selected">Client</OPTION>
					<OPTION VALUE="vendeur" >Vendeur</OPTION>
					</SELECT>
				</td>
			</tr>


	</table>

	</div>

	 Ville,Code_Postal,Pays,people

	<div id="formulaireDown" >
		<table>

			<tr class="form-group">
				<td>Pays :</td>
				<td><input type="text" id="pays" class="form-control" placeholder="Saisisez le pays"></td>
			</tr>

			<tr class="form-group">
				<td>Code Postal :</td>
				<td><input type="number" id="code_postal" class="form-control" placeholder="Saisisez le code postal"></td>
			</tr>

			<tr class="form-group">
				<td>Ville :</td>
				<td><input type="text" id="ville" class="form-control" placeholder="Saisisez la ville"></td>
			</tr>

			<tr class="form-group">
				<td>Adresse L1 :</td>
				<td><textarea type="text" id="adresse_l1" class="form-control" placeholder="ligne 1"></textarea> </td>
			</tr>

			<tr class="form-group">
				<td>Adresse L2 :</td>
				<td><textarea type="text" id="adresse_l2" class="form-control" placeholder="ligne 2"></textarea> </td>
			</tr>

			<tr class="form-group">
				<td>Type de carte :</td>
				<td>
					<SELECT id="type_carte" class="form-control">
					<OPTION VALUE="visa" selected="selected" >Visa </OPTION>
					<OPTION VALUE="master">MasterCard</OPTION>
					</SELECT>
				</td>
			</tr>

			<tr class="form-group">
				<td>Numéro de carte :</td>
				<td><input type="text" id="Num_Carte" class="form-control" placeholder="Saisisez le numero de la carte "></td>
			</tr>

			<tr class="form-group">
				<td>nom sur la carte :</td>
				<td><input type="text" id="Nom_Carte" class="form-control" placeholder="Saisisez le nom écris sur la carte "></td>
			</tr>

			<tr class="form-group">
				<td>date d'expiration de la carte :</td>
				<td><input type="date" id="Date_Expiration_Carte" class="form-control" placeholder="Saisisez la date d'expiration de la carte "></td>
			</tr>

			<tr class="form-group">
				<td>code de carte :</td>
				<td><input type="text" id="code_carte" class="form-control" placeholder="Saisisez le code de la carte "></td>
			</tr>

			<tr class="form-group">
				<td>Porte monnaie :</td>
				<td><input type="text" id="banque" class="form-control" placeholder="Saisisez la quantité d'argent dans la banque "></td>
			</tr>


		</table>
	</div>
	
</body>
</html>