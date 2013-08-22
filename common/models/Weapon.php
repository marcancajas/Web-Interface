<?php

Yii::import('common.models._base.BaseWeapon');

class Weapon extends BaseWeapon
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}