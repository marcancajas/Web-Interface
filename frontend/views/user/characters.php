<?php
/* 
    Document   : index.php (JAMplatform v1.0)
    Created on : 19/05/2013, 12:22:53 AM
    Author     : Marc Ancajas
    Layout     : platform.php
    stylesheet : user.css
*/
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<script type="text/javascript">
 
$( init );
 
function init() {
  $('#character-box').draggable( {
      containment: '#user_contentbox',
      cursor: 'move',
  });
}

$(function() {
$( "#character-box" ).resizable( {
    containment: '#user_contentbox',
    minWidth: '400',
    minHeight: '250'
});
});
</script>

<div id ="character-box" class="ui-widget-content">
    <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => 'Characters',
    'headerIcon' => 'icon-book',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>



<?php
    $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs', // 'tabs' or 'pills'
    'placement' => 'left',
    'tabs'=>array(
    array('label'=>'Main Menu', 'content'=>'render partial to players ranking and stats news page', 'active'=>true),
    array('label'=>'Characters','content'=> $this->renderPartial('characterlist', NULL, true)),
    array('label'=>'Something', 'content'=>'Copyright 2013 JAM Game™. All Rights Reserved'),
    ),
    ));
?>

<!-- IFRAME? -->

   

    <?php $this->endWidget();?>


</div>