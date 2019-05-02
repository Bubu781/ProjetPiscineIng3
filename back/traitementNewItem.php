<?php
	session_start();

	include("../sendRequest.php");
	include("../autoConnect.php");

	$_SESSION['type_utilisateur'] = 1;
	$_SESSION['ID_people'] = 3;
?>

<?php


	if (isset($_FILES['photo1']) AND $_FILES['photo1']['error'] == 0){
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo1']['size'] <= 3145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo1']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
              move_uploaded_file($_FILES['photo1']['tmp_name'], '../front/Media/' . basename($_FILES['photo1']['name']));}
      else{echo 'extention non-autorisee';}}
    else{echo 'image1 trop grosse';}
  }
	else {echo'Pb image 1';}


	if (isset($_FILES['photo2']) AND $_FILES['photo2']['error'] == 0){
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo2']['size'] <= 3145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo2']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
              move_uploaded_file($_FILES['photo2']['tmp_name'], '../front/Media/' . basename($_FILES['photo2']['name']));}
      else{echo 'extention non-autorisee';}}
    else{echo 'image2 trop grosse';}
  }
	else {echo'Pb image 2';}



	if (isset($_FILES['photo3']) AND $_FILES['photo3']['error'] == 0){
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo3']['size'] <= 3145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo3']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
              move_uploaded_file($_FILES['photo3']['tmp_name'], '../front/Media/' . basename($_FILES['photo3']['name']));}
      else{echo 'extention non-autorisee';}}
    else{echo 'image3 trop grosse';}
  }
	else {echo'Pb image 3';}



	if (isset($_FILES['photo4']) AND $_FILES['photo4']['error'] == 0){
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo4']['size'] <= 3145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo4']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
              move_uploaded_file($_FILES['photo4']['tmp_name'], '../front/Media/' . basename($_FILES['photo4']['name']));}
      else{echo 'extention non-autorisee';}}
    else{echo 'image4 trop grosse';}
  }
	else {echo'Pb image 4';}


	if (isset($_FILES['photo5']) AND $_FILES['photo5']['error'] == 0){
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['photo5']['size'] <= 3145728){
      // Testons si l'extension est autorisée
      $infosfichier = pathinfo($_FILES['photo5']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
      if (in_array($extension_upload, $extensions_autorisees)){
              move_uploaded_file($_FILES['photo5']['tmp_name'], '../front/Media/' . basename($_FILES['photo5']['name']));}
      else{echo 'extention non-autorisee';}}
    else{echo 'image5 trop grosse';}
  }
	else {echo'Pb image 5';}

	// media
	sendRequest('INSERT INTO Media(Path1,Path2,Path3,Path4,Path5) VALUES( "Media/'.$_FILES['photo1']['name'].'","Media/'.$_FILES['photo2']['name'].'","Media/'.$_FILES['photo3']['name'].'","Media/'.$_FILES['photo4']['name'].'","Media/'.$_FILES['photo5']['name'].'");');
	$media = sendRequest('SELECT MAX(Id) FROM media');
	$idMedia = mysqli_fetch_assoc($media);



  $nom = isset($_POST["nom"])? $_POST["nom"] : ""; //if-then-else
  $Marque = isset($_POST["Marque"])? $_POST["Marque"] : ""; //if-then-else
  $description = isset($_POST["description"])? $_POST["description"] : ""; //if-then-else
  $prix = isset($_POST["prix"])? $_POST["prix"] : ""; //if-then-else
  $categorie = isset($_POST["categorie"])? $_POST["categorie"] : ""; //if-then-else


	echo 'INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES("'.$nom.'","'.$prix.'","'.$description.'","'.$Marque.'",0,0,'.$idMedia['MAX(Id)'].');';
	sendRequest('INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES("'.$nom.'","'.$prix.'","'.$description.'","'.$Marque.'",0,0,'.$idMedia['MAX(Id)'].');');
	$media = sendRequest('SELECT MAX(Id) FROM Item');
	$data = mysqli_fetch_assoc($media);
  $id_Item = $data['MAX(Id)'];




///   TRAITEMENT DES CATEGORIES

//cas du vetements
	if ($categorie == 'Vetements'){


    $matiere = isset($_POST["matiere"])? $_POST["matiere"] : ""; //if-then-else
    $type = isset($_POST["type"])? $_POST["type"] : ""; //if-then-else
    $genre = isset($_POST["genre"])? $_POST["genre"] : ""; //if-then-else


    sendRequest("INSERT INTO Vetements(Genre, Matiere, Type, item) VALUES( '".$genre."', '".$matiere."', '".$type."',".$id_Item.");");

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

?>