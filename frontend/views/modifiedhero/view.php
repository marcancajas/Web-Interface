<h1><?php echo $model->name;?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
        'attributes' => array(
            //name field
            array(
            	'name' => 'name',
            	'label' => 'Name'
            ),
            //type field
            array(
            	'name' => 'type_id',
            	'label' => 'Type',
            	'value' => $model->type,
            ),
            //game field
            array(
            	'name' => 'game_id',
            	'label' => 'Game',
            	'value' => $model->game,
            ),
            //hair_colour field
            array(
            	'name' => 'hair_colour_id',
            	'label' => 'Hair Colour',
            	'value' => $model->hairColour,
            ),
            //body_colour field
            array(
            	'name' => 'body_colour_id',
            	'label' => 'body Colour',
            	'value' => $model->bodyColour,
            ),
            //strength field
            array(
            	'name' => 'strength',
            	'label' => 'Strength',
            ),
            //height field
            array(
            	'name' => 'height',
            	'label' => 'Height(cm)',
            ),
            //weight field
            array(
            	'name' => 'weight',
            	'label' => 'Weight(Kg)',
            ),
            //speed field
            array(
            	'name' => 'speed',
            	'label' => 'Speed',
            ),
            //armor field
            array(
            	'name' => 'armor_id',
            	'label' => 'Armor',
				'value' => $model->armor,
            ),
           //weapon field
            array(
            	'name' => 'weapon_id',
            	'label' => 'Weapon',
				'value' => $model->weapon,
            ),
            //position_x field
            array(
            	'name' => 'position_x',
            	'label' => 'Initial Position(X)',
            ),
            //position_y field
            array(
            	'name' => 'position_y',
            	'label' => 'Initial Position(Y)',
            ),
        ),
    ));
?>

