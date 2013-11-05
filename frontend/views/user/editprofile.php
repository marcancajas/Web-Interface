<!--Written by Josh Giblett-->
<!--Frontend Modification by Marc Ancajas -->
<!--User Update View-->

<?php
$this->pageTitle = Yii::app()->name . ' - Edit profile';
?> 

<!--Page Title-->
<h1><?php echo 'Edit profile:' . ' ' .$model->username?></h1>

<div class="form well">
<?php
	//Form Widget
	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'user-form',
		'type'=>'horizontal',
		'enableAjaxValidation'=>true,
	));
?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php
	//Error label
	echo $form->errorSummary($model);
	//Firstname Textfield
	echo $form->textFieldRow($model,'firstname',array('class'=>'span5', 'maxlength'=>50));
	//Lastname Textfield
	echo $form->textFieldRow($model,'lastname',array('class'=>'span5', 'maxlength'=>50));
	//Country dropdown box
	echo $form->dropDownListRow($model, 'country', GxHtml::listDataEx(country::model()->findAllAttributes(null, true)));
	//Gender dropdown box
	echo $form->dropDownListRow($model, 'gender', array('M'=>'Male', 'F'=>'Female'));
	//Birthdate datePicker
	// echo $form->datepickerRow($model, 'birthdate', array('prepend'=>'<i class="icon-calendar"></i>','options'=>array('format' => 'dd-mm-yyyy')));
	//Username Textfield
	echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>45));
	//Email Textfield
	echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255));	
	
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
        </div>
       

