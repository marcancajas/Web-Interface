<!--Written by Josh Giblett-->
<!--Hero Type Update View-->
<h1><?php echo 'Update' . ' ' .$model->name?></h1>

<!--Active Form Widget-->
<?php
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
));
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
	<?php
	echo $form->errorSummary($model);
	//name Textfield
	echo $form->textFieldRow($model,'name',array('class'=>'span5', 'maxlength'=>50));
	//description Textfield
	echo $form->textFieldRow($model,'description',array('class'=>'span5', 'maxlength'=>50));
	?>
	<div class="form-actions">
		<?php
		//Submit Button
		$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Update',
		));
		?>
	</div>

<?php $this->endWidget(); ?>