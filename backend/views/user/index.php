<!--Written by Josh Giblett-->
<!--User Index View-->
<?php
    //Grid view widget
    $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		'columns'=>array(
			//username field
			array(
				'name'=>'username',
				'header'=>'Username',
			),
			//firstname field
			array(
				'name'=>'firstname',
				'header'=>'First Name',
			),
			//lastname field
			array(
				'name'=>'lastname',
				'header'=>'Last Name',
			),
			//email field
			array(
				'name'=>'email',
				'header'=>'Email',
			),
			//superuser field
			array(
				'header'=>'Administrator',
				'value'=>'$data->itemAlias("AdminStatus",$data->superuser)'
			),
			//View, Update Delete buttons
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
				'viewButtonUrl'=>'app()->createUrl("User/View",array("id"=>$data["id"]))',
				'viewButtonIcon'=>'icon-tasks icon-large',
				'updateButtonUrl'=>'app()->createUrl("User/Update",array("id"=>$data["id"]))',
				'updateButtonIcon'=>'icon-edit icon-large',
				'deleteButtonUrl'=>'app()->createUrl("User/Delete",array("id"=>$data["id"]))',
				'deleteButtonIcon'=>'icon-remove icon-large',
				'htmlOptions'=>array('style'=>'width: 60px;text-align:center'),
			),
		),

    ));
?>