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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"
	      media="main"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php
	if(!Yii::app()->user->isGuest)
	{
		?>
		<!--MAIN MENU-->
		<div id="mainmenu" style="margin-bottom:0px;">
			<?php
				$this->widget('bootstrap.widgets.TbAlert', array(
					'block'=>true, // display a larger alert block?
					'fade'=>true, // use transitions?
					'closeText'=>'×', // close link text - if set to false, no close link is displayed
				));

				$this->widget('bootstrap.widgets.TbNavbar', array(
					'type' => 'inverse', // null or 'inverse'
					'brand' => '',
					'brandUrl' => '',
					'fixed'=>false,
					'collapse' => true, // requires bootstrap-responsive.css
					'items' => array(
						array(
							'class' => 'bootstrap.widgets.TbMenu',
							'htmlOptions' => array('class' => 'pull-right'),
							'items' => array(
								array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'))
								),
						),
					),
				));
			?>
		</div>
		<!--END MAIN MENU-->
		<?php
		}
		?>
		<!--BODY-->
		<div id="body">
			<div id="content">
				<?php echo $content; ?>
			</div>
		</div>
	<!--END BODY-->
	<hr/>
	<!--FOOTER-->
	<div id="footer" align=center>
		Copyright &copy; <?php echo date('Y'); ?> JAM Group.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
	</div>
	<!--END FOOTER-->
</div>
<!--END PAGE-->
</body>
</html>