<!--Written by Josh Giblett-->
<!--Character Detail View-->
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
	//game dropdown box
	echo $form->dropDownListRow($model, 'game_id', GxHtml::listDataEx(Game::model()->findAllAttributes(null, true)));
	//type dropdown
	echo $form->dropDownListRow($model, 'type_id', GxHtml::listDataEx(Type::model()->findAllAttributes(null, true)));
	//bodyColour dropdown box
	echo $form->dropDownListRow($model, 'body_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)));
	//hairColour dropdown box
	echo $form->dropDownListRow($model, 'hair_colour_id', GxHtml::listDataEx(Colour::model()->findAllAttributes(null, true)));
	//strength dropdown box
	echo $form->dropDownListRow($model, 'strength', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//height dropdown box
	echo $form->dropDownListRow($model, 'height', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//weight dropdown box
	echo $form->dropDownListRow($model, 'weight', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//speed dropdown box
	echo $form->dropDownListRow($model, 'speed', GxHtml::listDataEx(Number::model()->findAllAttributes(null, true)));
	//armor dropdown box
	echo $form->dropDownListRow($model, 'armor_id', GxHtml::listDataEx(Armor::model()->findAllAttributes(null, true)));
	//weapon dropdown box
	echo $form->dropDownListRow($model, 'weapon_id', GxHtml::listDataEx(Weapon::model()->findAllAttributes(null, true)));
	//position_x Textfield
	echo $form->textFieldRow($model,'position_x',array('class'=>'span5', 'maxlength'=>50));
	//position_y Textfield
	echo $form->textFieldRow($model,'position_y',array('class'=>'span5', 'maxlength'=>50));
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