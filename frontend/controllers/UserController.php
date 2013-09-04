<?php
class UserController extends CharacterController {

	public function accessRules() {
		return array(
			// not logged in users
			array('allow',
				'users'=>array('*')),
			// logged in users
			array('allow',
				'actions'=>array('Index','characters','connectToWorker'),
				'users' => array('@')),
			// not logged in users can't do anything except above
			array('deny',
				'users'=>array('*')),
		);
	}

	public function actionIndex()
	{
                $this->layout = '//layouts/platform';  //change layoutfile -> platform.php
		$this->render('Index');
                           
	}
        
	public function actionConnectToWorker()
	{

		//Add the sessionID to the params array
		//Yii::app()->session->setSessionID('ulmpmkkmsh1s7q1ricteu5a9q7');
        Yii::app()->session->open();
        //Print the sessionID

		   //$_COOKIE['PHPSESSID'] = 'ulmpmkkmsh1s7q1ricteu5a9q7';
		echo 'sess ID = '. Yii::app()->session->sessionID;
		$params = array('sessionID' => Yii::app()->session->sessionID);
		//Add the message to the MessageTube
		MessageTube::pushToTube($params);
		$this->redirect('http://www.iinet.net.au/');
		//$this->redirect(array('Connect'));
	}

}
?>