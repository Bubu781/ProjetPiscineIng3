<?php
	session_start();
	include("../sendRequest.php");
?>

<?php
	
	$nom = isset($_POST["nom"])? $_POST["nom"] : ""; //if-then-else
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; //if-then-else
	$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : ""; //if-then-else
	$mail = isset($_POST["mail"])? $_POST["mail"] : ""; //if-then-else
	$tel = isset($_POST["tel"])? $_POST["tel"] : ""; //if-then-else
	$mdp1 = isset($_POST["mdp1"])? $_POST["mdp1"] : ""; //if-then-else
	$categorie = isset($_POST["categorie"])? $_POST["categorie"] : ""; //if-then-else
	if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0){

    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo']['size'] <= 3145728)
    {
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees))
      {
              // On peut valider le fichier et le stocker définitivement
              move_uploaded_file($_FILES['photo']['tmp_name'], '../front/Media/' . basename($_FILES['photo']['name']));
              //echo "L'envoi a bien été effectué !";
      }
      else
      {
          echo 'extention non-autorisee';
      }
    }
    else
    {
        echo 'image trop grosse';
    }
	}
	else {
	echo "pas d'image ajouté";
	}

	// media

	if ($_FILES['photo']['name'] == ''){
			sendRequest('	UPDATE people SET Nom="'.$nom.'",Prenom="'.$prenom.'",Pseudo="'.$pseudo.'",Mail="'.$mail.'",N_Telephonne="'.$tel.'",Mot_De_Passe="'.$mdp1.'" WHERE id = '.$_SESSION['ID_people']);
			echo 'UPDATE people SET Nom="'.$nom.'",Prenom="'.$prenom.'",Pseudo="'.$pseudo.'",Mail="'.$mail.'",N_Telephonne="'.$tel.'",Mot_De_Passe="'.$mdp1.'" WHERE id = '.$_SESSION['ID_people'];
	}
	else {	

		sendRequest('INSERT INTO Media(Path1) VALUES( "Media/'.$_FILES['photo']['name'].'");');

		$media = sendRequest('SELECT MAX(Id) FROM media');
		$data = mysqli_fetch_assoc($media);
		$idMedia = $data['MAX(Id)'];

			sendRequest('	UPDATE people SET Nom="'.$nom.'",Prenom="'.$prenom.'",Pseudo="'.$pseudo.'",Mail="'.$mail.'",N_Telephonne="'.$tel.'",Mot_De_Passe="'.$mdp1.'",media='.$idMedia.' WHERE id = '.$_SESSION['ID_people']);

	}






/*


	if ($categorie == 'vendeur'){



	if (isset($_FILES['photo1']) AND $_FILES['photo1']['error'] == 0){
    if ($_FILES['photo1']['size'] <= 3145728)
    {      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo1']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees))      {
              // On peut valider le fichier et le stocker définitivement
              move_uploaded_file($_FILES['photo1']['tmp_name'], '../front/Media/' . basename($_FILES['photo1']['name']));              //echo "L'envoi a bien été effectué !";
      }
      else      {          echo 'extention non-autorisee';
      }
    }
    else    {        echo 'image trop grosse';
    }
	}
	else {
	echo'coucou';
	}

		$banque = isset($_POST["banque"])? $_POST["banque"] : ""; //if-then-else


		sendRequest('UPDATE  Media SET Path2 = "Media/'.$_FILES['photo1']['name'].'" WHERE Id = "'.$idMedia.'"');

		sendRequest('INSERT INTO Vendeur(Porte_Monnaie,people) VALUES( '.$banque.', '.$data['MAX(Id)'].');');
	}










	else if ($categorie == 'client'){

		$banque = isset($_POST["banque"])? $_POST["banque"] : ""; //if-then-else
		$pays = isset($_POST["pays"])? $_POST["pays"] : ""; //if-then-else
		$code_postal = isset($_POST["code_postal"])? $_POST["code_postal"] : ""; //if-then-else
		$ville = isset($_POST["ville"])? $_POST["ville"] : ""; //if-then-else
		$adresse_l1 = isset($_POST["adresse_l1"])? $_POST["adresse_l1"] : ""; //if-then-else
		$adresse_l2 = isset($_POST["adresse_l2"])? $_POST["adresse_l2"] : ""; //if-then-else
		$type_carte = isset($_POST["type_carte"])? $_POST["type_carte"] : ""; //if-then-else
		$Date_Expiration_Carte = isset($_POST["Date_Expiration_Carte"])? $_POST["Date_Expiration_Carte"] : ""; //if-then-else
		$code_carte = isset($_POST["code_carte"])? $_POST["code_carte"] : ""; //if-then-else
		$nom_Carte = isset($_POST["nom_Carte"])? $_POST["nom_Carte"] : ""; //if-then-else
		$Num_Carte = isset($_POST["Num_Carte"])? $_POST["Num_Carte"] : ""; //if-then-else

		sendRequest('	INSERT INTO Client(Porte_Monnaie, Code_Carte, Date_Expiration_Carte, Nom_Carte, Num_Carte, Type_Carte, Adresse_L1, Adresse_L2, Ville, Code_Postal, Pays, people) VALUES( '.$banque.', "'.$code_carte.'", "'.$Date_Expiration_Carte.'", "'.$nom_Carte.'","'.$Num_Carte.'","'.$type_carte.'", "'.$adresse_l1.'", "'.$adresse_l2.'", "'.$ville.'", '.$code_postal.', "'.$pays.'", '.$data['MAX(Id)'].');');

	}

	header("Location: ../front/connexionPage.php");
*/
?>