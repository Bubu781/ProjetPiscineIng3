<?php
	session_start();
	session_destroy();
	session_start();
	$_SESSION['deconnection'] = true;
	header("Location: front/index.php");
?>