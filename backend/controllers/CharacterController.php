<?php

class CharacterController extends GxController {

public $layout = 'column1';
public $sectionName = 'Characters';

public function filters() {
	return array(
			//'accessControl',
			);
}

public function accessRules() {
	return array(
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Character'),
		));
	}

	public function actionCreate() {
		$model = new Character;


		if (isset($_POST['Character'])) {
			$model->setAttributes($_POST['Character']);

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
		//This method is responsible for updating the infomration for a character.
		$model = $this->loadModel($id, 'Character');

		if (isset($_POST['Character'])) {
			$model->setAttributes($_POST['Character']);

			if ($model->save()) {
				$this->redirect(array('/Character'));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id)
	{
		//This method is responsible for removing a character from the database
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Character')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Character');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Character('search');
		$model->unsetAttributes();

		if (isset($_GET['Character']))
			$model->setAttributes($_GET['Character']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}