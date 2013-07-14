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
        <h4>Latest Contents Uplaoded </h4>
       <?php
	   require_once('./php/fetch_subjects.php');
	    ?>
        </article>

        </article>
        </div>
        
        <div id="act_content" class="act_content">
			
            <div id="welcome">
            <?php require_once('./php/fetcher.php'); ?>
            </div>
        </div>
        	<div id="sideright">
            <article>
            <h4>Explore More</h4>
            <ul>
            <li><a href="../index.php">Login</a></li>
            <li><a href="../index.php">Register</a></li>

            </ul>
            </article>
            
                        <article>
            <h4>Hot Contents</h4>
            <ul>
            <li><a href="#">Nyama Chumbani</a></li>
            <li><a href="#">Morogoro Shamba</a></li>
                        <li><a href="#">Nyama Chumbani</a></li>
            <li><a href="#">Morogoro Shamba</a></li>
                        <li><a href="#">Nyama Chumbani</a></li>
            <li><a href="#">Morogoro Shamba</a></li>
                        <li><a href="#">Sikio La Kufa </a></li>
            <li><a href="#">Morogoro Shamba</a></li>
                        <li><a href="#">Kitimoto Kibaya sana</a></li>
            <li><a href="#">Morogoro Shamba</a></li>

            </ul>
            </article>

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