<?php

class GameController extends GxController {

public $layout = 'column1';
public $sectionName = 'Game';
public function filters() {
	return array(
			'accessControl',
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index', 'view'),
				'users'=>array('@'),
				),
			array('allow',
				'actions'=>array('minicreate', 'create', 'update', 'admin', 'delete'),
				'users'=>array('admin'),
				),
			array('deny',
				'users'=>array('*'),
				),
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Game'),
		));
	}

	public function actionCreate() {
		$model = new Game;


		if (isset($_POST['Game'])) {
			$model->setAttributes($_POST['Game']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Game');


		if (isset($_POST['Game'])) {
			$model->setAttributes($_POST['Game']);

			if ($model->save()) {
				$this->redirect(array('/Game'));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Game')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Game');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Game('search');
		$model->unsetAttributes();

		if (isset($_GET['Game']))
			$model->setAttributes($_GET['Game']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}