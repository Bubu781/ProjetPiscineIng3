<?php
	session_start();

	include("../sendRequest.php");
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
	else {}



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
	else {}



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
	else {}


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
	else {}

	// media
	sendRequest('INSERT INTO Media(Path1,Path2,Path3,Path4,Path5) VALUES( "Media/'.$_FILES['photo1']['name'].'","Media/'.$_FILES['photo2']['name'].'","Media/'.$_FILES['photo3']['name'].'","Media/'.$_FILES['photo4']['name'].'","Media/'.$_FILES['photo5']['name'].'");');
	$media = sendRequest('SELECT MAX(Id) FROM media');
	$idMedia = mysqli_fetch_assoc($media);



  $nom = isset($_POST["nom"])? $_POST["nom"] : ""; //if-then-else
  $Marque = isset($_POST["Marque"])? $_POST["Marque"] : ""; //if-then-else
  $description = isset($_POST["description"])? $_POST["description"] : ""; //if-then-else
  $prix = isset($_POST["prix"])? $_POST["prix"] : ""; //if-then-else
  $categorie = isset($_POST["categorie"])? $_POST["categorie"] : ""; //if-then-else


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
//cas du Livre
  else if ($categorie == 'Livres'){


    $auteur = isset($_POST["auteur"])? $_POST["auteur"] : ""; //if-then-else
    $genre = isset($_POST["genre"])? $_POST["genre"] : ""; //if-then-else
    $sortie = isset($_POST["sortie"])? $_POST["sortie"] : ""; //if-then-else
    $nb_Pages = isset($_POST["nb_Pages"])? $_POST["nb_Pages"] : ""; //if-then-else
    $format = isset($_POST["format"])? $_POST["format"] : ""; //if-then-else


  
    sendRequest( "INSERT INTO Livres(Auteur, Nb_Pages, Date_Sortie, Genre, Format, item) VALUES(  '".$auteur."', ".$nb_Pages.", '".$sortie."', '".$genre."', '".$format."',".$id_Item.");");


  }


//cas d'une musique
  else if ($categorie == 'Musiques'){


    $auteur = isset($_POST["auteur"])? $_POST["auteur"] : ""; //if-then-else
    $style = isset($_POST["style"])? $_POST["style"] : ""; //if-then-else
    $time = isset($_POST["time"])? $_POST["time"] : ""; //if-then-else
    $type = isset($_POST["type"])? $_POST["type"] : ""; //if-then-else
    $format = isset($_POST["format"])? $_POST["format"] : ""; //if-then-else


   sendRequest( 'INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "'.$auteur.'", "'.$format.'", "'.$time.'", "'.$style.'","'.$type.'",'.$id_Item.');');


  }

//cas d'un Sport_Et_Loisir
  else if ($categorie == 'Sport_Et_Loisir'){


    $code = isset($_POST["code"])? $_POST["code"] : ""; //if-then-else
    $poid = isset($_POST["poid"])? $_POST["poid"] : ""; //if-then-else
    $taille = isset($_POST["taille"])? $_POST["taille"] : ""; //if-then-else

   sendRequest( 'INSERT INTO Sport_Et_Loisir(Code, Poids, Taille, item) VALUES( "'.$code.'", '.$poid.', '.$taille.','.$id_Item.');');


  }


?>