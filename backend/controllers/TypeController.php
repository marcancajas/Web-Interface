<?php

class TypeController extends GxController {

public $layout = 'column1';
public $sectionName = 'Hero Types';
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
			'model' => $this->loadModel($id, 'Type'),
		));
	}

	public function actionCreate() {
		$model = new Type;


		if (isset($_POST['Type'])) {
			$model->setAttributes($_POST['Type']);

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
		$model = $this->loadModel($id, 'Type');


		if (isset($_POST['Type'])) {
			$model->setAttributes($_POST['Type']);

			if ($model->save()) {
				$this->redirect(array('/Type'));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Type')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Type');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Type('search');
		$model->unsetAttributes();

		if (isset($_GET['Type']))
			$model->setAttributes($_GET['Type']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}