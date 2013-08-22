<?php
/**
 *This class extends the GxActiveRecord class
 *When a request is made for a model which resides in the JAMGame database:
 *The database connection will be established through this class
 **/

class JAMGameActiveRecord extends GxActiveRecord
{
    private static $dbGame = null;

	public function getGameDbConnection()
    {
        if (self::$dbGame !== null)
        {
            return self::$dbGame;
        }
        else
        {
            self::$dbGame = Yii::app()->dbGame;
            if (self::$dbGame instanceof CDbConnection)
            {
                self::$dbGame->setActive(true);
                return self::$dbGame;
            }
            else
            {
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
            }
        }
    }
}
?>