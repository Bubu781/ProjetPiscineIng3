<?php
	session_start();
	include("sendRequest.php");
	$IdObjet = isset($_POST['ID'])? $_POST['ID']: NULL;
	$Qte = isset($_POST['Qte'])? $_POST['Qte']: 1;
	$Couleur = isset($_POST['Couleur'])? $_POST['Couleur']: NULL;
	$Taille = isset($_POST['Taille'])? $_POST['Taille']: NULL;
	if($IdObjet != NULL){
		if($Couleur == NULL){
			sendRequest("INSERT INTO Panier(Objet, Client, Quantite) VALUES(".$IdObjet.",".$_SESSION['ID_people'].",".$Qte.");");
		}else{
			sendRequest("INSERT INTO Panier(Objet, Client, Quantite, Couleur, Taille) VALUES(".$IdObjet.",".$_SESSION['ID_people'].",".$Qte.",'".$Couleur."','".$Taille."');");
		}
	}
	header("Location:" . $_SERVER['HTTP_REFERER']);
?>