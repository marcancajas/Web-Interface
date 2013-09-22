<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	'Manage',
);

$this->menu = array(
		array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo 'Manage' . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'user-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'username',
		'password',
		'salt',
		'password_strategy',
		array(
					'name' => 'requires_new_password',
					'value' => '($data->requires_new_password === 0) ? \'No\' : \'Yes\'',
					'filter' => array('0' => 'No', '1' => 'Yes'),
					),
		/*
		'email',
		'login_attempts',
		'login_time',
		'login_ip',
		'validation_key',
		'create_id',
		'create_time',
		'update_id',
		'update_time',
		'firstname',
		'lastname',
		'registrationKey',
		array(
				'name'=>'country',
				'value'=>'GxHtml::valueEx($data->country0)',
				'filter'=>GxHtml::listDataEx(Country::model()->findAllAttributes(null, true)),
				),
		'gender',
		'birthdate',
		'superuser',
		'status',
		'creationDate',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>