<?php
	include("sendRequest.php");
	if(!isset($_SESSION['ID_people']) && isset($_COOKIE['pseudo']) && $COOKIE['password']){
		sendRequest("SELECT Id FROM People WHERE Pseudo ='".$_COOKIE['pseudo'] . "' AND Mot_De_Passe ='" .$_COOKIE['password'] ."'");
		while($data = mysqli_fetch_assoc($result)){
			$_SESSION['ID_people'] = $data['Id'];
		}
	}
?>