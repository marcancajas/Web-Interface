<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'user-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model, 'username', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'username'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model, 'password', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model, 'salt', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'salt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'password_strategy'); ?>
		<?php echo $form->textField($model, 'password_strategy', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'password_strategy'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'requires_new_password'); ?>
		<?php echo $form->checkBox($model, 'requires_new_password'); ?>
		<?php echo $form->error($model,'requires_new_password'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login_attempts'); ?>
		<?php echo $form->textField($model, 'login_attempts'); ?>
		<?php echo $form->error($model,'login_attempts'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login_time'); ?>
		<?php echo $form->textField($model, 'login_time'); ?>
		<?php echo $form->error($model,'login_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login_ip'); ?>
		<?php echo $form->textField($model, 'login_ip', array('maxlength' => 32)); ?>
		<?php echo $form->error($model,'login_ip'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'validation_key'); ?>
		<?php echo $form->textField($model, 'validation_key', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'validation_key'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_id'); ?>
		<?php echo $form->textField($model, 'create_id'); ?>
		<?php echo $form->error($model,'create_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model, 'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_id'); ?>
		<?php echo $form->textField($model, 'update_id'); ?>
		<?php echo $form->error($model,'update_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model, 'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model, 'firstname', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'firstname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model, 'lastname', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'lastname'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'registrationKey'); ?>
		<?php echo $form->textField($model, 'registrationKey', array('maxlength' => 60)); ?>
		<?php echo $form->error($model,'registrationKey'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->dropDownList($model, 'country', GxHtml::listDataEx(Country::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'country'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model, 'gender', array('maxlength' => 1)); ?>
		<?php echo $form->error($model,'gender'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php echo $form->textField($model, 'birthdate', array('maxlength' => 11)); ?>
		<?php echo $form->error($model,'birthdate'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'superuser'); ?>
		<?php echo $form->textField($model, 'superuser'); ?>
		<?php echo $form->error($model,'superuser'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'creationDate'); ?>
		<?php echo $form->textField($model, 'creationDate', array('maxlength' => 11)); ?>
		<?php echo $form->error($model,'creationDate'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->