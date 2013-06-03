<?php

Yii::import('common.models._base.BaseUser');

class User extends BaseUser
{
	//Constans for user status
	const STATUS_INACTIVE=0;
	const STATUS_ACTIVE=1;
	const STATUS_BANNED=-1;
	const STATUS_PENDING=-2;
	const PASSWORD_LEN_MIN=6;

	//Variables which will be used for validating the password
	public $newPassword;
	public $passwordConfirm;
	public static function model($className=__CLASS__)
	{
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
			//Check the password and username are not the same
			array('newPassword', 'compare','operator' => '!=', 'compareAttribute' => 'username', 'message' => Yii::t('validation', "Password must not be the same as Username")),
			//Check the email address is not already registered
			array('email', 'unique', 'message' => Yii::t('user',"Email address already in use.")),
			//Check the username is not already registered
			array('username', 'unique', 'message' => Yii::t('user',"Username already in use.")),
			//Check the passwords entered match
			array('passwordConfirm', 'compare', 'compareAttribute' => 'newPassword', 'message' => Yii::t('validation', "Passwords don't match")),
			//Set the required fields(firstname, lastname, password, cofirmPassword, country, birthdate, gender, username, email)
			array('firstname, lastname, newPassword, passwordConfirm, username, email','required'),
			//Set the minimum password length
			array('newPassword', 'length', 'min' => 8),
			//Check the password contains 2 numbers and 1 symbol($_*,!;)
			array('newPassword', 'match', 'pattern' => '/^[a-zA-Z$_*,!;]*[_$*,!;]{1}[a-zA-Z$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*|[a-zA-Z$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*[_$*,!;]{1}[a-zA-Z$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*|[a-zA-Z$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*[0-9]{1}[a-zA-Z0-9$_*,!;]*[_$*,!;]{1}[a-zA-Z$_*,!;]*$/u','message' => Yii::t('user',"Password must be minimum 8 digits long, contain 1 symbol(_$*,!;) and 2 numbers")),
			//Set the minimum username length
			array('username', 'length', 'min'=> 6),
			//Check the username contains 1 number
			array('username', 'match', 'pattern' => '/^[a-zA-Z0-9]*[0-9]{1}[a-zA-Z0-9]*$/u','message' => Yii::t('user',"Username must be minimum 6 digits long, contain letters and 1 number")),
			//Checks the birthdate is in the correct format
			array('birthdate', 'type', 'type' => 'date', 'message' => Yii::t('user',"{attribute} is not valid. Dates must be in the form dd-mm-yyyy"), 'dateFormat' => 'dd-mm-yyyy'),
			//Set the searchable fields
			//array('id, username, email, login_attempts, login_time, login_ip, create_id, create_time, update_id, update_time, firstname, lastname'				, 'gender', 'superuser', 'status', 'birthdate', 'safe', 'on'=>'search'),
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