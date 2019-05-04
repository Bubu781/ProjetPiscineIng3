<?php
	include("../sendRequest.php");
	session_start();

	foreach ($_POST['quantite'] as $key => $value) {

		if ($_POST['Taille'][$key] == "")
		{
			$result = sendRequest("SELECT * FROM Produits WHERE Vendeur = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $_POST['id'][$key] . "'");
			$data = mysqli_fetch_assoc($result);
			if(!isset($data)){
				sendRequest ('INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( '. $_POST['id'][$key].','.$_SESSION['ID_people'].','.$_POST['quantite'][$key].');');
			}else{
				sendRequest("UPDATE Produits SET Quantite =Quantite+" . $_POST['quantite'][$key] . " WHERE Vendeur = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $_POST['id'][$key] . "'");
			}
		}
		else {
			$result = sendRequest("SELECT * FROM Produits WHERE Vendeur = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $_POST['id'][$key] . "' AND Couleur = '" . $_POST['Couleur'][$key] . "' AND Taille = '" . $_POST['Taille'][$key] . "'");
			$data = mysqli_fetch_assoc($result);
			if(!isset($data)){
				sendRequest ('INSERT INTO Produits(Objet, Vendeur, Quantite, Couleur, Taille) VALUES( '. $_POST['id'][$key].','.$_SESSION['ID_people'].','.$_POST['quantite'][$key].', "'. $_POST['Couleur'][$key].'", "'. $_POST['Taille'][$key].'");');
			}else{
				sendRequest("UPDATE Produits SET Quantite =Quantite+" . $_POST['quantite'][$key] . " WHERE Vendeur = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $_POST['id'][$key] . "'");
			}
		}
	sendRequest ('DELETE FROM Panier WHERE Client = '.$_SESSION['ID_people'].';');
	}


  header("Location: ../front/produit.php");

?>