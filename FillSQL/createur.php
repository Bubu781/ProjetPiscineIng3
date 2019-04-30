		
<?php

	$db_handle = mysqli_connect('localhost', 'root', 'root');	

	$fichierR = fopen('bdd.sql','r');

	mysqli_query($db_handle,"DROP DATABASE IF EXISTS amazece;") ;
	mysqli_query($db_handle,"CREATE DATABASE amazece DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;") ;

	$db_found = mysqli_select_db($db_handle, "amazece");

	while (!feof($fichierR)){
		$request = fgets($fichierR, filesize('bdd.sql'));
		mysqli_query($db_handle,$request) ;
	}

	fclose($fichierR);
  header('Location: rebondissement.html');
  exit();

?>