<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'weapon-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php echo $form->textField($model, 'class', array('maxlength' => 30)); ?>
		<?php echo $form->error($model,'class'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'buy'); ?>
		<?php echo $form->textField($model, 'buy'); ?>
		<?php echo $form->error($model,'buy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sell'); ?>
		<?php echo $form->textField($model, 'sell'); ?>
		<?php echo $form->error($model,'sell'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'damage'); ?>
		<?php echo $form->textField($model, 'damage'); ?>
		<?php echo $form->error($model,'damage'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model, 'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('characters')); ?></label>
		<?php echo $form->checkBoxList($model, 'characters', GxHtml::encodeEx(GxHtml::listDataEx(Character::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->