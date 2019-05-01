<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
	include("../createCard.php");
?>
<?php
$result = sendRequest("SELECT * FROM Item WHERE '".$_SESSION['Id']."'=Id");
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
	<div class="block" >
	<table>
		<tr>
			<td>
				<!--Photo de l'objet-->
				<?php echo <img class="card-img" src="' .$Image. '" alt="Image">; ?>
			</td>
			<td><h2><?php echo $Nom; ; ?></h2></td>
		</tr>
			<td><strong>Prix: </strong></td>
			<td><?php echo $Prix; ?></td>
		<tr>
			<td><strong>Description: </strong></td>
			<td><?php echo $Description; ?></td>
		</tr>


	</table>
</div>

<?php
		if($_GET['categorie'] == 0{


			}else if($_GET['categorie'] == 1){
			
		}else if($_GET['categorie'] == 2){
			
		}else if($_GET['categorie'] == 2){
			
			$result = sendRequest("SELECT * FROM );
			while($data = mysqli_fetch_assoc($result)){
			}
	?>
		<tr>


			<td><strong>Prénom: </strong></td>
			<td><?php echo $Prenom; ?></td>
		</tr>
		<tr>
			<td><strong>Tel: </strong></td>
			<td><?php echo $Tel; ?></td>
		</tr>
		<tr>
			<td><strong>Mail: </strong></td>
			<td><?php echo $Mail; ?></td>
		</tr>

			
	</table>
</div>
<?php
	include ("footer.php");
	?>

	<button class="bouton btn btn-dark btn-sm" type="submit" name="ajout"> Ajouter au panier </button>
</body>
</html>