<?php
	ob_start();
	session_start();
	
	if(!empty($_SESSION['Username'])  && isset($_SESSION['Username'])) { 
	
		echo 'Welcome, '.$_SESSION['Username'];
	
	} else {
		
		echo "Error";
	
	}

?>