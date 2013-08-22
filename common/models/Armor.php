<?php

Yii::import('common.models._base.BaseArmor');

class Armor extends BaseArmor
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}