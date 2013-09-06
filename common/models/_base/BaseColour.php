<?php

/**
 * This is the model base class for the table "Colour".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Colour".
 *
 * Columns in table "Colour" available as properties of the model,
 * followed by relations of table "Colour" available as properties of the model.
 *
 * @property string $id
 * @property string $name
 *
 * @property Character[] $characters
 * @property Character[] $characters1
 */
abstract class BaseColour extends gxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getDbConnection()
    {
        return Yii::app()->dbGame;
    }

	public function tableName() {
		return 'Colour';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Colour|Colours', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'length', 'max'=>50),
			array('name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'characters' => array(self::HAS_MANY, 'Character', 'body_colour_id'),
			'characters1' => array(self::HAS_MANY, 'Character', 'hair_colour_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'characters' => null,
			'characters1' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}