<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Frontend: Marc Ancajas, Backend: Josh Giblett
    Layout     : platform.php
    Stylesheet : user.css
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="language" content="en"/>
        <title>Welcome to JAM v1.0 Beta</title>
        
	<!-- Links -->
        
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	
        <!-- Print View -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
        
        <!-- Modification CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" media="screen,projection"/>
          
        <!-- Google CDN -->
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
   
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->
       <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

       

    </head>
   
    <body>
        <div id="container">
            <div id="user_navigation_container"> 
               <button>hide the div</button>
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>'true',
            'items'=>array(
         /* array('label'=>'MAIN MENU'), */
            array('icon'=>'home', 'url'=> array('/user/Index','view' => 'Index')),
            array('icon'=>'icon-envelope', 'url'=> '#'),  
            array('icon'=>'book', 'url'=> array('/user/characters','view' => 'characters')),
            array('icon'=>'pencil', 'url'=>'#'),
         /* array('label'=>'ACCOUNT OPTIONS'), */
            array('icon'=>'user', 'url'=>'#'),
            array('icon'=>'cog', 'url'=>'#'),
            array('icon'=>'flag', 'url'=>'#'),
            array('icon'=>'icon-off', 'url' => array('/site/logout','view' => 'Contact')),
            ),
            ));          
          
     ?>  
           <!-- <div class="social_icons_bar">
            
            
            FACEBOOK , TWITTER, YOUTUBE, TWITCH.tv
            
            
            
            
            </div> -->
            </div>
        
            <div id="user_container">
                 
                <div id="user_contentbox">
     
		<?php echo $content; ?> <!--Call to content .php file of the page-->
  
                </div>
                 
             </div>
        
            
            <script>
            $( "button" ).click(function() {
            $( "#utility-box" ).toggle("slide", {
                direction: "right" },
                "slow"
            );
            });
            </script>
        
        
            <div id="utility-box">
                @content
            </div>
            
        </div>
    </body>
</html>
