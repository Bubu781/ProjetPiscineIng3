<?php
	session_start();
	include("../sendRequest.php");
	$nom = isset($_POST['nom'])?$_POST['nom']:"";
	foreach ($_POST['carte'] as $key => $value) {
		if($_POST['carte'][$key]){
			$carte = $value;
		}
	}
	$date_livraison = new DateTime('today');
	date_add($date_livraison, date_interval_create_from_date_string('2 days'));
	$numero = isset($_POST['numero'])?$_POST['numero']:"";
	$date = isset($_POST['date'])?$_POST['date']:"";
	$crypto = isset($_POST['crypto'])?$_POST['crypto']:"";
	$result = sendRequest("SELECT * FROM Client WHERE people='" . $_SESSION['ID_people'] . "' AND Nom_Carte ='" . $nom . "' AND Type_Carte = '" . $carte . "' AND Num_Carte = '" . $numero . "' AND Date_Expiration_Carte='" . $date . "-31' AND Code_Carte = '" . $crypto . "'");
	$data = mysqli_fetch_assoc($result);
	if($data){
		$result = sendRequest("SELECT * FROM Panier WHERE Client ='" . $_SESSION['ID_people'] ."'");
		while($Item = mysqli_fetch_assoc($result)){
			sendRequest("UPDATE Item SET Nb_Ventes = Nb_Ventes +" . $Item['Quantite'] . " WHERE Id = '" . $Item['Objet'] . "'");
			sendRequest("INSERT INTO Commandes(Objet, Client, Quantite, Date_Livraison, Couleur, Taille) VALUES( '". $Item['Objet'] ."','" . $_SESSION['ID_people'] ."','" . $Item['Quantite'] . "', '" . $date_livraison->format('Y-m-d') . "', '" . (isset($Item['Couleur'])?$Item['Couleur']:NULL) . "', '" . (isset($Item['Taille'])?$Item['Taille']:NULL) . "')");
		}
		sendRequest("DELETE FROM Panier WHERE Client ='" . $_SESSION['ID_people'] ."'");
		header("Location: ../front/validationPanier.php");
	}else{
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}

?>