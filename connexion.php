<?php
	session_start();
	include("sendRequest.php");
	$pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : ""; //if then else
	$mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
	$erreur = "";

	if($pseudo == ""){
		$erreur .= "Le champ pseudo  est vide. <br>";
	} 
	if($mdp == ""){
		$erreur .= "Le champ mot de passe est vide. <br>";
	}
	if($erreur != ""){
		header("Location: front/connexionPage.php");
	}else{
		$result = sendRequest("SELECT Id FROM People WHERE Pseudo ='".$pseudo . "' AND Mot_De_Passe ='" .$mdp ."'");
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['ID_people'] = $data['Id'];
		}
		if(isset($_SESSION['ID_people'])){
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
			if(isset($_POST["remember"])){
				setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true);
				setcookie('password', $mdp, time() + 365*24*3600, null, null, false, true);
			}
			header("Location: front/index.php");
		}else{
			header("Location: front/connexionPage.php");
		}
	}
?>