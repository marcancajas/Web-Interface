<?php

/**
 * This is the model class for table "Modified_Hero".
 *
 * The followings are the available columns in table 'Modified_Hero':
 * @property string $id
 * @property string $name
 * @property integer $type_id
 * @property integer $game_id
 * @property integer $body_colour_id
 * @property integer $hair_colour_id
 * @property integer $strength
 * @property integer $height
 * @property integer $weight
 * @property integer $speed
 * @property integer $health
 * @property integer $armor_health
 * @property integer $armor_id
 * @property integer $weapon_id
 * @property double $position_x
 * @property double $position_y
 *
 * The followings are the available model relations:
 * @property Type $type
 * @property Game $game
 * @property Colour $bodyColour
 * @property Colour $hairColour
 * @property Armor $armor
 * @property Weapon $weapon
 */
class ModifiedHero extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ModifiedHero the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Modified_Hero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type_id, game_id, body_colour_id, hair_colour_id, strength, height, weight, speed, health, armor_health, armor_id, weapon_id', 'numerical', 'integerOnly'=>true),
			array('position_x, position_y', 'numerical'),
			array('name', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, type_id, game_id, body_colour_id, hair_colour_id, strength, height, weight, speed, health, armor_health, armor_id, weapon_id, position_x, position_y', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'type' => array(self::BELONGS_TO, 'Type', 'type_id'),
			'game' => array(self::BELONGS_TO, 'Game', 'game_id'),
			'bodyColour' => array(self::BELONGS_TO, 'Colour', 'body_colour_id'),
			'hairColour' => array(self::BELONGS_TO, 'Colour', 'hair_colour_id'),
			'armor' => array(self::BELONGS_TO, 'Armor', 'armor_id'),
			'weapon' => array(self::BELONGS_TO, 'Weapon', 'weapon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'type_id' => 'Type',
			'game_id' => 'Game',
			'body_colour_id' => 'Body Colour',
			'hair_colour_id' => 'Hair Colour',
			'strength' => 'Strength',
			'height' => 'Height',
			'weight' => 'Weight',
			'speed' => 'Speed',
			'health' => 'Health',
			'armor_health' => 'Armor Health',
			'armor_id' => 'Armor',
			'weapon_id' => 'Weapon',
			'position_x' => 'Position X',
			'position_y' => 'Position Y',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('game_id',$this->game_id);
		$criteria->compare('body_colour_id',$this->body_colour_id);
		$criteria->compare('hair_colour_id',$this->hair_colour_id);
		$criteria->compare('strength',$this->strength);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('speed',$this->speed);
		$criteria->compare('health',$this->health);
		$criteria->compare('armor_health',$this->armor_health);
		$criteria->compare('armor_id',$this->armor_id);
		$criteria->compare('weapon_id',$this->weapon_id);
		$criteria->compare('position_x',$this->position_x);
		$criteria->compare('position_y',$this->position_y);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}