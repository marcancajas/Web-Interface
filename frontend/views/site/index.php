<?php
/**
 * index.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 8:30 PM
 */
?>
<!-- @layout: main -> page_wrapper -->

<!-- Carousel -->
<div id="carousel_background">
            <div id="carousel_container">
                <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://placehold.it/1170x400&text=First+thumbnail', 'label'=>'Website is up!', 'caption'=>'Hey guys, websites finally getting there, keep up the good work everyone!'),
        array('image'=>'http://placehold.it/1170x400&text=First+thumbnail', 'label'=>'JAMengine Architecture', 'caption'=>'Just an overview of the JAMengine architecture!'),
        array('image'=>'http://placehold.it/1170x400&text=First+thumbnail', 'label'=>'Mike Robeys Favorite', 'caption'=>'The project is manage through the Scrumbut process, an Agile adjusted scrum process'),
    ),
)); ?>
            </div>
        </div>

<!-- Bottom Container -->
<div id="bottom_container">
    <div id="left_bar">
        <div id="main_content">
            <!-- @news content -->
            <h4>NEWS</h4>
            
            
            <!-- START OF CONTENTS @contents maybe generated in the forums or news.php for now, just hard coded-->
            
    	<div class="content">
                <hr>
            <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
             'heading'=>'Hello, world!',
              )); ?>
     
           <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
             'type'=>'primary',
             'size'=>'large',
             'label'=>'Learn more',
             )); ?>
            </p> 
          <?php $this->endWidget(); ?>
        </div>
            
        <div class="content">
                <hr>
                    <div class="page-header">
                <img src="http://placehold.it/220x100&text=First+thumbnail" />
                <h1>Example page header <small>Subtext for header</small></h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
        </div>
            
        <div class="content">
                <hr>
                <div class ="well">
        	<img src="http://placehold.it/220x100&text=First+thumbnail" />
                <h3><a href="#">Website Version 2.0</a></h3>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
        </div>
            
        <div class="content">
                <hr>
        	<img src="http://placehold.it/220x100&text=First+thumbnail" />
                <h3><a href="#">Any Questions?</a></h3>
        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div> 
            
        <a class="more_news" href="<?php echo Yii::app()->request->baseUrl; ?>/Site/News">More News...</a>  
        </div>
        </div>
    
    <!-- RIGHT BAR SECTION -->
    
     <div id="right_bar">
         
    	<div class="content-block">
              <h4>RANKINGS</h4>
        </div>
         
       	<div class="content-block">
              <h4>SERVER STATISTICS</h4>
        </div>
    </div>
    
  
      <div class="clear"></div>
 </div>


