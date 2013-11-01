<?php
class ModifiedHeroController extends GxController
{

	public $layout='/layouts/platform'; // Change Character Controller's Default Layout to platform.php

	public function filters() {
		return array(
				//'accessControl',
				);
		}

	public function accessRules() {
		return array(
			);
	}

	public function actionView($id)
	{
		//Render the Modified hero detail view
		$this->render('view', array(
			'model' => $this->loadModel($id, 'ModifiedHero'),
		));
	}

	public function actionCreate()
	{
		//Create a Modified hero object
		$model = new ModifiedHero;

		//Check if the call was for saving a newly created attribute
		if (isset($_POST['ModifiedHero']))
		{
			//If so, Set the attributes for the character
			$hero = Hero::model()->findByPk($_POST['ModifiedHero']['heroId']);
			$model->name = $_POST['ModifiedHero']['name'];
			$model->user_id = Yii::app()->user->id;
			$model->body_colour_id = $_POST['ModifiedHero']['body_colour_id'];
			$model->hair_colour_id = $_POST['ModifiedHero']['hair_colour_id'];
			$model->type_id = $hero->type_id;
			$model->game_id = $hero->game_id;
			$model->height = $hero->height;
			$model->weight = $hero->weight;
			$model->strength = $hero->strength;
			$model->speed = $hero->speed;
			$model->health = $hero->health;
			$model->armor_health = $hero->armor_health;
			$model->armor_id = $hero->armor_id;
			$model->weapon_id = $hero->weapon_id;
			$model->position_x = $hero->position_x;
			$model->position_y = $hero->position_y;
			//Try to save the new character
			if ($model->save())
			{
				//If so, return to the hero index and notify the user by sending a success message
				user()->setFlash('success', '<strong>Hero created successfully</strong>');
				$this->redirect(array('ModifiedHero/Index'));
			}
			else
			{
				//Else, return to the hero index and notify the user by sending a failure message
				user()->setFlash('error', '<strong>Hero was not created</strong> Please try again');
				$this->redirect(array('ModifiedHero/Index'));
			}
		}
		else
		{
			//Else, Load the create hero view
			$hero = Hero::model()->find();
			$heroDataProvider=new CActiveDataProvider($hero);
			$this->render('create', array( 'model' => $model, 'heroDataProvider' => $heroDataProvider));
		}
	}

	public function actionIndex()
	{
		//Render the ModifiedHero index view
		$dataProvider = new CActiveDataProvider('ModifiedHero', array('criteria'=>array('condition'=>'user_id = '.Yii::app()->user->id)));

		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionDelete($id)
	{
		//This method is responsible for removing a modifiedHero from the database
		//Try to delete the hero
		if(ModifiedHero::model()->deleteByPk($id, 'userid'== ':uid', array(':uid'=>Yii::app()->user->id)))
		{
			//If successful, Notify the user with a success message
			user()->setFlash('success', '<strong>Hero successfully removed</strong>');
			$this->redirect(array('ModifiedHero/Index'));
		}
		else
		{
			//Else, Notify the user with a failure message
			user()->setFlash('error', '<strong>Hero was not be removed</strong>');
			$this->redirect(array('ModifiedHero/Index'));
		}
	}

	public function actionConnectToGame($id)
	{
		//Redirect the user to the game
		$this->redirect('/Game',array('id'=>$id));
	}
}