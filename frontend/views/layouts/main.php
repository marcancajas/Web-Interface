<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Jam</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" media="screen,projection"/>
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- MODIFIED TEMPLATE CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" media="screen,projection"/>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

  <div id="navigation_bar"> <!----- START OF NAVIGATION BAR ----->

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
		'type' => 'inverse', //'null' or 'inverse'
		'brand' => CHtml::image(Yii::app()->getBaseUrl().'/images/jamnavbarlogo.png'),
		'brandOptions' => array('style' => 'width:110px; height:50px;'),
		'htmlOptions' => array('style' => ''),
		'collapse' => true, // requires bootstrap-responsive.css
		'items' => array(
			array(
				'class' => 'bootstrap.widgets.TbMenu',
				'items' => array(
					array('label' => 'Home', 'url' => array('/')),
					array('label' => 'JAM Engine ®', 'url' => array('/site/jamengine','view' => 'Jam engine')),
					array('label' => 'About', 'url' => array('/site/about', 'view' => 'About')),
					array('label' => 'Contact', 'url' => array('/site/contact', 'view' => 'Contact')),
				),
			),
			array(
			 	'class'=>'bootstrap.widgets.TbMenu',
			 	'htmlOptions'=>array('class'=>'pull-right', 'style' => 'margin-right: 10px;'),
			 	'items' => array(
					array('label' => 'Logout '.Yii::app()->user->name, 'url' => array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					array('label' => 'Sign in', 'url' => array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label' => 'Create an account', 'url' => array('/site/register'), 'visible'=>Yii::app()->user->isGuest),
				),
                            
			),
          ), // MAIN ARRAY INCLUSION
        )); //TB NAVBAR AND ITS ARRAY
        ?>

 </div> <!----- END OF NAVIGATION BAR ----->

 <div id="page-wrapper">
 <!----- PAGE CONTENT CALL ----->
 
    <?php echo $content; ?> <!--Call to content .php file of the page-->

 <!----- END OF PAGE CONTENT CALL ----->
 </div>
 
 
 <div class="container" style="margin-top: 0px; width:100%; background-color: #ffffff;">
     
  <!-- FOOTER -->
 <hr class="content-divider">
 <div class="container" style="padding-top:20px;">
      <footer>
        <p> Jam &copy; 2013 &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer> 
 </div>

 </div>
 
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../assets/js/holder/holder.js"></script>
  </body>
</html>
