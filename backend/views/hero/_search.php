<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type_id'); ?>
		<?php echo $form->dropDownList($model, 'type_id', GxHtml::listDataEx(Type::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'game_id'); ?>
		<?php echo $form->dropDownList($model, 'game_id', GxHtml::listDataEx(Game::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'body_colour_id'); ?>
		<?php echo $form->dropDownList($model, 'body_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'hair_colour_id'); ?>
		<?php echo $form->dropDownList($model, 'hair_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'strength'); ?>
		<?php echo $form->textField($model, 'strength'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'height'); ?>
		<?php echo $form->textField($model, 'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'weight'); ?>
		<?php echo $form->textField($model, 'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'speed'); ?>
		<?php echo $form->textField($model, 'speed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'health'); ?>
		<?php echo $form->textField($model, 'health'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'armor_health'); ?>
		<?php echo $form->textField($model, 'armor_health'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'armor_id'); ?>
		<?php echo $form->dropDownList($model, 'armor_id', GxHtml::listDataEx(Armor::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'weapon_id'); ?>
		<?php echo $form->dropDownList($model, 'weapon_id', GxHtml::listDataEx(Weapon::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'position_x'); ?>
		<?php echo $form->textField($model, 'position_x'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'position_y'); ?>
		<?php echo $form->textField($model, 'position_y'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
