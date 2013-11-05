<?php
$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
	'Contact',
);
?> 

<div class="container" style='margin-top:100px;'>
<h1>Contact Us</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
	Let us know what you think
</p>

<div class="form">

	<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id' => 'contact-form',
	'enableClientValidation' => true,
	'htmlOptions' => array('class' => 'well'),
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
        <iframe style="float:right;" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Curtin+University,+Bentley,+Western+Australia,+Australia&amp;daddr=&amp;hl=en&amp;geocode=&amp;aq=0&amp;oq=Cutin&amp;sll=-32.014517,115.921941&amp;sspn=0.045413,0.093513&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=-32.004,115.893574&amp;spn=0.051095,0.072956&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Curtin+University,+Bentley,+Western+Australia,+Australia&amp;daddr=&amp;hl=en&amp;geocode=&amp;aq=0&amp;oq=Cutin&amp;sll=-32.014517,115.921941&amp;sspn=0.045413,0.093513&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=-32.004,115.893574&amp;spn=0.051095,0.072956&amp;z=13" style="color:#0000FF;text-align:left"></a></small>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model, 'name'); ?>
	<?php echo $form->textFieldRow($model, 'email'); ?>
	<?php echo $form->textFieldRow($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
	<?php echo $form->textAreaRow($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
	<div style="clear:both"></div>
	<?php if (CCaptcha::checkRequirements()): ?>
	<?php $this->widget('CCaptcha'); ?>
	<?php echo $form->textFieldRow($model, 'verifyCode'); ?>
	<p class="help-block">Please, enter the letters as they are shown in the image above. Letters are not
		case-sensitive</p>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'warning', 'label' => 'Submit', 'icon' => 'ok'));?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'reset', 'label' => 'Reset'));?>
	</div>
	<?php $this->endWidget(); ?>

</div><!-- form -->
<?php  endif; ?>

</div>