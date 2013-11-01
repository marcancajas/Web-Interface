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
	//bodyColour dropdown box
	echo $form->dropDownListRow($model, 'body_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)));
	//hairColour dropdown box
	echo $form->dropDownListRow($model, 'hair_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)));
	echo $form->radioButtonListRow($model,'heroId',GxHtml::listDataEx(Hero::model()->findAllAttributes(null, true)));
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

<?php $this->endWidget();?>