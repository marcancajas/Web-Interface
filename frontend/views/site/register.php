<!--Registration form-->
<h1>Register</h1>

<?php
//Form
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
));
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php
	echo $form->errorSummary($model);
	//Firstname Textfield
	echo $form->textFieldRow($model,'firstname',array('class'=>'span5', 'maxlength'=>50));
	//Lastname Textfield
	echo $form->textFieldRow($model,'lastname',array('class'=>'span5', 'maxlength'=>50));
	//Username Textfield
	echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45));
	//Email Textfield
	echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255));
	//Password Textfield
	echo $form->passwordFieldRow($model,'newPassword',array('class'=>'span5','maxlength'=>50));
	echo $form->passwordFieldRow($model,'passwordConfirm',array('class'=>'span5','maxlength'=>50));
	?>
	<div class="form-actions">
		<?php
		//Submit Button
		$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Register',
		));
		?>
	</div>

<?php $this->endWidget(); ?>
