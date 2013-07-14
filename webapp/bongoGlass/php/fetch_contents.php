<?php
// Fetching Contents From the DAtabase and View them on the Front End
	// RequireDatabase
	require_once('./conf/conf.php');
	
	// Query 
	$query = "SELECT * FROM friends LIMIT 0,100";
	if($query_run = mysql_query($query)) {
		
		while ($data = mysql_fetch_array($query_run)) {
			$image = $data['Image'];
			$subject = $data['Subject'];
			$des = $data['Description'];
			$location = $data['Location'];
			$date = $data['Date_time'];
			
			echo "<article>
			
			<img align='left' src=\"".$data['Image']."\"></img>
			<h4><em>Article Title</em>: $subject |  Location : <a href=''>$location</a></h4>
			<p>$des</p>
			<p>Date & Time : $date | <a href='articleone.php'>Read More & Comment</a> | </p>
			<p> </p>
			
			</article>";
		}
		
		
		
	} else{
		echo "Not Data was fetched";
	}


?>