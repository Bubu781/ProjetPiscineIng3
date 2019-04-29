<?php
	function openDB($sql){
		$database = "amazece";
		global $result;
		$db_handle = mysqli_connect('localhost','root','');
		$db_found = mysqli_select_db($db_handle,$database);

		if($db_found){
			$result = mysqli_query($db_handle, $sql);
			mysqli_close($db_handle);
		}
		else{
				echo "Database not found";
		}
	}
?>