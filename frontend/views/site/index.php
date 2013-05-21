<?php
/**
 * index.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 8:30 PM
 */
?>

<tt><?php $this->getLayoutFile('main'); ?></tt>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontend.css"
	      media="screen"/>




<div id="carousel_background">
            <div id="carousel_container">
            <?php
            $this->widget('bootstrap.widgets.TbButton',
						array(
							'label'=>'Register',
							'url'=>array('site/Register'),
							'type'=>'primary',
							'size'=>'large',
							)
						);
			?>


                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/1150x300&text=First+thumbnail', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/1150x300&text=Second+thumbnail', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://placehold.it/1150x300&text=Third+thumbnail', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
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
