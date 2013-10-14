<!--Written by Josh Giblett-->
<!--Game Detail View-->
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
            //map_size_x field
            array(
            	'name' => 'map_size_x',
            	'label' => 'Map Size X',
            ),
            //map_size_y field
            array(
            	'name' => 'map_size_y',
            	'label' => 'Map Size Y',
            ),
		),
    ));
?>

