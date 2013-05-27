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
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontend.css"
	      media="screen"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    
    
 <div id="nav_container"> 
	<div id="navigation navbar-static-top">
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => '',
	'brandUrl' => '#',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
                          
				array('label' => 'Home', 'url' => array('/Site/Index')), 
                    
                                array('label' => 'Games', 'url' => array('/Site/Features', 'view' => 'Games')),
                       
				array('label' => 'ChaosENGINE', 'url' => array('/Site/ChaosENGINE', 'view' => 'ChaosENGINE')),
                     
                                array('label' => 'Features', 'url' => array('/Site/Features', 'view' => 'Features')),
                         
				array('label' => 'Community Forum', 'url' => array('/Site/Forum', 'view' => 'Community Forum')),
                          
                                array('label' => 'Blog', 'url' => array('/Site/Blog', 'view' => 'Blog')),
                          
				array('label' => 'About', 'url' => array('/Site/Page', 'view' => 'about')),
                         
                                array('label' => 'Contact Us', 'url' => array('/Site/Contact')),
                      		
				array('label' => 'Logout pull-right (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),
		
		(!Yii::app()->user->isGuest) ? '<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>' : '',
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => array(
                          	array('label' => 'Login', 'url' => array('/Site/Login'), 'visible' => Yii::app()->user->isGuest),
			),
		),
	),
)); ?>
        </div>
        </div> 
     
        
<div id="Head_container">
        
    <div id="logo_container">
	<div id="logo">
    	<img src="/site/frontend/www/images/jamEngineLogov4.png" alt="Lee Grant" alt="ChaosEngine" />
    </div>
    <div id="welcome_msg">
    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
    </div>
    <div class="clear"></div>
    </div>
    
</div>
                
		<?php echo $content; ?> <!--Call to content .php file of the page-->
		<hr/>
                                
                
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
                
                   
              
		<!-- footer -->
                
<!-- page -->
<!-- Google Analytics -->
<script>
	var _gaq=[['_setAccount','<?php echo param('google.analytics.account'); // check global.php shortcut file at "common/lib/" ?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>