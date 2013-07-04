<?php
/**
 * index.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 8:30 PM
 */
?>
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

        <tt><?php $this->getLayoutFile('main'); ?></tt>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontend.css"
	      media="screen"/>
              
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>




<div id="carousel_background">
            <div id="carousel_container">
    <?php /*
            $this->widget('bootstrap.widgets.TbButton',
						array(
							'label'=>'Register',
							'url'=>array('site/Register'),
							'type'=>'primary',
							'size'=>'large',
							)
						);
			*/?>


                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        
     
        array('image'=>'http://192.168.42.254/site/frontend/www/images/carouselsitefinishv2.png', 'label'=>'Website is up!', 'caption'=>'Hey guys, websites finally getting there, keep up the good work everyone!'),
        array('image'=>'http://192.168.42.254/site/frontend/www/images/carouselarchitecturefinishv2.png', 'label'=>'JAMengine Architecture', 'caption'=>'Just an overview of the JAMengine architecture!'),
        array('image'=>'http://192.168.42.254/site/frontend/www/images/carouselscrumv2.png', 'label'=>'Mike Robeys Favorite', 'caption'=>'The project is manage through the Scrumbut process, an Agile adjusted scrum process'),
    ),
)); ?>
            </div>
        </div>

<div id="page_background">
    <div id="page_container">

<div id="services_holder">
	<div id="services">
    	<div class="services-block">
        	<img src="http://placehold.it/220x100&text=First+thumbnail" alt="Social marketing" />
          <h2><a href="#">Project Overview</a></h2>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="services-block">
        	<img src="http://placehold.it/220x100&text=First+thumbnail" />
            <h3><a href="#">ChaosENGINE Overview</a></h3>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="services-block">
        	<img src="http://placehold.it/220x100&text=First+thumbnail" />
            <h4><a href="#">Development Tools</a></h4>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="services-block">
        	<img src="http://placehold.it/220x100&text=First+thumbnail" />
            <h5><a href="#">Any Questions?</a></h5>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>
        <div class="clear"></div>
    </div>
</div>


    </div>
</div>


</body>
