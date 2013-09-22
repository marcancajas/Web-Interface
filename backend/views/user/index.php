<?php
    $this->widget('bootstrap.widgets.TbGridView', array(
		'type'=>'striped bordered',
		'dataProvider'=>$dataProvider,
		'template'=>"{items}",
		'columns'=>array(
			array(
				'name'=>'username',
				'header'=>'Username',
			),
			array(
				'name'=>'firstname',
				'header'=>'First Name',
			),
			array(
				'name'=>'lastname',
				'header'=>'Last Name',
			),
			array(
				'name'=>'email',
				'header'=>'Email',
			),
			array(
				//'name'=>'admin',
				'header'=>'Administrator',
				'value'=>'$data->itemAlias("AdminStatus",$data->superuser)'
			),
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