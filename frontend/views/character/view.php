<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'name',
array(
			'name' => 'type',
			'type' => 'raw',
			'value' => $model->type !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->type)), array('type/view', 'id' => GxActiveRecord::extractPkValue($model->type, true))) : null,
			),
array(
			'name' => 'game',
			'type' => 'raw',
			'value' => $model->game !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->game)), array('game/view', 'id' => GxActiveRecord::extractPkValue($model->game, true))) : null,
			),
array(
			'name' => 'bodyColour',
			'type' => 'raw',
			'value' => $model->bodyColour !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->bodyColour)), array('colour/view', 'id' => GxActiveRecord::extractPkValue($model->bodyColour, true))) : null,
			),
array(
			'name' => 'hairColour',
			'type' => 'raw',
			'value' => $model->hairColour !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->hairColour)), array('colour/view', 'id' => GxActiveRecord::extractPkValue($model->hairColour, true))) : null,
			),
'strength',
'height',
'weight',
'speed',
'health',
'armor_health',
array(
			'name' => 'armor',
			'type' => 'raw',
			'value' => $model->armor !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->armor)), array('armor/view', 'id' => GxActiveRecord::extractPkValue($model->armor, true))) : null,
			),
array(
			'name' => 'weapon',
			'type' => 'raw',
			'value' => $model->weapon !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->weapon)), array('weapon/view', 'id' => GxActiveRecord::extractPkValue($model->weapon, true))) : null,
			),
'position_x',
'position_y',
	),
)); ?>

