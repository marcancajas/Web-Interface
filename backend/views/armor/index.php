<!--Written by Josh Giblett-->

<!--Armor Index View-->
<!--Grid View Widget-->
<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		'columns'=>array(
			//class field
			array(
				'name'=>'class',
				'header'=>'Class',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;', 'width'=>'5px'),
			),
			//name field
			array(
				'name'=>'name',
				'header'=>'Name',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//description field
			array(
				'name'=>'description',
				'header'=>'Description',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'40px'),
			),
			//buy field
			array(
				'name'=>'buy',
				'header'=>'Buy',
				'headerHtmlOptions'=>array('style'=>'text-align:center; vertical-align:middle;'),
				'htmlOptions'=>array('style'=>'vertical-align:middle;', 'width'=>'25px'),
			),
			//sell field
			array(
				'name'=>'sell',
				'header'=>'Sell',
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
			//defence field
			array(
				'name'=>'defence',
				'header'=>'Defence',
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
				'viewButtonUrl'=>'app()->createUrl("Armor/View",array("id"=>$data["id"]))',
				'viewButtonIcon'=>'icon-tasks icon-large',
				'updateButtonUrl'=>'app()->createUrl("Armor/Update",array("id"=>$data["id"]))',
				'updateButtonIcon'=>'icon-edit icon-large',
				'deleteButtonUrl'=>'app()->createUrl("Armor/Delete",array("id"=>$data["id"]))',
				'deleteButtonIcon'=>'icon-remove icon-large',
				'htmlOptions'=>array('style'=>'width: 40px; text-align:center'),
			),
		),

    )); ?>