<?php
class UserController extends Controller {

	public function accessRules() {
		return array(
			// not logged in users
			array('allow',
				'users'=>array('*')),
			// logged in users
			array('allow',
				'actions'=>array('index'),
				'users' => array('@')),
			// not logged in users can't do anything except above
			array('deny',
				'users'=>array('*')),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

}
?>