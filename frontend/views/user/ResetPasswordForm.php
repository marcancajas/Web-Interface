<h1>Reset Password</h1>

<p>Please enter a new password</p>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	//'action'=>$this->createURL('user/ResetPassword'),
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php
	echo $form->errorSummary($model);
	echo $form->hiddenField($model, 'id');
	echo $form->passwordFieldRow($model,'newPassword',array('class'=>'span5','maxlength'=>50));
	echo $form->passwordFieldRow($model,'passwordConfirm',array('class'=>'span5','maxlength'=>50));
	?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Reset',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
