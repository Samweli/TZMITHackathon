<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width" />
<title>BongoGlass | KiooChetu</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php require_once('./js/conf.php'); ?>
</head>
<body>
<div id="wrapper">
    <div id="content">
    <div id="banner"><h4>Welcome to BongoGlass | KiooChetu </h4></div>
    
    	<div id="services">
        <article>
        <h4>Access </h4>
        <ul>
        	<li><a href="javascript:;" onclick="togglediv('#web_developing', 3000);">Upload Image Content</a></li>	
            <li><a href="javascript:;" onclick="togglediv('#web_application', 3000);">Upload Video Content</a></li>	
            <li><a href="javascript:;" onclick="togglediv('#webanimation', 3000);">Upload Audio Content</a></li>
            <li><a href="javascript:;" onclick="togglediv('#webanimation', 3000);">View Contents</a></li>
        </ul>
        </article>
        </div>
        
        <div id="act_content" class="act_content">
			
            <div id="welcome">
            <article>
            <h4>Results Brought by the Database</h4>
            
            
            <p>
            <?php
		require_once('./conf/conf.php');
		if(isset($_POST['Name']) && isset($_POST['Mobile']) && isset($_POST['Email']) && isset($_FILES['Image']) && isset($_POST['Description'])) {
		$name 		= $_POST['Name'];
		$mobile 	= $_POST['Mobile'];
		$email	 	= $_POST['Email'];		
		$fileName = $_FILES['Image']['name'];
		$tmpName  = $_FILES['Image']['tmp_name'];
		$description = $_POST['Description'];
		//$fileSize = $_FILES['Image']['size'];
		//$fileType = $_FILES['Image']['type'];
		//Image Upload Folder
		$location = 'images/';
		$filePath = $location.$fileName;
		$result = '';
		$date = date("d m Y H:i:s");
		$status = 'Not Active';
		if(!empty($name) && !empty($mobile) && !empty($email) && !empty($fileName) && !empty($description)) {
		//Upload File in the Directory
				
		//print_r($fileName);	
		if($result = move_uploaded_file($tmpName, $filePath)) {
			
			$query = "INSERT INTO friends VALUES ('','$name','$mobile','$email','$filePath','$description','$date','$status')";
			if($query_run = mysql_query($query)) {
				echo "Content Successfully published";
			} else{	
				echo "Try again!!".mysql_error();
			}
			
		} else{
			echo "Failed to Upload!!";
		}
			

		
		} else {
			echo "<font color='blue'><b>Please Fill in the Contents to validate Data!!</b></font>";
		
		}
		
		} else {
			echo "Values to Accomplish this are not yet set".'<a href="index.php">Go Back</a>';	
		}
		
		
		
		?>
            </p>
            </article>
            
            </div>
        
        	<div id="done">
            
            
            </div>
        </div>
        
        <!-- Add Image Content -->
        <?php require_once('./include/image_content.php'); ?>
        <!-- The End of Image Content -->
        
        <!-- Add Video Content -->
        <?php require_once('./include/video_upload.php'); ?>
        <!-- The End of Video Content -->
        
        <!-- Audio Content -->
        <?php require_once('./include/audio_content.php'); ?>
        <!-- The End of Audio Content-->
        
    
    <div id="footer"> &copy; BongoGlass | KiooChetu - 2013 | </div>
    </div>
</div>
</body>
</html>