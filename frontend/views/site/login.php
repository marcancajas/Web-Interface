<?php
/**
 * login.php
 *
 * Example page <given as is, not even checked styles>
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/23/12
 * Time: 12:27 AM
 */
$this->pageTitle = 'Login';
$this->breadcrumbs = array(
	'Login',
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" media="screen"/>    
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/user.css" media="screen"/>

</head>

    <body>

     
    <div id="login_container">
    
       <div id="login_logo">
    <img src="<?php echo Yii::app()->getBaseUrl(); ?>/images/jamEngineLogov5.png" alt="JAMengine" />
    </div>
        <div id="form">
             <h2>Login</h2>

<p>Please fill out the following form with your login credentials:</p>


<?php $form = $this->beginWidget('CActiveForm', array(
	'id' => 'login-form',
	'enableAjaxValidation' => false,
	'enableClientValidation' => true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>
	<?php echo $form->label($model, 'username');?>
	<?php echo $form->textField($model, 'username'); ?>
	<?php echo $form->error($model, 'username');?>
	<br/>
	<?php echo $form->label($model, 'password');?>
	<?php echo $form->passwordField($model, 'password'); ?>
	<br/>
	<!--
<?php echo $form->checkBox($model, 'rememberMe'); ?>
	<?php if ($model->requireCaptcha): ?>
		<p>plain... :)) </p>
	<?php endif; ?>
-->


				<?php echo CHtml::submitButton('Login'); ?>

<?php $this->endWidget(); ?>
        </div>
            </div>
    <div class="clear"></div>
       
        
    </body>
