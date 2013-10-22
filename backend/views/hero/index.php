<!--Written by Josh Giblett-->
<!--Hero Index View-->
<!--Grid View Widget-->
<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		'columns'=>array(
			//name field
			array(
				'name'=>'name',
				'header'=>'Name',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;', 'width'=>'5px'),
			),
			//type field
			array(
				'name'=>'type_id',
				'header'=>'Type',
				'value'=>'$data->type',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//game field
			array(
				'name'=>'game_id',
				'header'=>'Game',
				'value'=>'$data->game',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'40px'),
			),
			//body field
			array(
				'name'=>'body_colour_id',
				'header'=>'Body Colour',
				'value'=>'$data->bodyColour',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//hair_colour field
			array(
				'name'=>'hair_colour_id',
				'header'=>'Hair Colour',
				'value'=>'$data->hairColour',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//height field
			array(
				'name'=>'height',
				'header'=>'Height',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//weight field
			array(
				'name'=>'weight',
				'header'=>'Weight',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//strength field
			array(
				'name'=>'strength',
				'header'=>'Strength',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//speed field
			array(
				'name'=>'speed',
				'header'=>'Speed',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//armor field
			array(
				'name'=>'armor_id',
				'header'=>'Armor',
				'value'=>'$data->armor',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//weapon field
			array(
				'name'=>'weapon_id',
				'header'=>'Weapon',
				'value'=>'$data->weapon',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//View, Update Delete Buttons
			array(
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'template'=>'{view}&nbsp;{update}&nbsp;{delete}',
				'buttons'=>array(
					'view'=>array(
						'options'=>array('style'=>'text-decoration:none;'),
					),
					'update'=>array(
						'options'=>array('style'=>'text-decoration:none;'),
					),
					'delete'=>array(
						'options'=>array('style'=>'text-decoration:none;'),
					),
				),
				'viewButtonUrl'=>'app()->createUrl("Hero/View",array("id"=>$data["id"]))',
				'viewButtonIcon'=>'icon-tasks icon-large',
				'updateButtonUrl'=>'app()->createUrl("Hero/Update",array("id"=>$data["id"]))',
				'updateButtonIcon'=>'icon-edit icon-large',
				'deleteButtonUrl'=>'app()->createUrl("Hero/Delete",array("id"=>$data["id"]))',
				'deleteButtonIcon'=>'icon-remove icon-large',
				'htmlOptions'=>array('style'=>'width: 40px; text-align:center'),
			),
		),

    )); ?>