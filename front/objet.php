<!-- Initialisation de la session -->
<?php
	session_start();
	include("../sendRequest.php");
	include("../autoConnect.php");
?>
<?php
	$result = sendRequest("SELECT * FROM Item, Media WHERE '".$_GET['ID']."'=Item.Id AND Media.id = item.media ");
	sendRequest("UPDATE Item SET Nb_Click = Nb_Click + 1 WHERE Id = '" . $_GET['ID'] . "'");
	while($data=mysqli_fetch_assoc($result)){
		$Nom = isset($data['Nom'])? $data['Nom']:"";
		$Description = isset($data['Description'])? $data['Description']:"";
		$Image1 = isset($data['Path1'])? $data['Path1']:"Media/";
		$Image2 = isset($data['Path2'])? $data['Path2']:"Media/";
		$Image3 = isset($data['Path3'])? $data['Path3']:"Media/";
		$Image4 = isset($data['Path4'])? $data['Path4']:"Media/";
		$Image5 = isset($data['Path5'])? $data['Path5']:"Media/";
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
	<title>Article : <?php echo $Nom ?> </title>
</head>
<body>

	<?php
		include("header.php");
	?>
	<?php echo '<input type="hidden" id="ID" value="'. $_GET['ID'] .'">';?>
	<div class="row">
		<div id="display" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#display" data-slide-to="0" class="active"></li>
		    <?php
		    	if($Image2 != "Media/"){
		    ?>
		    <li data-target="#display" data-slide-to="1"></li>
		    <?php
		    	}if($Image3 != "Media/"){
		    ?>
		    <li data-target="#display" data-slide-to="2"></li>
		    <?php
		    	}if($Image4 != "Media/"){
		    ?>
		    <li data-target="#display" data-slide-to="3"></li>
		    <?php
		    	}if($Image5 != "Media/"){
		    ?>
		    <li data-target="#display" data-slide-to="4"></li>
		    <?php
		    	}
		    ?>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <?php echo '<img src="' .$Image1. '" alt="Image de l objet" width="200" height="200">'; ?>
		    </div>
		    <?php
		    	if($Image2 != "Media/"){
		    ?>
		    <div class="carousel-item">
		      <?php echo '<img src="' .$Image2. '" alt="Image de l objet" width="200" height="200">'; ?>
		    </div>
		    <?php
		    	}if($Image3 != "Media/"){
		    ?>
		    <div class="carousel-item">
		      <?php echo '<img src="' .$Image3. '" alt="Image de l objet" width="200" height="200">'; ?>
		    </div>
		    <?php
		    	}if($Image4 != "Media/"){
		    ?>
		    <div class="carousel-item">
		      <?php echo '<img src="' .$Image4. '" alt="Image de l objet" width="200" height="200">'; ?>
		    </div>
		    <?php
		    	}if($Image5 != "Media/"){
		    ?>
		    <div class="carousel-item">
		      <?php echo '<img src="' .$Image5. '" alt="Image de l objet" width="200" height="200">'; ?>
		    </div>
		    <?php
		    	}
		    ?>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#display" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#display" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
		<h1 class="nobjet"><?php echo $Nom; ; ?></h1>
	</div>
	<div class="block col-lg-5" >
		<table>
				<td><span  class="titre">Prix:</span> 
				<?php echo $Prix . '€'; ?></td>
			<tr><td class="titre">Description:</td></tr>
			<tr><td><div class="description"><?php echo $Description; ?></td></tr>
		</table>
	</div>
	<div class="block col-lg-6" >
		<form action="../ajouterPanier.php" method="POST">
			<table> 	
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
			if ($_SESSION['type_utilisateur'] == 2){
	?>
					<tr>
					<td class="titre">Taille :</td>
					<td>
					<SELECT id="taille" name="Taille" class="form-control" onclick="loadCouleurDispo()">

				<?php


			// Verification de si la taille XS existe
						$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'XS'){
								echo '<OPTION VALUE="XS" >XS</OPTION>';
								break;
							}
						}
			// Verification de si la taille S existe
						$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'S'){
								echo '<OPTION VALUE="S" >S</OPTION>';
								break;
							}
						}
			// Verification de si la taille M existe
						$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'M'){
								echo '<OPTION VALUE="M" >M</OPTION>';
								break;
							}
						}
			// Verification de si la taille L existe
						$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'L'){
								echo '<OPTION VALUE="L" >L</OPTION>';
								break;
							}
						}
			// Verification de si la taille XL existe
						$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'XL'){
								echo '<OPTION VALUE="XL" >XL</OPTION>';
								break;
							}
						}
			// Verification de si la taille XXL existe
$result = sendRequest("SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$taille = isset($data['Taille'])?$data['Taille']:"";
							if ($taille == 'XXL'){
								echo '<OPTION VALUE="XXL" >XXL</OPTION>';
								break;
							}
						}
			
				?>
										</SELECT>
					</td>
				</tr>
<!--
// SELECT produits.Taille FROM produits, item WHERE item.Id = produits.Objet AND item.id = 1
// SELECT produits.Couleur FROM produits, item WHERE item.Id = produits.Objet AND item.id = 1 AND produits.Taille = 'L' 
						$result = sendRequest("SELECT produits.Couleur FROM produits, item WHERE item.Id = produits.Objet AND produits.Taille = 'L' AND item.id = " . $_GET['ID'] );
						while($data = mysqli_fetch_assoc($result)){
							$couldispo = isset($data['Couleur'])?$data['Couleur']:"";
							echo '<OPTION VALUE="'.$couldispo.'" >'.$couldispo.'</OPTION>';
						}	
-->
				<div id = "Color" > 






				</div>
	<?php
			}
				else {
	?>
					<tr class="form-group">
					<td class="titre">Couleur :</td>
					<td><input type="text" id = "couleur" name="Couleur" class="form-control" placeholder="Saisisez la couleur"required>

				</tr>
					<tr>
						<td class="titre">Taille :</td>
							<td>
								<SELECT id="taille" name="Taille" class="form-control">
									<OPTION VALUE="XS" >XS</OPTION>
									<OPTION VALUE="S" >S</OPTION>
									<OPTION VALUE="M" >M</OPTION>
									<OPTION VALUE="L" >L</OPTION>
									<OPTION VALUE="XL" >XL</OPTION>
									<OPTION VALUE="XXL" >XXL</OPTION>
								</SELECT>
							</td>
						</tr>
<?php
				}
	?>

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
				</tr>
					<tr class="titre">
						<td>Quantité :</td>
						<td><input type="number" id="Qte" name="Qte" value = 1 ></td>
				</tr>
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