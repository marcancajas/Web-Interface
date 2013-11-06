<?php
class UserController extends GxController {

    public $layout = '/layouts/platform'; //Sets the layout file of this controller

	public function accessRules() {
		return array(
			// not logged in users
			array('allow',
				'actions'=>array('ResetPassword'),
				'users'=>array('*')),
			// logged in users
			array('allow',
				'actions'=>array('Index','connectToWorker','profile'),
				'users' => array('@')),
			// not logged in users can't do anything except above
			array('deny',
				'users'=>array('*')),
		);
	}

	public function actionIndex()
	{
                $this->layout = '/layouts/platform';  //change layoutfile -> platform.php
		$this->render('Index');

	}

	/**
	 *
	 *ResetPassword
	 *The function attempts to reset the users password
	 *
	 */
	public function actionResetPassword()
	{
		//Create a new resetPassword form
		$model = new User('resetPassword');
		//Check if there is a resetPassword form being returned
		if(isset($_POST['User']))
		{
			//If so, get the user object from the database
			$userModel = User::model()->findByPk($_POST['User']['id']);
			//Set the new password in the database
			$userModel->newPassword=$_POST['User']['newPassword'];
			$userModel->passwordConfirm=$_POST['User']['newPassword'];
			//Reset the users login attempts
			$userModel->login_attempts=0;
			//Try to save the updated password in the database
			if($userModel->saveAttributes(array('login_attempts', 'newPassword','passwordConfirm')))
			{
				//If so, return to the homepage and notify the user by sending a success message
				user()->setFlash('success', '<strong>Reset Successful</strong> - Your password has been reset');
				$this->redirect(array('site/Index'));
			}
			else
			{
				//Else return to the homepage and notify the user by sending a failure message
				user()->setFlash('error', '<strong>Your password could not be reset. Please contact the site administrator model save</strong>');
				$this->redirect(array('site'));
			}

		}

		//Check if a user exists in the database for the given id
		if($user = User::model()->findByPk($_REQUEST['u']))
		{
			//If so, Check if the stored reset code is the same as the reset code input
			if($_REQUEST['tp'] == $user->getPasswordResetCode())
			{
				//If so, go to the resetPasswordForm
				$this->render('ResetPasswordForm',array('model'=>$model));
			}
			else
			{
				//Else return to the homepage and notify the user by sending a failure message
				user()->setFlash('error', '<strong>Your password could not be reset. Please contact the site administrator tp not correct</strong>');
				$this->redirect(array('site'));
			}
		}
		else
		{
			//Else return to the homepage and notify the user by sending a failure message
			user()->setFlash('error', '<strong>Your password could not be reset. Please contact the site administrator user not exist</strong>');
			$this->redirect(array('site'));
		}
	}

        public function actionProfile() {

            $userid = Yii::app()->user->id;
            $model = $this->loadModel($userid, 'User');

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

            $this->render('editprofile',array('model'=>$model));
	}
}
?>