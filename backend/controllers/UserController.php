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
				'actions'=>array(),
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

}