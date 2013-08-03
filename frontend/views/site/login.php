<?php
/**
 * login.php
 *
 * Example page <given as is, not even checked styles>
 * @author: Front-end: Marc Ancajas, Back-end: Josh Giblett 
 * Date: 7/23/12
 * Time: 12:27 AM
 */

$this->pageTitle = 'Login';
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" media="screen"/>
   
    <div id="login_container">
    
       <div id="login_logo">
    <img src="<?php echo Yii::app()->getBaseUrl(); ?>/images/jamEngineLogov5.png" alt="JAMengine" />
       </div>
        
       <div id="login_form">
             <h3>Login</h3>

<p>Please fill out the following form with your login credentials:</p>


	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
        'inlineErrors'=>'false',
	'htmlOptions'=>array('class'=>'well','background-color'=>'transparent'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->textFieldRow($model, 'username');?>
	<?php echo $form->passwordFieldRow($model, 'password');?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit','type'=>'warning','label'=>'Submit', 'icon'=>'ok'));?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset','label'=>'Reset'));?>
	</div>

	<?php $this->endWidget(); ?>

        </div>
                      
    </div>
    