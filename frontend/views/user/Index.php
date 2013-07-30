<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Description:
        Purpose of the stylesheet follows.
*/
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" media="screen,projection"/>

<div id="user_background"> 
     <div id="user_container">
          
         
            <div id="user_menubox">
                
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'list',
            'items'=>array(
            array('label'=>'MAIN MENU'),
            array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
            array('label'=>'Messages', 'icon'=>'icon-envelope', 'url'=>'#'),  
            array('label'=>'Characters', 'icon'=>'book', 'url'=>'#'),
            array('label'=>'Rankings', 'icon'=>'pencil', 'url'=>'#'),
            array('label'=>'ACCOUNT OPTIONS'),
            array('label'=>'Profile Settings', 'icon'=>'user', 'url'=>'#'),
            array('label'=>'Account Settings', 'icon'=>'cog', 'url'=>'#'),
            array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
            array('label'=>'Logout', 'icon'=>'icon-off', 'url' => array('/site/logout','view' => 'Contact')),
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