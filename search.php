<?php
	session_start();
	$search = isset($_POST['search'])? $_POST['search']:"";
	if($search == ""){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		header("Location: front/recherche.php?search=". $search);
	}
?>