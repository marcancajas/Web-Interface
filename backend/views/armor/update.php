<!--Written by Josh Giblett-->

<!--Armor Update View-->
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
	//class Textfield
	echo $form->textFieldRow($model,'class',array('class'=>'span5', 'maxlength'=>50));
	//name Textfield
	echo $form->textFieldRow($model,'name',array('class'=>'span5', 'maxlength'=>50));
	//description Textfield
	echo $form->textFieldRow($model,'description',array('class'=>'span5', 'maxlength'=>50));
	//buy dropdown box
	echo $form->dropDownListRow($model, 'buy', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//sell dropdown box
	echo $form->dropDownListRow($model, 'sell', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//weight dropdown box
	echo $form->dropDownListRow($model, 'weight', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//defence dropdown box
	echo $form->dropDownListRow($model, 'defence', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
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