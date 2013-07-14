<?php

	// Function FIle
	function register_user($username, $password, $email) {
		
		$status = 'Enabled';
		$level = 'Admin';
		// Structure Query
		$query = "INSERT INTO users_tbl VALUES ('','$username','$password','$email','$level','$status')";
		if($query_run = mysql_query($query)) {
			return true;
		} else {
			return false;
		}
	}
	
	function check_user($username, $password) {
		
		// Structure Query
		$query = "SELECT * FROM users_tbl WHERE Username = $username AND Password = $password";
		if($query_run = mysql_query($query)) {

		// Start Counting Values
		$num = mysql_num_rows($query_run);
		if($num == 1) {
			die("Am Sorry Your Credentials are alreaedy in the Database");
		} else{
			// Do Nothing
		}
		
		} else {
			return false;
		}
		
	}
	
	
	function load_all_users($table_name) {
	
			$query = "SELECT * FROM $table_name ";
			if($query_run = mysql_query($query)) {
				echo "<table border='1'>
				<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Level</th>
				<th>Status</th>
				<th>Delete</th>
				</tr>";
				
				// Grub All Data From the Database
				while($data = mysql_fetch_array($query_run)) {
					echo "
					<tr>
				<td>$data[user_id]</td>
				<td>$data[username]</td>
				<td>$data[password]</td>
				<td>$data[Email]</td>
				<td>$data[level]</td>
				<td>$data[status]</td>
				
				// Appending a Value to the Database with 
				<td><a href='deleteuser.php?user_id=".$data['user_id']."'>Delete</a></td>
				
				
				</tr>
					
					
					";
				
				
				
				}
				
				echo "</table>";
			} else {
				return false;
			}
	
	}
?>