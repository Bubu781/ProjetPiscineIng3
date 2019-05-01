<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");

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
				<td><input type="text" id="nom" name="nom" class="form-control" placeholder="Saisisez le nom"></td>
			</tr>

			<tr class="form-group">
				<td>Marque :</td>
				<td><input type="text" id="Marque" name="Marque" class="form-control" placeholder="Saisisez le nom"></td>
			</tr>

			<tr class="form-group">
				<td>Descrition :</td>
				<td><textarea type="text" id="description" name="description" class="form-control" placeholder="Saisisez la description ici"></textarea> </td>
			</tr>

			<tr class="form-group">
				<td>Prix :</td>
				<td><input type="number" step="0.01" id="prix" name="prix" class="form-control" placeholder="Saisisez le prix"></td>
			</tr>

			<tr class="form-group">
				<td>Votre image n°1 :</td>
				<td><input type="file" name="photo1" id="photo1" placeholder="votre image "required></td>
			</tr>

			<tr class="form-group">
				<td>Votre image n°2 :</td>
				<td><input type="file" name="photo2" id="photo2" placeholder="votre image "></td>
			</tr>

			<tr class="form-group">
				<td>Votre image n°3 :</td>
				<td><input type="file" name="photo3" id="photo3" placeholder="votre image "></td>
			</tr>

			<tr class="form-group">
				<td>Votre image n°4 :</td>
				<td><input type="file" name="photo4" id="photo4" placeholder="votre image "></td>
			</tr>

			<tr class="form-group">
				<td>Votre image n°5 :</td>
				<td><input type="file" name="photo5" id="photo5" placeholder="votre image "></td>
			</tr>

			<tr class="form-group">
				<td>Catégorie :</td>
				<td>
					
					<SELECT id="categorie" name="categorie" class="form-control" onclick="loadFormulaireNewItem()">
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
		<table>
				<tr class="form-group">
					<td>Couleur :</td>
					<td><input type="text" id="Couleur"  name="Couleur" class="form-control" placeholder="Saisisez la couleur"></td>
				</tr>

				<tr class="form-group">
					<td>Matière :</td>
					<td><input type="text" id="matiere" name="matiere" class="form-control" placeholder="Saisisez la matière. ex : lin"></td>
				</tr>

				<tr class="form-group">
					<td>type :</td>
					<td><input type="text" id="type" name="type" class="form-control" placeholder="Saisisez le type. ex : teeshirt"></td>
				</tr>

				<tr class="form-group">
					<td>Genre :</td>
					<td>
						<SELECT id="genre" name="genre" class="form-control">
						<OPTION VALUE="homme" selected="selected" >Homme</OPTION>
						<OPTION VALUE="femme">Femme</OPTION>
						</SELECT>
					</td>
				</tr>

				<tr class="form-group">
					<td>Taille :</td>
					<td>
						<SELECT id="taille" name="taille" class="form-control">
						<OPTION VALUE="XS" >XS</OPTION>
						<OPTION VALUE="S" >S</OPTION>
						<OPTION VALUE="M" selected="selected" >M</OPTION>
						<OPTION VALUE="L">L</OPTION>
						<OPTION VALUE="XL">XL</OPTION>
						<OPTION VALUE="XXL">XXL</OPTION>
						</SELECT>
					</td>
				</tr>

		</table>
	</div>
	
	
	<!--Formulaire pour se connecter-->
	
</body>
</html>