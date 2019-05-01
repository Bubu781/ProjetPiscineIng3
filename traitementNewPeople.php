	<?php
	session_start();
	include("sendRequest.php");
	include("autoConnect.php");

	$_SESSION['type_utilisateur'] = 1;
	$_SESSION['ID_people'] = 3;
?>

		<?php
		include("header.php");
	?>

		<?php
			
			$coucou = isset($_POST["categorie"])? $_POST["categorie"] : ""; //if-then-else
			echo ($coucou);

		?>