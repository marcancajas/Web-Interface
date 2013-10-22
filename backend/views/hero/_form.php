<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'hero-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->dropDownList($model, 'type_id', GxHtml::listDataEx(Type::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'type_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'game_id'); ?>
		<?php echo $form->dropDownList($model, 'game_id', GxHtml::listDataEx(Game::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'game_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'body_colour_id'); ?>
		<?php echo $form->dropDownList($model, 'body_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'body_colour_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'hair_colour_id'); ?>
		<?php echo $form->dropDownList($model, 'hair_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'hair_colour_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'strength'); ?>
		<?php echo $form->textField($model, 'strength'); ?>
		<?php echo $form->error($model,'strength'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model, 'height'); ?>
		<?php echo $form->error($model,'height'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model, 'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'speed'); ?>
		<?php echo $form->textField($model, 'speed'); ?>
		<?php echo $form->error($model,'speed'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'health'); ?>
		<?php echo $form->textField($model, 'health'); ?>
		<?php echo $form->error($model,'health'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'armor_health'); ?>
		<?php echo $form->textField($model, 'armor_health'); ?>
		<?php echo $form->error($model,'armor_health'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'armor_id'); ?>
		<?php echo $form->dropDownList($model, 'armor_id', GxHtml::listDataEx(Armor::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'armor_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'weapon_id'); ?>
		<?php echo $form->dropDownList($model, 'weapon_id', GxHtml::listDataEx(Weapon::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'weapon_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'position_x'); ?>
		<?php echo $form->textField($model, 'position_x'); ?>
		<?php echo $form->error($model,'position_x'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'position_y'); ?>
		<?php echo $form->textField($model, 'position_y'); ?>
		<?php echo $form->error($model,'position_y'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->