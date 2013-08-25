<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Layout     : platform.php
    stylesheet : user.css
*/
?>


 <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => 'Characters',
    'headerIcon' => 'icon-book',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'content' => $this->renderPartial('//character/index')
    ));?>


<?php $this->endWidget();?>
