<?php
// Fetching Contents From the DAtabase and View them on the Front End
	// RequireDatabase
	require_once('./conf/conf.php');
	
	$query = "SELECT Subject FROM friends";
	if($query_run = mysql_query($query)) {
		
		echo "<ul>";
		while ($data = mysql_fetch_array($query_run)) {
			$subject = $data['Subject'];
			echo "<li> <a href='javascript:;'>$subject</a></li>";
		}
		echo "</ul>";
	} else{
		
	}
	

?>