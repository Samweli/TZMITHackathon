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
    
    <?php require_once('../theme/sidebar.php'); ?>
        <div id="act_content" class="act_content">
			
            <div id="welcome">
            <article>
            <h4>Welcome To BongoGlass | Read Description Below</h4>
            
            <p>
            BongoGlass allows you to publish what is going on around you. Let the World know of whats going on around you, publish Weird Events, Corruptions, Theft and other more and more Contents. All Contents uploaded will be taking into consideration so be very careful of what you are uploading. 
            </p>

            <p>
                       Contents uploaded will be the secret of the uploader this applies only if the Contents uploaded will be targetting somebody. BongoGlass will help protect your ID. 
            </p>
            
            <p>To start Uploading Contents please Select Option on the Left Side Bar</p>
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

        <!-- Contents Fetched-->
        <?php require_once('./include/contents.php'); ?>
        <!-- The End of Contents Fetched-->
        
    
    <div id="footer"> &copy; BongoGlass | KiooChetu - 2013 | </div>
    </div>
</div>
</body>
</html>