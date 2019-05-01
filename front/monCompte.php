<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
?>
<?php
	if(isset($_SESSION['ID_people'])){

	}
	$result = sendRequest("SELECT * FROM People WHERE '".$_SESSION['ID_people']."'=Id");
	while($data=mysqli_fetch_assoc($result)){
		$Nom = isset($data['Nom'])? $data['Nom']:"";
		$Pseudo = isset($data['Pseudo'])? $data['Pseudo']:"";
		$Prenom = isset($data['Prenom'])? $data['Prenom']:"";
		$Tel = isset($data['Tel'])? $data['Tel'] :"";
		$Mail = isset($data['Mail'])? $data['Mail']:"";
		$Mdp = isset($data['Mot_De_Passe'])? $data['Mot_De_Passe']:"";
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

	<h1>Mon Compte</h1><br>
	<div class="block" >
	<table>
		<tr>
			<td>
				<!--Photo de profil-->
				<img class="img-responsive" src="personne.jpg" alt="Bootstrap" class="img-thumbnail" width="120" height="110"><br><br>
			</td>
		</tr>
			<td class="titre">Pseudo: </td>
			<td><?php echo $Pseudo; ?><br> </td>
		<tr>
			<td class="titre">Nom: </td>
			<td><?php echo $Nom; ?><br> </td>
		</tr>
		<tr>
			<td class="titre">Prénom: </td>
			<td><?php echo $Prenom; ?><br></td>
		</tr>
		<tr>
			<td class="titre">Tel: </td>
			<td><?php echo $Tel; ?><br></td>
		</tr>
		<tr>
			<td class="titre">Mail: </td>
			<td><?php echo $Mail; ?><br></td>
		</tr>

			
	</table>
</div>
	
	<?php
		if($_SESSION['type_utilisateur'] == 2){
			$result = sendRequest("SELECT * FROM Client, People WHERE Client.people=" . $_SESSION['ID_people']);
			while($data = mysqli_fetch_assoc($result)){
				$Porte_Monnaie = isset($data['Porte_Monnaie'])? $data['Porte_Monnaie']:"" ;
				$Adresse_L1 = isset($data['Adresse_L1'])? $data['Adresse_L1']:"";
				$Adresse_L2 = isset($data['Adresse_L2'])? $data['Adresse_L2']:"";
				$Ville = isset($data['Ville'])? $data['Ville']:"";
				$Code_Postal = isset($data['Code_Postal'])? $data['Code_Postal']:"";
				$Pays = isset($data['Pays'])? $data['Pays']:"";
		}
	?>
	<!-- Info Client -->
	<div class="block col-lg-4" >
	<table>
		<tr>
			<td class="titre">Adresse L1: </td>
			<td><?php echo $Adresse_L1; ?></td>
		</tr> 
		<tr><td><?php if($Adresse_L2 != NULL || $Adresse_L2 != ""){echo 'Adresse L2 :';} ?> </td>
					<td><?php echo $Adresse_L2; ?><br></td>
			</tr>
		<tr>
			<td class="titre">Ville: </td>
			<td><?php echo $Ville; ?><br></td>
		</tr>
		<tr>
			<td class="titre">Pays: </td>
			<td><?php echo $Pays; ?><br></td>
		</tr>
		<tr>
			<td class="titre">Argent du compte: </td>
			<td><?php echo $Porte_Monnaie; ?> € <br></td>
		</tr>

	</table>
	</div>
	

	<?php
		}else if($_SESSION['type_utilisateur'] == 1){
		$result = sendRequest("SELECT * FROM Vendeur, People WHERE Vendeur.people=" . $_SESSION['ID_people']);
		while($data = mysqli_fetch_assoc($result)){
		$Porte_Monnaie = isset($data['Porte_Monnaie'])? $data['Porte_Monnaie']:"" ;
			}
	?>
	<!-- Info Vendeur -->
	<div class="block col-lg-4" >
	
			<td class="titre">Argent du compte:  </td>
			<td><?php echo $Porte_Monnaie; ?> €</td>
		

	</div>

	<?php
		}
	?>
	<div class="block col-lg-6" id="ok2">
 <button class="bouton btn btn-dark btn-sm" type="submit" name="modifier"> Modifier le mot de passe</button>
 <form action="../deconnection.php">
		<input class="bouton btn btn-dark btn-sm" type="submit" name="deconnection" value="Se déconnecter">
	</form>
	</div>


 <?php
	include ("footer.php");
	?>
</body>
</html>