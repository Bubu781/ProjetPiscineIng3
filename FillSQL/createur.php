		
<?php

	$db_handle = mysqli_connect('localhost', 'root', '');	

	$fichierR = fopen('bdd.sql','r');
	$bdd = fread($fichierR, filesize('bdd.sql'));
	fclose($fichierR);


	mysqli_query($db_handle,"DROP DATABASE IF EXISTS amazece;") ;
	mysqli_query($db_handle,"CREATE DATABASE amazece DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;") ;

	$db_found = mysqli_select_db($db_handle, "amazece");

	mysqli_query($db_handle,$bdd) ;

	echo "coucou;jhgkjgv";

?>