<?php
/**
 * SiteController.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/23/12
 * Time: 12:25 AM
 */
class SiteController extends Controller {

	public function accessRules() {
		return array(
			// not logged in users should be able to login and view captcha images as well as errors
			array('allow', 'actions' => array('index', 'captcha', 'login','contact', 'error','register','activate')),
			// logged in users can do whatever they want to
			array('allow', 'users' => array('@')),
			// not logged in users can't do anything except above
			array('deny'),
		);
	}

	/**
	 * Declares class-based actions.
	 * @return array
	 */
	public function actions() {
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
			),
		);
	}

	/* open on startup */
	public function actionIndex() {
		$this->render('index');
	}
        
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;
                $this->layout = '//layouts/connector';
		/*
			// if it is ajax validation request
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
*/

		// collect user input data
		if (isset($_POST['LoginForm']))
		{
			$model->attributes = $_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if ($model->validate(array('username', 'password')) && $model->login())
			{
				//echo user()->returnUrl;
				$this->redirect(array('/user/index'));
			}
		}
		// display the login form
		$this->render('login', array('model' => $model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionRegister()
	{
		//This action is responsible for handling user registration
		//Create new user model
		$model=new User();
		$this->performAjaxValidation($model);
		if(isset($_POST['User']))
		{
			//dd($_POST['User']);
			//If a user object is passed in, set the attributes in the user database
			$model->setAttributes($_POST['User']);			//print_r($_POST['User']);

			$model->password = $_POST['User']['newPassword'];
			$model->creationDate = time();
			$model->birthdate = strtotime($_POST['User']['birthdate']);
			$model->status = User::STATUS_PENDING;
			$model->registrationKey = sha1(mt_rand(10000, 99999).time().$model->email);

			if($model->save())
			{
				$link = app()->createAbsoluteUrl('site/activate',array(
																	'u'=>$model->id,
																	'k'=>$model->registrationKey,
																	't'=>$model->creationDate,
																)
								);

				$message = 'Thankyou for registering on JAMEngine! Please click on the link below to complete the activation process '.$link;
				$this->sendEmail($model->email, $message);

				$this->redirect(array('/site/Index'));
			}
		}
		//Render the registration form with the empty user object
		$this->render('register',array('model'=>$model
									)
					);
	}
	public function actionActivate()
	{
		$info=array();
		//Get variables(creationDate, registrationKey, userId) passed into the function
		$creationDate = $_REQUEST['t'];
		$registrationKey = $_REQUEST['k'];
		$userId = $_REQUEST['u'];
		$expireDate = $creationDate + 86400; // expires after 24hours
		//If the variables supplied to the function are valid get the id of the user they correspond to
		$user = db()->createCommand()
			->select('id')
			->from('user')
			->where('id=:id and registrationKey=:registrationKey and status=-2')
			->bindParam(":registrationKey",$registrationKey,PDO::PARAM_STR)
			->bindParam(":id",$userId,PDO::PARAM_INT)
			//->bindParam(":status",'-2',PDO::PARAM_INT)
			->queryRow();
		if($user)
		{
			//If the registrationKey and userId were valid and info was returned from the previous command
			if(time() <= $expireDate)
			{
				//If the registration period(24 Hours) has not expired, set the user status to active
				db()->createCommand()
					->update('User',array(
					'status'=>1),
					//'registrationKey'=>null),
					'id=:id', array(':id'=>$userId));
					//->bindParam(":id",$userId,PDO::PARAM_INT);
					//->bindParam(':status',user::STATUS_ACTIVE,PDO::PARAM_INT);
					user()->setFlash('success', '<strong>Registration Successful</strong> - You can now login');
					$this->render('registerSuccess');
					//$this->redirect(array('/site/Index'));
			}
			else
			{
				//The registration period(24 Hours) has expired, ask the user if they want a new registration email sent
				$this->render('registerFailure');
			}
		}
		else
		{
			//The information supplied was invalid
			$this->render('registerFailure');
		}
	}

	protected function sendEmail($email, $body)
	{
		//This function is responsible for sending emails to users.
		$message = new YiiMailMessage;
        $message->subject    = 'Email Registration';
        $message->setBody($body, 'text/html');
        $message->addTo($email);
        $message->from = 'joshgiblett@gmail.com';
        Yii::app()->mail->send($message);
	}

	protected function performAjaxValidation($model, $form = null) {
		if (Yii::app()->getRequest()->getIsAjaxRequest() && (($form === null) || ($_POST['ajax'] == $form))) {
			echo GxActiveForm::validate($model);
			Yii::app()->end();
		}
	}

        
        public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm']))
		{
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate())
			{
				/** example code */
//				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
//				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
//				$headers="From: $name <{$model->email}>\r\n".
//					"Reply-To: {$model->email}\r\n".
//					"MIME-Version: 1.0\r\n".
//					"Content-type: text/plain; charset=UTF-8";
//
//				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
//				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
//				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));

	}

}