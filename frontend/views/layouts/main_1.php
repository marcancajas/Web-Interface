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
         
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

 <!----- START OF NAVIGATION BAR ----->  
 <div id="nav_container"
	<div id="navigation navbar-static-top">
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', //i niull or 'inverse'
	'brand' => '',
	'brandUrl' => '#',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(

				array('label' => 'Home', 'url' => array('/Site/Index', 'view' => 'Index')),

                                array('label' => 'Games', 'url' => array('/Site/Games','viewG' => 'Games')),

				array('label' => 'JAMengine', 'url' => array('/Site/JAMengine', 'view' => 'JAMengine')),

                                array('label' => 'Features', 'url' => array('/Site/Features', 'view' => 'Features')),

				array('label' => 'Community Forum', 'url' => array('/Site/Forum', 'view' => 'Community Forum')),

				array('label' => 'About', 'url' => array('/Site/About', 'view' => 'About')),

                                array('label' => 'Contact Us', 'url' => array('/Site/Contact','view' => 'Contact')),
  
                           
             //Navbar Logout Button
    
                               /* array('class' => 'pull-right','label' => 'Logout(' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 
                                'visible' => !Yii::app()->user->isGuest) */
                                ),
    
                                ), 

     
            //Navbar Login Button
            
            
              (!Yii::app()->user->isGuest) ? '<p class="navbar-text pull-right">Go to <span><a href="/site/frontend/www/User/index">JAM Account<strong class="caret">
                       </strong></a></a></span></p>' : '',
               array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items'=>array(

                    ),
               ), 
            
              (!Yii::app()->user->isGuest) ?:
              '<ul class="nav pull-right">
              
                   <li class="dropdown">
                   
                 
                    
                       <a href="/site/frontend/www/Site/login" class="dropdown-toggle">Login<strong class="caret">
                       </strong></a>
                       <ul class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                       
                       <!-- Login form here -->
                      
                       <form id="login-form" action="/site/frontend/www/Site/login" method="post">
                       <fieldset id="body">
                             <fieldset>
                             <label for="LoginForm_username">Username or e-mail</label>
                             <input name="LoginForm[username]" id="LoginForm_username" type="text" maxlength="45">
                             </fieldset>
                             <fieldset>
                             <label for="LoginForm_password">Password</label>
                             <input name="LoginForm[password]" id="LoginForm_password" type="password" maxlength="50">
                             </fieldset>
                             <input type="submit" name="yt0" value="Login" />
                       </fieldset>
                       </form>
                       
                       <!-- End of Login form here -->
                    
                       </ul>
                   </li>
               </ul>'
            ,
            
            
             //Navbar Registration Button
            (!Yii::app()->user->isGuest) ?:
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => array(
                          	array('label' => 'Register', 'url' => array('/Site/Register'), 'visible' => Yii::app()->user->isGuest),
                            
			),
		),
           
           /* Old Login Button
            
		(!Yii::app()->user->isGuest) ? '<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>' : '',
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => array(                          
                          	array('label' => 'Login', 'url' => array('/Site/Login'), 
                                    
                                    'items'=>array(
                                    array('label'=>'Username or e-mail', 'url'=>'#'),
                                    array('label'=>'Password', 'url' =>'#'),
                                    array('label'=>'Login'),
                                    'visible' => Yii::app()->user->isGuest),
                                )
                            
			),
		),
            
            End of Old login button*/

            ), // MAIN ARRAY INCLUSION
        )); //TB NAVBAR AND ITS ARRAY
        
        ?>
                   
        </div>
</div>

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