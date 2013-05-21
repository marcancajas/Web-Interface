<?php

class m130521_032025_create_table_YiiSession extends CDbMigration
{
	public function up()
	{
		try
		{
			//Try to create the YiiSession table
			$this->execute("CREATE TABLE `YiiSession` (
						`id` char(32) CHARACTER SET latin1 NOT NULL,
						`expire` int(11) DEFAULT NULL,
						`data` text CHARACTER SET latin1,
						PRIMARY KEY (`id`)
						) ENGINE=MyISAM DEFAULT CHARSET=utf8;");
		}
		catch (CDbException $e)
		{
			//Print the error if the YiiSession table cannot be created
			print_r($e->errorInfo);
			return false;
		}
	}
	public function down()
	{
		echo "m130521_032025_create_table_YiiSession does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}