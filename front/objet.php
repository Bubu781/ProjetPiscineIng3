<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
?>
<?php
$result = sendRequest("SELECT * FROM Item, Media WHERE '".$_GET['ID']."'=Item.Id AND Media.id = item.media ");
	while($data=mysqli_fetch_assoc($result)){
		$Nom = isset($data['Nom'])? $data['Nom']:"";
		$Description = isset($data['Description'])? $data['Description']:"";
		$Image = isset($data['Path1'])? $data['Path1']:"";
		$Prix = isset($data['Prix'])? $data['Prix']:"";
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!-- JQUERY -->
	<script type="text/javascript" src="scripts.js"></script> <!-- JavaScript Page -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!-- BOOTSTRAP -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css"> <!-- CSS Page -->
	<meta charset="UTF-8">
	<title>Mon compte</title>
</head>
<body>

	<?php
		include("header.php");
	?>
	<div class="row">
		<?php echo '<img src="' .$Image. '" alt="Image" width="100" height="100">'; ?>
		<h2><?php echo $Nom; ; ?></h2>
	</div>
	<div class="block" >
		<table>
				<td><strong>Prix: </strong></td>
				<td><?php echo $Prix . '€'; ?></td>
			<tr>
				<td><strong>Description: </strong></td>
				<td><?php echo $Description; ?></td>
			</tr>
		</table>
	</div>

	<?php
		if($_GET['categorie'] == 0){
			$result = sendRequest("SELECT * FROM Vetements, Item WHERE Item.Id = '" . $_GET['ID'] . "' AND Vetements.item = Item.Id");
			while($data = mysqli_fetch_assoc($result)){
				$taille = isset($data['Taille'])?$data['Taille']:"";
				$couleur = isset($data['Couleur'])?$data['Couleur']:"";
				$genre = isset($data['Genre'])?$data['Genre']:"";
				$matiere = isset($data['Matiere'])?$data['Matiere']:"";
				$type = isset($data['Type'])?$data['Type']:"";
			}
	?>
	<div class="block" >
		<table>
			<tr>
				<td>Taille :</td>
				<td><?php echo $taille; ?></td>
			</tr>
			<tr>
				<td>Couleur :</td>
				<td><?php echo $couleur; ?></td>
			</tr>
			<tr>
				<td>Genre : </td>
				<td><?php echo $genre; ?></td>
			</tr>
			<tr>
				<td>Matière : </td>
				<td><?php echo $matiere; ?></td>
			</tr>
			<tr>
				<td>Type : </td>
				<td><?php echo $type; ?></td>
			</tr>
		</table>
	</div>
	<?php
		}else if($_GET['categorie'] == 1){
			$result = sendRequest("SELECT * FROM Musiques, Item WHERE Item.Id = '" . $_GET['ID'] . "' AND Musiques.item = Item.Id");
			while($data = mysqli_fetch_assoc($result)){
				$auteur = isset($data['Auteur'])?$data['Auteur']:"";
				$type = isset($data['Type'])?$data['Type']:"";
				$duree = isset($data['Duree'])?$data['Duree']:"";
				$style = isset($data['Style'])?$data['Style']:"";
				$format = isset($data['Format'])?$data['Format']:"";
			}
	?>
	<div class="block">
		<table>
			<tr>
				<td>Auteur : </td>
				<td><?php echo $auteur; ?></td>
			</tr>
			<tr>
				<td>Type : </td>
				<td><?php echo $type; ?></td>
			</tr>
			<tr>
				<td>Duree : </td>
				<td><?php echo $duree; ?></td>
			</tr>
			<tr>
				<td>Style : </td>
				<td><?php echo $style; ?></td>
			</tr>
			<tr>
				<td>Format : </td>
				<td><?php echo $format; ?></td>
			</tr>
		</table>
	</div>

	<?php
		}else if($_GET['categorie'] == 2){
			$result = sendRequest("SELECT * FROM Livres, Item WHERE Item.Id = '" . $_GET['ID'] . "' AND Livres.item = Item.Id");
			while($data = mysqli_fetch_assoc($result)){
				$auteur = isset($data['Auteur'])?$data['Auteur']:"";
				$nb_pages = isset($data['Nb_Pages'])?$data['Nb_Pages']:"";
				$date_sortie = isset($data['Date_Sortie'])?$data['Date_Sortie']:"";
				$genre = isset($data['Genre'])?$data['Genre']:"";
				$format = isset($data['Format'])?$data['Format']:"";
			}
	?>
	<div class="block">
		<table>
			<tr>
				<td>Auteur : </td>
				<td><?php echo $auteur; ?></td>
			</tr>
			<tr>
				<td>Nombre de pages : </td>
				<td><?php echo $nb_pages; ?></td>
			</tr>
			<tr>
				<td>Date de sortie : </td>
				<td><?php echo $date_sortie; ?></td>
			</tr>
			<tr>
				<td>Genre : </td>
				<td><?php echo $genre; ?></td>
			</tr>
			<tr>
				<td>Format : </td>
				<td><?php echo $format; ?></td>
			</tr>
		</table>
	</div>

	<?php
		}else if($_GET['categorie'] == 3){
			$result = sendRequest("SELECT * FROM Sport_et_Loisir, Item WHERE Item.Id = '" . $_GET['ID'] . "' AND Sport_et_Loisir.item = Item.Id");
			while($data = mysqli_fetch_assoc($result)){
				$code = isset($data['Code'])?$data['Code']:"";
				$poids = isset($data['Poids'])?$data['Poids']:"";
				$taille = isset($data['Taille'])?$data['Taille']:"";
			}
	?>
	<div class="block">
		<table>
			<tr>
				<td>Code : </td>
				<td><?php echo $code; ?></td>
			</tr>
			<tr>
				<td>Poids : </td>
				<td><?php echo $poids; ?></td>
			</tr>
			<tr>
				<td>Taille : </td>
				<td><?php echo $taille; ?></td>
			</tr>
		</table>
	</div>
	<?php
		}
		include ("footer.php");
	?>

	<button class="bouton btn btn-dark btn-sm" type="submit" name="ajout"> Ajouter au panier </button>
</body>
</html>