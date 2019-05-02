<?php
	foreach ($_POST['quantite'] as $key => $value) {

echo $_POST['quantite'][$key] .' : '. $_POST['id'][$key]. $_POST['Taille'][$key]. $_POST['Couleur'][$key].'....';

		if ($_POST['Taille'][$key] == "")
		{
			echo 'INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 10,3,150);';
		}
	else {
		echo 'INSERT INTO Produits(Objet, Vendeur, Quantite, Couleur, Taille) VALUES( 2,3,7, "Rouge", "L");';
	}




		$_POST['quantite'][$key] .' : '. $_POST['id'][$key]. $_POST['Taille'][$key]. $_POST['Couleur'][$key].'....';


	}
?>