<?php
	session_start();
	include("sendRequest.php");
	$IdObjet = isset($_POST['ID'])? $_POST['ID']: NULL;
	$Qte = isset($_POST['Qte'])? $_POST['Qte']: 1;
	$Couleur = isset($_POST['Couleur'])? $_POST['Couleur']: NULL;
	$Taille = isset($_POST['Taille'])? $_POST['Taille']: NULL;
	if($IdObjet != NULL){

		if($Couleur == NULL){
			$result = sendRequest("SELECT * FROM Panier WHERE Client = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $IdObjet . "'");
			$data = mysqli_fetch_assoc($result);
			if(!isset($data)){
				sendRequest("INSERT INTO Panier(Objet, Client, Quantite) VALUES(".$IdObjet.",".$_SESSION['ID_people'].",".$Qte.");");
			}else{
				sendRequest("UPDATE Panier SET Quantite =Quantite+" . $Qte . " WHERE Client = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $IdObjet . "'");
			}
		}else{
			$result = sendRequest("SELECT * FROM Panier WHERE Client = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $IdObjet . "' AND Couleur = '" . $Couleur . "' AND Taille = '" . $Taille . "'");
			$data = mysqli_fetch_assoc($result);
			if(!isset($data)){
				sendRequest("INSERT INTO Panier(Objet, Client, Quantite, Couleur, Taille) VALUES(".$IdObjet.",".$_SESSION['ID_people'].",".$Qte.",'".$Couleur."','".$Taille."');");
			}else{
				sendRequest("UPDATE Panier SET Quantite =Quantite+" . $Qte . " WHERE Client = '" . $_SESSION['ID_people'] . "' AND Objet = '" . $IdObjet . "'");
			}
		}
	}
	header("Location:" . $_SERVER['HTTP_REFERER']);
?>