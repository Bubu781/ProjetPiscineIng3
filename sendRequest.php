<?php
	function sendRequest($sql){
		$database = "amazece";
		$db_handle = mysqli_connect('localhost','root','root');
		$db_found = mysqli_select_db($db_handle,$database);

		if($db_found){
			$result = mysqli_query($db_handle, $sql);
			mysqli_close($db_handle);
			return $result;
		}
		else{
				echo "Database not found";
		}
	}
?>