<!--Written by Josh Giblett-->
<!--Weapon Detail View-->
<h1><?php echo $model->name?></h1>

<!--Detail View Widget-->
<?php
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
        'attributes' => array(
            //class field
            array(
            	'name' => 'class',
            	'label' => 'Class'
            ),
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
            //buy field
            array(
            	'name' => 'buy',
            	'label' => 'Buy',
            ),
            //sell field
            array(
            	'name' => 'sell',
            	'label' => 'Sell',
            ),
            //damage field
            array(
            	'name' => 'damage',
            	'label' => 'Damage',
            ),
            //weight field
            array(
            	'name' => 'weight',
            	'label' => 'Weight',
            ),
        ),
    ));
?>

