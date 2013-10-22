<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('character-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'character-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'id',
		'name',
		array(
				'name'=>'type_id',
				'value'=>'GxHtml::valueEx($data->type)',
				'filter'=>GxHtml::listDataEx(Type::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'game_id',
				'value'=>'GxHtml::valueEx($data->game)',
				'filter'=>GxHtml::listDataEx(Game::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'body_colour_id',
				'value'=>'GxHtml::valueEx($data->bodyColour)',
				'filter'=>GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'hair_colour_id',
				'value'=>'GxHtml::valueEx($data->hairColour)',
				'filter'=>GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)),
				),
		/*
		'strength',
		'height',
		'weight',
		'speed',
		'health',
		'armor_health',
		array(
				'name'=>'armor_id',
				'value'=>'GxHtml::valueEx($data->armor)',
				'filter'=>GxHtml::listDataEx(Armor::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'weapon_id',
				'value'=>'GxHtml::valueEx($data->weapon)',
				'filter'=>GxHtml::listDataEx(Weapon::model()->findAllAttributes(null, true)),
				),
		'position_x',
		'position_y',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>