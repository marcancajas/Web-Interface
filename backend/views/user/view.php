<?php
$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo $model->username?></h1>
<?php
	$this->widget('bootstrap.widgets.TbDetailView', array(
		'data'=>$model,
        'attributes' => array(
            array(
            	'name' => 'firstname',
            	'label' => 'First Name'
            ),
            array(
            	'name' => 'lastname',
            	'label' => 'Last Name'
            ),
            array(
            	'name' => 'username',
            	'label' => 'Username'
            ),
            array(
            	'name' => 'email',
            	'label' => 'Email'
            ),
            array(
            	'name' => 'gender',
            	'label' => 'Gender'
            ),

            array(
            	'name' => 'country',
            	'label' => 'Country',
            ),
            array(
            	'name' => 'birthdate',
            	'label' => 'Birth Date',
            	'value' => date('d-m-Y', $model->birthdate),
            ),
            array(
            	'name' => 'creationDate',
            	'label' => 'Creation Date',
            	'value' => date('d-m-Y', $model->creationDate),
            ),
            array(
            	'name' => 'superuser',
            	'label' => 'Administrator',
            	'value' => $model->itemAlias("AdminStatus",$model->superuser)
            ),
            array(
            	'name' => 'status',
            	'label' => 'Status',
            	'value' => $model->itemAlias("UserStatus",$model->status)
            ),
        ),
    ));
?>
