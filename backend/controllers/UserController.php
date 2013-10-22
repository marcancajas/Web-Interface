<?php

class UserController extends GxController {

public $layout = 'column1';
public $sectionName = 'Users';
public function filters() {
	return array(
			'accessControl',
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array(),
				'users'=>array('*'),
				),
			array('allow',
				'actions'=>array('PasswordReset, ActivationReset'),
				'users'=>array('@'),
				),
			array('allow',
				'actions'=>array('admin','create','update','delete','index','view'),
				'users'=>array('admin'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

	public function actionView($id)
	{
		//This funciton is responsible for showing an individual users details
		//Get the users details from the database
		$model = User::model()->findByPK($id);
		//Render the view
		$this->render('view', array(
			'model' => $model
		));
	}

	public function actionCreate() {
		$model = new User;

		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id)
	{
		//Get the users information from the database
		$model = $this->loadModel($id, 'User');

		//Check to see if there is information to update
		if (isset($_POST['User'])) {
			//If there is infomration to update
			$model->setAttributes($_POST['User']);
			//Try to save the model
			if ($model->saveAttributes($_POST['User'])) {
				//If the information could be saved, notify the user and return to the user index
				user()->setFlash('Success', $model->username.' information was successfully updated');
				$this->redirect(array('/User'));
			}
			//If the information could not be saved, notify the user
			user()->setFlash('Failure', $model->username.' information could not be updated');
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id)
	{
		if (Yii::app()->getRequest()->getIsPostRequest())
		{
			$this->loadModel($id, 'User')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex()
	{
		//This function is responsible for listing all registered users
		//Create a new dataProvider and fill it with user objects
		$dataProvider = new CActiveDataProvider('User');
		//Render the index view
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new User('search');
		$model->unsetAttributes();

		if (isset($_GET['User']))
			$model->setAttributes($_GET['User']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 *
	 *ActivationReset
	 *This function resets the password for the user specified in the id paramater
	 *@param	id - ID of the user to reset password
	 *
	 */
	public function actionPasswordReset($id)
	{
		//Get the user object from the database
		$model = User::model()->findByPk($id);
		//Check whether the object was returned
		if($model)
		{
			//Generate the url which will allow the user to reset their password
			$resetPasswordPath = Yii::getPathOfAlias('fontendBaseUrl')."user/resetPassword";
			$url = app()->createAbsoluteUrl(
					$resetPasswordPath,
						array(
							'u'=>$model->id,
							'tp'=>$model->getPasswordResetCode(),
							)
						);

			//Format the body of the email
			$body = <<<EOT
Hello $model->firstname $model->lastname
<br/>
Please click on the following link to complete the password reset process.</p>
<br/>
$url
<br/>
EOT;

			$email = $model->email;
			$subject = 'JAMEngine - Password Reset';


			//If the user object was returned, try to send a password reset email
			if($this->sendEmail($email, $subject, $body))
			{
				//If the email was sent successfully, display a success alert
				user()->setFlash('success', '<strong>A password reset email has been sent</strong>');
			}
			else
			{
				//THe email could not be sent, display a failure alert
				user()->setFlash('error', '<strong>A password reset email could not be sent. Please try again later</strong>');
			}
		}
		else
		{
			//There was no user object returned. Display a falure alert.
			user()->setFlash('error', '<strong>The user could not be found in the database.</strong>');
		}
		$this->redirect(array('/User'));

	}

	/**
	 *
	 *ActivationReset
	 *The function attempts to resend an activation link to a user
	 *@param	id - Id of the user to resend activation link
	 *
	 */
	public function actionActivationReset($id)
	{
		//Get the user object from the database
		$model = User::model()->findByPk($id);
		//Check if a model object was returned
		if($model)
		{
			//If so, Check if the users status is pending
			if($model->status == User::STATUS_PENDING)
			{
				//If so, send an activation reset email
				//Create an activation key
				$activationKey = substr(sha1($model->username.$model->registrationKey.$model->status), 34);
				//Create the reset url
				$url = app()->createAbsoluteUrl(
				'user/activate',
					array(
						'u'=>$model->id,
						'k'=>$model->registrationKey,
						't'=>$model->creationDate,
						'z'=>$activationKey,
					)
				);
				//Create the email
				$email = $model->email;
				$subject = "JAMEngine - Resending Activation";
				$body = <<<EOT
Hello $model->firstname $model->lastname
<br/>
<p>Thankyou for registering at JAMEngine.
We have noticed that you have not activated your account. If you are still interested in using JAMEngine please click on the link below to activate your account.
Alternatively just disregard this email.</p>
<br/>
$url
<br/>
EOT;
				//Try to send an activation resend email
				if($this->sendEmail($email, $subject, $body))
				{
					//If the email was sent successfully, display a success alert
					user()->setFlash('success', '<strong>An activation reset email has been sent</strong>');
					$this->redirect(array('/User'));
				}
				else
				{
					//The email could not be sent, display a failure alert
					user()->setFlash('error', '<strong>An activation reset email could not be sent. Please try again later</strong>');
					$this->redirect(array('/User'));
				}
			}
			else
			{
				//The users account is already active could not be sent, display a failure alert
				user()->setFlash('error', '<strong>The users account is already active.</strong>');
				$this->redirect(array('/User'));

			}
		}
		else
		{
			//The user could not be found in the database
			user()->setFlash('error', '<strong>The users account could not be found in the database.</strong>');
			$this->redirect(array('/User'));

		}
	}

	/**
	 *
	 *SendEmail
	 *The function attempts to send an email using the parameters specified. It returns a boolean of the result
	 *@param	email - Address of the recipient
	 *@param	subject - Text to put in the subject field
	 *@param	body - Text to put in the body of the email
	 *@return	messageSent - Returns true of message was sent successfully.
	 *
	 */
	protected function sendEmail($email, $subject, $body)
	{
		//This function is responsible for sending an email the user specified in the email parameter
		$message = new YiiMailMessage;
		$message->subject = $subject;
		$message->setBody($body, 'text/html');
		$message->addTo($email);
		$message->from = 'joshgiblett@gmail.com';
		if(Yii::app()->mail->send($message))
		{
			$messageSent = true;
		}
		else
		{
			$messageSent = false;
		}
		return $messageSent;
	}

}