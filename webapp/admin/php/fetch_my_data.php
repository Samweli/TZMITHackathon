<?php
// Fetching Contents From the DAtabase and View them on the Front End
	// RequireDatabase
	require_once('../conf/conf.php');
	
	// Query 
	$query = "SELECT * FROM friends";
	if($query_run = mysql_query($query)) {
			echo "<table>
			<tr>
			<th style='width: 200px;'>Content Subject</th>
			<th>Content Description</th>
			<th>Content Location</th>
			<th>Upload Date</th>
			<th>Action</th>
			</tr>
			
			";
			
			$num = mysql_num_rows($query_run);
			if($num == 0) {
				echo "No Data Is in the Database";
			} else {
				
			}
			
		while ($data = mysql_fetch_array($query_run)) {
			$id = $data['ID'];
			$subject = $data['Subject'];
			$des = $data['Description'];
			$location = $data['Location'];
			$date = $data['Date_time'];
			
			echo "
			<tr>
			<td style='width: 120px;'>$subject</td>
			<td style='text-align: justify;'>$des</td>
			<td style='width: 100px;'>$location</td>
			<td style='width: 100px;'>$date</td>
			<td style='width: 100px;'><a href='./php/deletearticle.php?ID=$id'>Delete Article</a></td>

			</tr>
			
			";
			
		}
		echo "</table>";
		
		
	} else{
		echo "Not Data was fetched";
	}


?>