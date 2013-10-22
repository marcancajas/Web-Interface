<!--Written by Josh Giblett-->
<!--Hero Type Detail View-->
<h1><?php echo $model->name?></h1>
<!--Detail View Widget-->
<?php
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
        'attributes' => array(
            //name field
            array(
            	'name' => 'name',
            	'label' => 'Name'
            ),
            //description field
            array(
            	'name' => 'description',
            	'label' => 'Description',
            ),
		),
    ));
?>
