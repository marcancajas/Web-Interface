<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>JAM Online</title>

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
					array('label' => 'contact', 'url' => array('/site/contact')),
				),
			),
			array(
			 	'class'=>'bootstrap.widgets.TbMenu',
			 	'htmlOptions'=>array('class'=>'pull-right'),
			 	'items' => array(
					array('label' => 'Logout '.Yii::app()->user->name, 'url' => array('Site/Logout'), 'visible'=>!Yii::app()->user->isGuest),
					array('label' => 'Login', 'url' => array('/Site/Login'), 'visible'=>Yii::app()->user->isGuest),
					array('label' => 'Register', 'url' => array('/Site/Register'), 'visible'=>Yii::app()->user->isGuest),
				),
			),
          ), // MAIN ARRAY INCLUSION
        )); //TB NAVBAR AND ITS ARRAY
        ?>


 <!----- END OF NAVIGATION BAR ----->

 <!----- PAGE CONTENT CALL ----->

    <?php echo $content; ?> <!--Call to content .php file of the page-->

 <!----- END OF PAGE CONTENT CALL ----->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
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
