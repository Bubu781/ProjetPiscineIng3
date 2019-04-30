<?php
	 $pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : ""; //if then else
	 $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
	 $remember = isset($_POST["remember"])? $_POST["remember"] : "";
	 $erreur = "";

	 if($pseudo == ""){
	 	$erreur .= "Le champ pseudo  est vide. <br>";
	 } 
	 if($mdp == ""){
	 	$erreur .= "Le champ mot de passe est vide. <br>";
	 }
	 if($remember== true){
	 	setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true);
	 	setcookie('password', $mdp, time() + 365*24*3600, null, null, false, true);
	 }
	 if($erreur != ""){
	 	echo "Erreur :" . $erreur.$pseudo;
	 }
?>