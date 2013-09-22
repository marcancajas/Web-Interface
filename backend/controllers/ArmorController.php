<?php

class ArmorController extends GxController {

public $layout = 'column1';

public function filters() {
	return array(
			//'accessControl',
			);
}

public function accessRules() {
	return array(
			/*
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
*/
);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Armor'),
		));
	}

	public function actionCreate() {
		$model = new Armor;


		if (isset($_POST['Armor'])) {
			$model->setAttributes($_POST['Armor']);

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
		$model = $this->loadModel($id, 'Armor');


		if (isset($_POST['Armor'])) {
			$model->setAttributes($_POST['Armor']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Armor')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Armor');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Armor('search');
		$model->unsetAttributes();

		if (isset($_GET['Armor']))
			$model->setAttributes($_GET['Armor']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}