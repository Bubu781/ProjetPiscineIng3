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
	$_POST['ID'] = $_GET['ID'];
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
		<?php echo '<img src="' .$Image. '" alt="Image" width="200" height="200">'; ?>
		<h1 class="nobjet"><?php echo $Nom; ; ?></h1>
	</div>
	<div class="block col-lg-4" >
		<table>
				<td class="titre">Prix: </td>
				<td><?php echo $Prix . '€'; ?></td>
			<tr><td class="titre">Description:</td></tr>
			<tr><td><div class="description"><?php echo $Description; ?></td></div>
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
	<div class="block col-lg-6" >
		<form action="../ajouterPanier.php" method="POST">
			<table>
				<tr>
				<td class="titre">Taille :</td>
				<td><?php echo $taille; ?></td>
			</tr>
			<tr>
				<td class="titre">Couleur :</td>
				<td><?php echo $couleur; ?></td>
			</tr>
			<tr>
				<td class="titre">Genre : </td>
				<td><?php echo $genre; ?></td>
			</tr>
			<tr>
				<td class="titre">Matière : </td>
				<td><?php echo $matiere; ?></td>
			</tr>
			<tr>
				<td class="titre">Type : </td>
				<td><?php echo $type; ?></td>
			</tr>
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
	<div class="block col-lg-6">
		<form action="../ajouterPanier.php" method="POST">
		<table>
			<tr>
				<td class="titre">Auteur : </td>
				<td><?php echo $auteur; ?></td>
			</tr>
			<tr>
				<td class="titre">Type : </td>
				<td><?php echo $type; ?></td>
			</tr>
			<tr>
				<td class="titre">Duree : </td>
				<td><?php echo $duree; ?></td>
			</tr>
			<tr>
				<td class="titre">Style : </td>
				<td><?php echo $style; ?></td>
			</tr>
			<tr>
				<td class="titre">Format : </td>
				<td><?php echo $format; ?></td>
			</tr>
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
	<div class="block col-lg-6">
		<form action="../ajouterPanier.php" method="POST">
		<table>
			<tr>
				<td class="titre">Auteur : </td>
				<td><?php echo $auteur; ?></td>
			</tr>
			<tr>
				<td class="titre">Nombre de pages : </td>
				<td><?php echo $nb_pages; ?></td>
			</tr>
			<tr>
				<td class="titre">Date de sortie : </td>
				<td><?php echo $date_sortie; ?></td>
			</tr>
			<tr>
				<td class="titre">Genre : </td>
				<td><?php echo $genre; ?></td>
			</tr>
			<tr>
				<td class="titre">Format : </td>
				<td><?php echo $format; ?></td>
			</tr>
	<?php
		}else if($_GET['categorie'] == 3){
			$result = sendRequest("SELECT * FROM Sport_et_Loisir, Item WHERE Item.Id = '" . $_GET['ID'] . "' AND Sport_et_Loisir.item = Item.Id");
			while($data = mysqli_fetch_assoc($result)){
				$code = isset($data['Code'])?$data['Code']:"";
				$poids = isset($data['Poids'])?$data['Poids']:"";
				$taille = isset($data['Taille'])?$data['Taille']:"";
			}
	?>
	<div class="block col-lg-6">
		<form action="../ajouterPanier.php" method="POST">
		<table>
			<tr>
				<td class="titre">Code : </td>
				<td><?php echo $code; ?></td>
			</tr>
			<tr>
				<td class="titre">Poids : </td>
				<td><?php echo $poids; ?></td>
			</tr>
			<tr>
				<td class="titre">Taille : </td>
				<td><?php echo $taille; ?></td>
			</tr>
	<?php
		}
	?>

			</table>
			<?php echo '<input type="hidden" name="ID" value="' . $_GET['ID'] . '">'; ?>
			<input class="bouton btn btn-dark btn-sm" type="submit" value="Ajouter au panier" />
		</form>
	</div>
	<?php
		include ("footer.php");
	?>
</body>
</html>