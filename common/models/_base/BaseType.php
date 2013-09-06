<?php

/**
 * This is the model base class for the table "Type".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Type".
 *
 * Columns in table "Type" available as properties of the model,
 * followed by relations of table "Type" available as properties of the model.
 *
 * @property string $id
 * @property string $name
 * @property string $description
 *
 * @property Character[] $characters
 */
abstract class BaseType extends gxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getDbConnection()
    {
        return Yii::app()->dbGame;
    }

	public function tableName() {
		return 'Type';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Type|Types', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'length', 'max'=>50),
			array('description', 'length', 'max'=>100),
			array('name, description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'characters' => array(self::HAS_MANY, 'Character', 'type_id'),
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
			'description' => Yii::t('app', 'Description'),
			'characters' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}