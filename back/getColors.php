<?php
	include("../sendRequest.php");
	$result = sendRequest("SELECT produits.Couleur FROM produits, item WHERE item.Id = produits.Objet AND produits.Taille = '". $_GET['taille'] ."' AND item.id = " . $_GET['ID'] );
	while($data = mysqli_fetch_assoc($result)){
		echo '<OPTION VALUE='. (isset($data['Couleur'])?$data['Couleur']:"") .'>'. (isset($data['Couleur'])?$data['Couleur']:"") . '</OPTION>';
	}
?>