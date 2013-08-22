<?php

class CharacterController extends GxController {

public function filters() {
	return array(
			//'accessControl',
			);
}

public function accessRules() {
	return array(
			d
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

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Character');


		if (isset($_POST['Character'])) {
			$model->setAttributes($_POST['Character']);

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
			$this->loadModel($id, 'Character')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Character');
		print_r("Made it character controller");
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