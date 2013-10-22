<?php

Yii::import('common.models._base.BaseHero');

class Hero extends BaseHero
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}