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
    
    
    <header>
        <div id="logo">
    	<img src="http://placehold.it/770x400&text=First+thumbnail" />
        </div>
    </header>    
        
        

<div class="container" id="navigation">
    
  
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
                                '---',
				array('label' => 'ChaosENGINE', 'url' => array('/Site/ChaosENGINE', 'view' => 'ChaosENGINE')),
                                '---',
                                array('label' => 'Features', 'url' => array('/Site/Features', 'view' => 'Features')),
                                '---',
				array('label' => 'Community Forum', 'url' => array('/Site/Forum', 'view' => 'Community Forum')),
                                '---',
                                array('label' => 'Blog', 'url' => array('/Site/Blog', 'view' => 'Blog')),
                                '---',
				array('label' => 'About', 'url' => array('/Site/Page', 'view' => 'about')),
                                '---',
                                array('label' => 'Contact Us', 'url' => array('/Site/Contact')),
                                '---',			
				array('label' => 'Logout pull-right (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),
		//'<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
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
    

    
	<!-- mainmenu -->
	<div class="container" style="margin-top:80px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>
 
        
               
                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/770x400&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/770x400&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>
                
                
                
                
		<?php echo $content; ?>
		<hr/>
                
                
                
                
                
                
                
                
                
                
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by SEP Group: Josh Giblett, Marc Ancajas, Adam Piggott.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>
		<!-- footer -->
	</div>
</div>
<!-- page -->
</body>
</html>