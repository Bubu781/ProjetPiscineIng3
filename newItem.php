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

			<tr>
				<td>Nom :</td>
				<td><input type="text" id="nom"></td>
			</tr>

			<tr>
				<td>Marque :</td>
				<td><input type="text" id="marque"></td>
			</tr>

			<tr>
				<td>Description :</td>
				<td><input type="text" id="description"></td>
			</tr>
			<tr>
				<td>Prix :</td>
				<td><input type="number" step="0.01" id="prix"></td>
			</tr>

			<tr>
				<td>Catégorie :</td>
				<td>
					
					<SELECT id="categorie" onclick="loadFormulaireNewItem()">
					<OPTION VALUE="Vetements" selected="selected">Vetements</OPTION>
					<OPTION VALUE="Livres" >Livres</OPTION>
					<OPTION VALUE="Musiques" >Musiques</OPTION>
					<OPTION VALUE="Sport_Et_Loisir">Sport et loisirs</OPTION>
					</SELECT>
					
				</td>
			</tr>

		</table>
	</div>
	<div id="formulaireDown" >
		<p>Vetements</p>
	</div>
	
	<!--Formulaire pour se connecter-->
	
</body>
</html>