<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" media="screen,projection"/>
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
   
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->
        
        <!-- Google CDN -->
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
            
</head>

<body>

 <!----- START OF NAVIGATION BAR ----->  

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', //'null' or 'inverse'
	'brand' => '',
        'brandOptions' => '',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
                            
				array('label' => 'home', 'url' => array('/Site/Index', 'view' => 'Index')),
                                array('label' => 'get started', 'url' => array('/Site/Games','viewG' => 'Games')),
				array('label' => 'forum', 'url' => array('/Site/Forum', 'view' => 'Community Forum')),
                                array('label' => 'contact', 'url' => array('/Site/Contact','view' => 'Contact')),
                            
                                        ),
                     ), 
            
            //Register | Login Button
            array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items' => array(
                        
                        array('label' => 'join', 'url' => array('/Site/Register', 'view' => 'Register')),
                        array('label' => 'login', 'url' => array('/Site/login', 'view' => 'Login')),
 
                           
                            
                                ),
                            ),
                 
            
    
            // Navbar Search Box    
            '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',  //JOSH WE NEED SOME KIND OF SEARCH.PHP FOR THIS, SEARCHES THE FORUM OR THE WHOLE SITE?
            
     
            ), // MAIN ARRAY INCLUSION
        )); //TB NAVBAR AND ITS ARRAY
        
        ?>
                   

 <!----- END OF NAVIGATION BAR ----->  
 
 
 
<!----- START OF HEADER ----->
<div id="Head_container">
    <div id="logo_container">
	<div id="logo">
    	<img src="<?php echo Yii::app()->getBaseUrl(); ?>/images/jamEngineLogov5.png" alt="JAMengine" />
        </div>
        <div id="welcome_msg">
    	<h6 class ="welcome_text">A research project involving a web-based game engine, an innovative platform that host multiple games via extendable servers.
The idea is to redesigned how games are hosted online and create an efficient and install-free environment for community users.</h6>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!----- START OF PAGE CONTENT ----->








		<?php echo $content; ?> <!--Call to content .php file of the page-->
		<hr/> 

                
                
   
                
                
                
                

<!----------------- FOOTER ----------------->                
                
<div id="footer_background">
    <div id="footer_container">

	<div id="nav">
        Copyright &copy; <?php echo date('Y'); ?> SEP Group: Josh Giblett, Marc Ancajas, Adam Piggott. <br/>
        All Rights Reserved.<br/>
	<?php echo Yii::powered(); ?>
    	<ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">ChaosENGINE</a></li>
            <li class="last"><a href="#">CONTACT</a></li>
        </ul>
        <div class="clear"></div>
        </div>
    </div>
</div>

<!-- Google Analytics -->
<script>
	var _gaq=[['_setAccount','<?php echo param('google.analytics.account'); // check global.php shortcut file at "common/lib/" ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>