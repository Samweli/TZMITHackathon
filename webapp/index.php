<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<title>BongoGlass</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php require_once('./js/conf.php'); ?>

</head>
<!-- Require Animation Files -->


<body>

<?php require_once('./theme/header.php'); ?>

    <article>
    <form method="POST" id="login">
    <table>
    <tr>
    <th>Username: </th>
    <td><input type="text" name="username"></td>
    </tr>
        <tr>
    <th>Password: </th>
    <td><input type="password" name="password"></td>
    </tr>
        <tr>
    <th> </th>
    <td><input type="submit" value="Login"></td>
    </tr>
    </table>
    </form>
	<div id="result">
   <p> <?php
	
	require_once('./include/conf.php');
	
	// Checking If the USer has set The values    
    if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Cehcking if there are ny Contents in the Variables
	if( !empty($_POST['username']) and !empty($_POST['password'])) {
	$query = "SELECT * FROM users_tbl where username = '$username' and password='$password' ";
	$result = mysql_query($query);

	//comparing the user info from the form with the user info in the database

		if (mysql_num_rows($result) >=1){



// fetching the data row-wise and assign to the session variables
		ob_start();
		session_start();
		$rows = mysql_fetch_array($result);
		$_SESSION['ID'] = $rows['user_id'];
		
		$_SESSION['Username'] = $rows['username'];
		$_SESSION['Level'] = $rows['level'];



// Directing the user  or staff to the specific page  According to the Level Foung in the Databasee USing IDs


			if ($_SESSION['Level'] == 'Admin') {

				$id = $_SESSION['ID'];
				$query_id = "SELECT * from users_tbl WHERE id ='$id' ";
				$result_id = mysql_query($query_id);
				
			if(mysql_num_rows($result_id) == 1) {
			// Directing a User to a Normal Page
			header('Location: ./admin/index.php?id='.$id);

			}else {
			// Directing a User to Normal User's Page
			header('Location: ./admin/index.php?id='.$id);
			}

			} else {
				header('Location: index.php');

			} 
			
			} else {
			echo "Access Denied!".'<a href="register.php">Please Register</a>';

			}

			} else {
				echo "Please Insert A Username Or Password in the Boxes Provided!";

			}
}
	?></p>
    </div>

    </article>
    
    <div id="register">
    
    <h4>Please Register in Order to attain an Account here</h4>
    <form id="reg">
    <table>
    <tr>
    <th>Username: </th>
    <td><input type="text" name="Username"></td>
    </tr>
        <tr>
    <th>Password: </th>
    <td><input type="password" name="Password"></td>
    </tr>
       <tr>
    <th>Email: </th>
    <td><input type="email" name="Email"></td>
    </tr>
        <tr>
    <th> </th>
    <td><input type="submit" value="Register"></td>
    </tr>
    </table>
    </form>
    <span id="results"></span>
    </div>
    
    <?php require_once('./theme/footer.php'); ?>

</body>
</html>