<?php

Yii::import('common.models._base.BaseUser');

class User extends BaseUser
{
	public $newPassword;
	public $passwordConfirm;
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function behaviors()
	{
		//Bcrypt behaviour
		Yii::import('common.extensions.behaviors.password.*');
		return array(
			// Password behavior strategy
			"APasswordBehavior" => array(
				"class" => "APasswordBehavior",
				"defaultStrategyName" => "bcrypt",
				"strategies" => array(
						"bcrypt" => array(
							"class" => "ABcryptPasswordStrategy",
							"workFactor" => 12,
							"minLength" => 8
							),
					),
			)
		);
	}

	public function rules()
	{
		//Rules for database columns
		return array(
			array('email', 'email'),
			array('passwordConfirm', 'compare', 'compareAttribute' => 'newPassword', 'message' => Yii::t('validation', "Passwords don't match")),
			array('newPassword', 'length', 'min' => 8),
			array('username', 'length', 'min'=> 5),
			//array('requires_new_password, login_attempts, login_time, create_id, create_time, update_id, update_time', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			array('password, salt, email, validation_key', 'length', 'max'=>255),
			array('password_strategy, firstname, lastname', 'length', 'max'=>50),
			//array('login_ip', 'length', 'max'=>32),
			//array('username, password, salt, password_strategy, requires_new_password, email, login_attempts, login_time, login_ip, validation_key, create_id, create_time, update_id, update_time, firstname, lastname', 'default', 'setOnEmpty' => true, 'value' => null),
			//array('id, username, password, salt, password_strategy, requires_new_password, email, login_attempts, login_time, login_ip, validation_key, create_id, create_time, update_id, update_time, firstname, lastname', 'safe', 'on'=>'search'),
		);

	}

	public function attributeLabels()
	{
		//Labels
		return array(
			'newPassword' => Yii::t('labels', 'Password'),
			'passwordConfirm' => Yii::t('labels', 'Confirm password'),
		);
	}

	public function regenerateValidationKey()
	{
		$this->saveAttributes(array(
			'validation_key' => md5(mt_rand() . mt_rand() . mt_rand()),
		));
	}


}