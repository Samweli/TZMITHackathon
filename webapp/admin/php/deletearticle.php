<?php
		// Require Configuration FIle
		require_once('../conf/conf.php');
	
		$id = $_GET['ID'];
		
		// Create a Query To Delete Users Record in the Database
		$query = "DELETE FROM friends WHERE ID = $id";
		if($query_run = mysql_query($query)) {
			header('Location: ../index.php');
			
			//echo "Data was Deleted";
		} else {
			echo "Failed to Delete Users Table".mysql_error();
		}
	
	
	
	
?>