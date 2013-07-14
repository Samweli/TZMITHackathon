
    <?php
	// Require Configuration FIle
	require_once('../include/conf.php');
	
	// Checking If the USer has set Any Values
	if(isset($_POST['Username']) && isset($_POST['Password']) && isset($_POST['Email'])) {
		
		// Create Variables to Store Data send by the User
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		$email = $_POST['Email'];
		
		// Cheking if the USer has any COntents in the Variable
		if(!empty($username) && !empty($password) && !empty($email)) {
			
			// Recall Check User
			if(check_user($username, $password)) {
				
			} else {
				if(register_user($username, $password, $email)) {
					echo "You have succesfully Registered";	
				} else {
					echo "Am sorry we could not register you".mysql_error();
				}
			}
			
			
		} else {
			echo "Please fill in the boxes";
		}
		
	}
	
	
	?>