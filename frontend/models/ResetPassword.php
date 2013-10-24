<?php
class ResetPassword extends CFormModel
{
	public $email;
	public $newPassword;
	public $passwordConfirm;
	public $id;


	/**
	 * Model rules
	 * @return array
	 */
	public function rules()
	{
		return array(
			array('passwordConfirm', 'compare', 'compareAttribute' => 'newPassword', 'message' => Yii::t('validation', "Passwords don't match")),
			array('newPassword', 'length', 'min'=>user::PASSWORD_LEN_MIN),
			array('newPassword', 'compareUsernamePassword','message' => Yii::t('validation', "Password must not be the same as Username")),
		);
	}

	/**
	 * Returns attribute labels
	 * @return array
	 */
	public function attributeLabels()
	{
		return array(
				'newPassword' => Yii::t('app','Password'),
				'id' => Yii::t('app','id'),
				'passwordConfirm' => Yii::t('app','Re-type Password'),
				'passwordStrategy' => Yii::t('app','Encryption Method'),
			);
	}

	private function compareUsernamePassword()
	{
		$user = findByPK($this->id);
		return ($user->username);
	}
}