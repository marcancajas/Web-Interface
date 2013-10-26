<?php
/* ORIGINAL AUTHOR: JOSH GIBLETT
 * FRONTEND MODIFICATION : MARC ANCAJAS
 */
?>



<?php
$this->breadcrumbs = array(
	Hero::label(2),
	Yii::t('app', 'Index'),
);
?>

<?php

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Hero::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Hero::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Character::label(2)); ?></h1>




<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>





