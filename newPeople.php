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

	Date_Expiration_Carte, Nom_Carte, Num_Carte, Type_Carte,Adresse_L1,Adresse_L2,Ville,Code_Postal,Pays,people

	<div id="formulaireDown" >
		<table>

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