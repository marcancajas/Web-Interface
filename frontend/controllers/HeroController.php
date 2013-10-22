<?php

class HeroController extends GxController {

public $layout='//layouts/platform'; // Change Character Controller's Default Layout to platform.php

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

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Hero');


		if (isset($_POST['Hero'])) {
			$model->setAttributes($_POST['Hero']);

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
			$this->loadModel($id, 'Hero')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {

                $this->layout = '//layouts/platform';
		$dataProvider = new CActiveDataProvider('Hero');
		/*print_r("JOSH: Made it character controller \n MARC: -___- THANKS JOSH"); */
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

