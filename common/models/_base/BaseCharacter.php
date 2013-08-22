<?php

/**
 * This is the model base class for the table "Character".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Character".
 *
 * Columns in table "Character" available as properties of the model,
 * followed by relations of table "Character" available as properties of the model.
 *
 * @property string $id
 * @property string $name
 * @property integer $type_id
 * @property integer $game_id
 * @property integer $body_colour_id
 * @property integer $hair_colour_id
 * @property integer $strength
 * @property double $height
 * @property integer $weight
 * @property integer $speed
 * @property integer $health
 * @property integer $armor_health
 * @property integer $armor_id
 * @property integer $weapon_id
 * @property double $position_x
 * @property double $position_y
 *
 * @property Type $type
 * @property Game $game
 * @property Colour $bodyColour
 * @property Colour $hairColour
 * @property Armor $armor
 * @property Weapon $weapon
 */
abstract class BaseCharacter extends JAMGameActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function getDbConnection()
    {
        return self::getGameDbConnection();
    }

	public function tableName() {
		return 'Character';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Character|Characters', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('type_id, game_id, body_colour_id, hair_colour_id, strength, weight, speed, health, armor_health, armor_id, weapon_id', 'numerical', 'integerOnly'=>true),
			array('height, position_x, position_y', 'numerical'),
			array('name', 'length', 'max'=>30),
			array('name, type_id, game_id, body_colour_id, hair_colour_id, strength, height, weight, speed, health, armor_health, armor_id, weapon_id, position_x, position_y', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, type_id, game_id, body_colour_id, hair_colour_id, strength, height, weight, speed, health, armor_health, armor_id, weapon_id, position_x, position_y', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
			'game' => array(self::BELONGS_TO, 'Game', 'game_id'),
			'bodyColour' => array(self::BELONGS_TO, 'Colour', 'body_colour_id'),
			'hairColour' => array(self::BELONGS_TO, 'Colour', 'hair_colour_id'),
			'armor' => array(self::BELONGS_TO, 'Armor', 'armor_id'),
			'weapon' => array(self::BELONGS_TO, 'Weapon', 'weapon_id'),
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
			'type_id' => null,
			'game_id' => null,
			'body_colour_id' => null,
			'hair_colour_id' => null,
			'strength' => Yii::t('app', 'Strength'),
			'height' => Yii::t('app', 'Height'),
			'weight' => Yii::t('app', 'Weight'),
			'speed' => Yii::t('app', 'Speed'),
			'health' => Yii::t('app', 'Health'),
			'armor_health' => Yii::t('app', 'Armor Health'),
			'armor_id' => null,
			'weapon_id' => null,
			'position_x' => Yii::t('app', 'Position X'),
			'position_y' => Yii::t('app', 'Position Y'),
			'type' => null,
			'game' => null,
			'bodyColour' => null,
			'hairColour' => null,
			'armor' => null,
			'weapon' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('type_id', $this->type_id);
		$criteria->compare('game_id', $this->game_id);
		$criteria->compare('body_colour_id', $this->body_colour_id);
		$criteria->compare('hair_colour_id', $this->hair_colour_id);
		$criteria->compare('strength', $this->strength);
		$criteria->compare('height', $this->height);
		$criteria->compare('weight', $this->weight);
		$criteria->compare('speed', $this->speed);
		$criteria->compare('health', $this->health);
		$criteria->compare('armor_health', $this->armor_health);
		$criteria->compare('armor_id', $this->armor_id);
		$criteria->compare('weapon_id', $this->weapon_id);
		$criteria->compare('position_x', $this->position_x);
		$criteria->compare('position_y', $this->position_y);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}