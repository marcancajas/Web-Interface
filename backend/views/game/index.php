<!--Written by Josh Giblett-->
<!--Game Index View-->

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
			//description field
			array(
				'name'=>'description',
				'header'=>'Description',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//map_size_x field
			array(
				'name'=>'map_size_x',
				'header'=>'Map Size X',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;', 'width'=>'40px'),
			),
			//map_size_y field
			array(
				'name'=>'map_size_y',
				'header'=>'Map Size Y',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;', 'width'=>'25px'),
			),
			//View, Update, Delete Buttons
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
				'viewButtonUrl'=>'app()->createUrl("Game/View",array("id"=>$data["id"]))',
				'viewButtonIcon'=>'icon-tasks icon-large',
				'updateButtonUrl'=>'app()->createUrl("Game/Update",array("id"=>$data["id"]))',
				'updateButtonIcon'=>'icon-edit icon-large',
				'deleteButtonUrl'=>'app()->createUrl("Game/Delete",array("id"=>$data["id"]))',
				'deleteButtonIcon'=>'icon-remove icon-large',
				'htmlOptions'=>array('style'=>'width: 40px; text-align:center'),
			),
		),

    )); ?>