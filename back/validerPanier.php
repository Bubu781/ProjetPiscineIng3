<?php
	include('../sendRequest.php');
	$ids = isset($_POST['id'])?$_POST['id']:"";
	$idPeople = isset($_POST['idPeople'])?$_POST['idPeople']:"";
	$quantites = isset($_POST['quantite'])?$_POST['quantite']:"";
	foreach ($ids as $key => $value) {
		if($quantites[$key] == 0){
			sendRequest("DELETE FROM Panier WHERE Client ='" . $idPeople . "' AND Objet = '" . $ids[$key] . "'");
		}else{
			sendRequest("UPDATE Panier SET Quantite=" . $quantites[$key] . " WHERE Client ='" . $idPeople . "' AND Objet = '" . $ids[$key] . "'");
		}
	}
	header("Location: ../front/paiement.php");
?>