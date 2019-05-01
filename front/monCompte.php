<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
	include("../createCard.php");
	//a supprimer
	$_SESSION['type_utilisateur'] = 2;
	$_SESSION['ID_people'] = 1;
?>
<?php
	if(isset($_SESSION['ID_people'])){

	}
	$result = sendRequest("SELECT * FROM People WHERE '".$_SESSION['ID_people']."'=Id");
	while($data=mysqli_fetch_assoc($result)){
		$Nom = $data['Nom'];
		$Pseudo = $data['Pseudo'];
		$Prenom = $data['Prenom'];
		$Tel = $data['Tel'];
		$Mail = $data['Mail'];
		$Mdp = $data['Mot_De_Passe'];
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
<body id = "ok">
	<?php
		include("header.php");
	?>

	<h1>Mon Compte</h1>
	<div class="block" >
	<table>
		<tr>
			<td>
				<!--Photo de profil-->
				<img class="img-responsive" src="personne.jpg" alt="Bootstrap" class="img-thumbnail" width="80" height="80">
			</td>
		</tr>
			<td><strong>Pseudo: </strong></td>
			<td><?php echo $Pseudo; ?></td>
		<tr>
			<td><strong>Nom: </strong></td>
			<td><?php echo $Nom; ?></td>
		</tr>
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
		if($_SESSION['type_utilisateur'] == 2){
			$result = sendRequest("SELECT * FROM Client, People WHERE Client.people=" . $_SESSION['ID_people']);
			while($data = mysqli_fetch_assoc($result)){
				$Porte_Monnaie = $data['Porte_Monnaie'];
				$Adresse_L1 = $data['Adresse_L1'];
				$Adresse_L2 = $data['Adresse_L2'];
				$Ville = $data['Ville'];
				$Code_Postal = $data['Code_Postal'];
				$Pays = $data['Pays'];
		}
	?>
	<!-- Info Client -->
	<div class="block col-lg-4" >
	<table>
		<tr>
			<td><strong>Adresse L1: </strong></td>
			<td><?php echo $Adresse_L1; ?></td>
		</tr> 
		<tr><td><strong><?php if($Adresse_L2 != NULL || $Adresse_L2 != ""){echo 'Adresse L2 :';} ?> </strong></td>
					<td><?php echo $Adresse_L2; ?></td>
			</tr>
		<tr>
			<td><strong>Ville: </strong></td>
			<td><?php echo $Ville; ?></td>
		</tr>
		<tr>
			<td><strong>Pays: </strong></td>
			<td><?php echo $Pays; ?></td>
		</tr>
		<tr>
			<td><strong>Argent du compte:  </strong></td>
			<td><?php echo $Porte_Monnaie; ?> €</td>
		</tr>

	</table>
	</div>
	

	<?php
		}else if($_SESSION['type_utilisateur'] == 1){
		$result = sendRequest("SELECT * FROM Vendeur, People WHERE Vendeur.people=" . $_SESSION['ID_people']);
		while($data = mysqli_fetch_assoc($result)){
		$Porte_Monnaie = $data['Porte_Monnaie'];
			}
	?>
	<!-- Info Vendeur -->
	<div class="block col-lg-4" >
	
			<td><strong>Argent du compte:  </strong></td>
			<td><?php echo $Porte_Monnaie; ?> €</td>
		

	</div>

	<?php
		}
	?>
	<div class="block col-lg-6" id="ok2">
 <button class="bouton btn btn-dark btn-sm" type="submit" name="modifier"> Modifier le mot de passe</button>
		<button class="bouton btn btn-dark btn-sm" type="submit" name="deconnection"> Se déconnecter</button>
		
	</div>


 <?php
	include ("footer.php");
	?>
</body>
</html>