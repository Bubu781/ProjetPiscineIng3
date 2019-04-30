<?php
	include("sendRequest.php");
	if(!isset($_SESSION['ID_people']) && isset($_COOKIE['pseudo']) && isset($_COOKIE['password'])){
		sendRequest("SELECT Id FROM People WHERE Pseudo ='".$_COOKIE['pseudo'] . "' AND Mot_De_Passe ='" .$_COOKIE['password'] ."'");
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['ID_people'] = $data['Id'];
		}
		$result = sendRequest("SELECT * FROM Admin, People WHERE Admin.people=" . $_SESSION['ID_people']);
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['type_utilisateur'] = 0;
		}
		$result = sendRequest("SELECT * FROM Vendeur, People WHERE Vendeur.people=" . $_SESSION['ID_people']);
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['type_utilisateur'] = 1;
		}
		$result = sendRequest("SELECT * FROM Client, People WHERE Client.people=" . $_SESSION['ID_people']);
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['type_utilisateur'] = 2;
		}
	}
?>