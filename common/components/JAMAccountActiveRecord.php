<?php
/**
 *This class extends the GxActiveRecord class
 *When a request is made for a model which resides in the JAMAccount database:
 *The database connection will be established through this class
 **/


class JAMAccountActiveRecord extends GxActiveRecord
{
    private static $dbAccount = null;

    public function getAccountDbConnection()
    {
        if (self::$dbAccount !== null)
        {
            return self::$dbAccount;
        }
        else
        {
            self::$dbAccount = Yii::app()->dbAccount;
            if (self::$dbAccount instanceof CDbConnection)
            {
                self::$dbAccount->setActive(true);
                return self::$dbAccount;
            }
            else
            {
                throw new CDbException(Yii::t('yii','Active Record requires a "db" CDbConnection application component.'));
            }
        }
    }
}
?>