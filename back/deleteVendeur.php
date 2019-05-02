<?php
include('../sendRequest.php');
	$id = isset($_POST['id'])? $_POST['id']:NULL;
	if($id != NULL){
		sendRequest("DELETE FROM Panier WHERE Client = '" . $id . "'");
		sendRequest("DELETE FROM Produits WHERE Vendeur = '" . $id . "'");
		sendRequest("DELETE FROM Vendeur WHERE people = '" . $id . "'");
		sendRequest("DELETE FROM People WHERE Id = '" . $id . "'");
	}
	header("Location:" . $_SERVER['HTTP_REFERER']);
?>