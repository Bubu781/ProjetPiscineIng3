<?php
	include("../sendRequest.php");
	session_start();

	foreach ($_POST['quantite'] as $key => $value) {

		if ($_POST['Taille'][$key] == "")
		{
		sendRequest ('INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( '. $_POST['id'][$key].','.$_SESSION['ID_people'].','.$_POST['quantite'][$key].');');
		}
	else {
		sendRequest ('INSERT INTO Produits(Objet, Vendeur, Quantite, Couleur, Taille) VALUES( '. $_POST['id'][$key].','.$_SESSION['ID_people'].','.$_POST['quantite'][$key].', "'. $_POST['Couleur'][$key].'", "'. $_POST['Taille'][$key].'");');
	}

	sendRequest ('DELETE FROM Panier WHERE Client = '.$_SESSION['ID_people'].';');


	}


  header("Location: ../front/produit.php");

?>