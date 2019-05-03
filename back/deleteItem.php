<?php
	include('../sendRequest.php');
	$id = isset($_POST['id'])? $_POST['id'] : NULL;
	$categorie = isset($_POST['categorie'])? $_POST['categorie'] : NULL;
	if($id != NULL && $categorie != NULL){
		if($categorie == 0){
			sendRequest("DELETE FROM Vetements WHERE item = '" . $id . "'");
		}else if($categorie == 1){
			sendRequest("DELETE FROM Musiques WHERE item = '" . $id . "'");
		}else if($categorie == 2){
			sendRequest("DELETE FROM Livres WHERE item = '" . $id . "'");
		}else if($categorie == 3){
			sendRequest("DELETE FROM Sport_Et_Loisir WHERE item = '" . $id . "'");
		}
		sendRequest("DELETE FROM Panier WHERE Objet ='" . $id . "'");
		sendRequest("DELETE FROM Commandes WHERE Objet ='" . $id . "'");
		sendRequest("DELETE FROM Produits WHERE Objet ='" . $id . "'");
		sendRequest("DELETE FROM Item WHERE Id = '" . $id . "'");
	}
	header("Location:" . $_SERVER['HTTP_REFERER']);
?>