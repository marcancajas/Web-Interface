<?php

Yii::import('common.models._base.BaseModifiedHero');

class ModifiedHero extends BaseModifiedHero
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}