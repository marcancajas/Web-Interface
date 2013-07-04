<?php
/* 
    Document   : index.php (Guest)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Description:
        Purpose of the stylesheet follows.
*/
?>

<tt><?php $this->getLayoutFile('main'); ?></tt>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontend.css"
	      media="screen"/>

<div id="user_background"> 
     <div id="user_container">
          
         
            <div id="user_menubox">
                
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list',
            'items'=>array(
            array('label'=>'MAIN MENU'),
            array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
            array('label'=>'Messages', 'icon'=>'icon-envelope', 'url'=>'#'),  
            array('label'=>'MyGames', 'icon'=>'book', 'url'=>'#'),
            array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
            array('label'=>'ACCOUNT OPTIONS'),
            array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
            array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
            array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
            array('label'=>'Logout', 'icon'=>'icon-off', 'url'=>'#'),
            ),
            )); ?>                
           <div class="clear"></div>   
           </div>
         
           <div id="user_contentbox">        
         
            <p><h1>User Content Box</h1></p>
             
             
             
             <?php echo CHtml::link('Connect to Worker',array('/User/ConnectToWorker')); ?>
             <div class="clear"></div>
          </div>
         
    </div>
</div>