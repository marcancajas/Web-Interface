<?php
/* 
    Document   : blank.php 
    Created on : 28/07/2013, 8:40:42 PM
    Author     : Marc Ancajas
    Description:
       Blank Layout file for login.php
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
   
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->
        
        <!-- Modification CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" media="screen,projection"/>
        
        <!-- Google CDN -->
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
            
</head>

<body>


<div id="page_wrapper"> <!-- Start of page_wrapper -->


		
    
    <?php echo $content; ?> <!--Call to content .php file of the page-->
                
    
           
     	
</div>   <!-- end of page_wrapper -->      

 
<!-- Google Analytics -->
<script>
	var _gaq=[['_setAccount','<?php echo param('google.analytics.account'); // check global.php shortcut file at "common/lib/" ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>