<?php

class HeroController extends GxController {

public $layout = 'column1';
public $sectionName = 'Hero';

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
			'model' => $this->loadModel($id, 'Hero'),
		));
	}

	public function actionCreate() {
		$model = new Hero;


		if (isset($_POST['Hero'])) {
			$model->setAttributes($_POST['Hero']);

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
		//This method is responsible for updating the infomration for a hero.
		$model = $this->loadModel($id, 'Hero');

		if (isset($_POST['Hero'])) {
			$model->setAttributes($_POST['hero']);

			if ($model->save()) {
				$this->redirect(array('/Hero'));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id)
	{
		//This method is responsible for removing a hero from the database
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Hero')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Hero');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Hero('search');
		$model->unsetAttributes();

		if (isset($_GET['Hero']))
			$model->setAttributes($_GET['Hero']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}