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
            array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
            array('label'=>'Messages', 'icon'=>'icon-envelope', 'url'=>'#'),    
            array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
            array('label'=>'ACCOUNT OPTIONS'),
            array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
            array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
            array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
            array('label'=>'Exit', 'icon'=>'icon-signin', 'url'=>'#'),
            ),
            )); ?>                
                
           </div>
         
           <div id="user_contentbox">        
             <li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
             <h1>User View</h1>
             <?php echo CHtml::link('Connect to Worker',array('/User/ConnectToWorker')); ?>
          </div>
         
    </div>
</div>