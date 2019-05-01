<?php
	session_start();

	include("../sendRequest.php");
	include("../autoConnect.php");

	$_SESSION['type_utilisateur'] = 1;
	$_SESSION['ID_people'] = 3;
?>

		<?php
			
			$coucou = isset($_POST["nom"])? $_POST["nom"] : ""; //if-then-else
			echo ($coucou);
			echo("hello mes amis");



		?>