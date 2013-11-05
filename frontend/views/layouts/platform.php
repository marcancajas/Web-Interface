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
        <title>Jam</title>

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
 <!----- START OF NAVIGATION BAR ----->
 <?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', //'null' or 'inverse'
	'brand' => CHtml::image(Yii::app()->getBaseUrl().'/images/jamnavbarlogo.png'),
        'brandOptions' => array('style' => 'width:105px;height:50px;margin-left:0px;'),
        'htmlOptions' => array('style' => ''),
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label' => 'home', 'url' => array('/')),
                array('label' => 'forums', 'url' => array('/site/get_started','view' => 'Forums')),
				array('label' => 'about', 'url' => array('/site/forum', 'view' => 'About')),
                array('label' => 'support', 'url' => array('/site/contact','view' => 'Contact')),
             ),
                    ),

                            //PROFILE DROPDOWN

                         array(
                            'class' => 'bootstrap.widgets.TbMenu',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'items' => array(
                            '---',
                            array('label' => Yii::app()->user->name,'url' => '#','items' => array(
                                    array('label'=>'Edit Profile','icon'=>'user', 'url'=> array('user/profile')),                      
                                    '---',
                                    array('label'=>'Logout','icon'=>'icon-off', 'url' => array('/site/logout')),
                                    ),
                                ),
                             ),
                          ),
                         
            ), // MAIN ARRAY INCLUSION
        )); //TB NAVBAR AND ITS ARRAY

        ?>


 <!----- END OF NAVIGATION BAR ----->
 

    

<div id="platform_container"> <!-- start of platform-container -->

<div id="user-menu">
        <?php  $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>'true',
            'htmlOptions'=>array('style' => 'margin-top:15px; padding:10px;'),       
            'items'=>array(

            array('label'=>'MAIN MENU'),

            array('label'=>'Dashboard','icon'=>'home', 'url'=> array('/user/index','view' => 'index')),
            array('label'=>'Heroes','icon'=>'book', 'url'=> array('/ModifiedHero/index')),
            ),
            ));

            ?>
</div>
    
        <div id="user_contentbox">

                <?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?> <!--Call to content .php file of the page-->

        </div>
</div>

 <div id="utility-box">
            <?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
     <div class="container" style="margin-top:100px; padding: 5px;">
         <p>To play the game</p>
         <p>create a new hero,</p> 
         <p>click on the</p>
         <p>heroes button</p> 
     </div>
     
     
<!-- This side bar is a prototype idea for Jam Engine, The purpose is to provide different utilities for the users, on-click pops a new window specific for that utility. -->
           <!-- <ul class="nav" style="margin-top:150px;">
                <li class="nav-icons">
                    <a title="Dashboard" href="<?php echo Yii::app()->request->baseUrl; ?>/user/index"><span class="dashboard-icon"></span></a>
                </li>
                <li class="nav-icons">
                    <a title="Chat" href="#"><span class="messages-icon"></span></a>
                </li>
                  <li class="nav-icons">
                    <a title="Friends" href="<?php echo Yii::app()->request->baseUrl; ?>/Hero/index"><span class="characters-icon"></span></a>
                </li>
                  <li class="nav-icons">
                    <a title="Rankings" href="#"><span class="rankings-icon"></span></a>
                </li>
                  <li class="nav-icons">
                    <a title="Profile Settings" href="#"><span class="profile-icon"></span></a>
                </li>
                  <li class="nav-icons">
                    <a title="Account Settings" href="#"><span class="account-icon"></span></a>
                </li>
                  <li class="nav-icons">
                    <a title="Help" href="#"><span class="help-icon"></span></a>
                </li>
           -->

            </ul>
</div>

<script>
            $( "button" ).click(function() {
            $( "#utility-box" ).toggle("slide", {
                direction: "right" },
                "slow"
            );
            });
</script>


</body>
</html>
