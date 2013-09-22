<?php
$this->pageTitle=Yii::app()->name . ' - Login';
?>

<!--PAGE-->
<div style="margin-top:50px; margin-bottom:50px;"align=center>
	<a href="<?php echo Yii::app()->request->baseUrl; ?>/Site/Index"><img src="<?php echo Yii::app()->getBaseUrl(); ?>/images/jamEngineLogov5.png"alt="JAMEngine Logo" width="256"></a>
	<!--FORM-->
	<div class="form"style="width:410px;"align=left>
		<?php
			$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>false,
				'htmlOptions'=>array('class'=>'well'),
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			));
		?>

		<p class="note">Fields with <span class="required">*</span> are required.</p>
		<?php echo $form->textFieldRow($model, 'username', array('class'=>'span4'));?>
		<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span4'));?>
		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'primary','label'=>'Submit', 'icon'=>'ok'));?>
		</div>

		<?php $this->endWidget(); ?>
	</div><!--END FORM-->
</div>
<!--END PAGE-->