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
          
        <!-- Dropdown Javascript Plugin -->
         <script LANGUAGE="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/twitter-bootstrap-hover-dropdown.js"></script>
         <script LANGUAGE="JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/twitter-bootstrap-hover-dropdown.min.js"></script>
    
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

				array('label' => 'JAMengine', 'url' => array('/Site/ChaosENGINE', 'view' => 'JAMengine')),

                                array('label' => 'Features', 'url' => array('/Site/Features', 'view' => 'Features')),

				array('label' => 'Community Forum', 'url' => array('/Site/Forum', 'view' => 'Community Forum')),

                                array('label' => 'Blog', 'url' => array('/Site/Blog', 'view' => 'Blog')),

				array('label' => 'About', 'url' => array('/Site/Page', 'view' => 'about')),

                                array('label' => 'Contact Us', 'url' => array('/Site/Contact')),

				array('label' => 'Logout pull-right (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),

            
            //Navbar Login Button
            
            
              (!Yii::app()->user->isGuest) ? '<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>' : '',
              array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions'=>array('class'=>'pull-right'),
                    'items'=>array(

                    ),
               ),
            
              (!Yii::app()->user->isGuest) ?:
              array('<ul class="nav pull-right">
              
                   <li class="dropdown">
                   
                    <!-- Work in progress: Pop form on hover and redirect to /site/login on click, still figuring out.. -->
                    
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-delay="500" data-close-others="false">Login<strong class="caret">
                       </strong></a>
                       <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                       
                       <!-- Login form here -->
                      
                       <!-- Need to fix this for $model, not sure how -->
                        
                       <form id="loginform action="SiteController.php" method="post">
                       <fieldset id="body">
                             <fieldset>
                             <label for = "username">Username or e-mail</label>
                             <input type="text" name="username" id="username" />
                             </fieldset>
                             <fieldset>
                             <label for = "password">Password</label>
                             <input type="password" name="password" id="password" />
                             </fieldset>
                             <input type ="submit" id="login" value="Login" />
                       </fieldset>
                       </form>
                     
                    
                       </div>
                   </li>
               </ul>'
            ),
            
            
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
            
         
           
            
	),
)); 
        
        ?>
          
            
            
       
            
        </div>
</div>


<div id="Head_container">

    <div id="logo_container">
	<div id="logo">
    	<img src="<?php echo Yii::app()->getBaseUrl(); ?>/images/jamEngineLogov5.png" alt="Lee Grant" alt="JAMengine" />
        </div>
        <div id="welcome_msg">
    	<p><h5>A research project prototype of a innovative online games engine platform. Experience the next-gen online platform, with install-free games and extendable server technologies. Sign up for beta.
            
            <?php
           $this->widget('bootstrap.widgets.TbButton',
						array(
							'label'=>'Register Here',
							'url'=>array('site/Register'),
							'type'=>'primary',
							'size'=>'small',
							)
						);
			?></h5>
                     </p>
      
        
        
        
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