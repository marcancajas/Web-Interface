<?php

class m130526_073855_create_table_country extends CDbMigration
{
	public function up()
	{
		try
		{
			//Try to create the country table
			$this->execute("CREATE TABLE `country` (
							`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
							`shortName` varchar(100) NOT NULL DEFAULT '',
							`fullName` varchar(100) NOT NULL DEFAULT '',
							`countryCode` varchar(2) NOT NULL DEFAULT '',
							PRIMARY KEY (`id`)
							) ENGINE=MyISAM DEFAULT CHARSET=latin1;"
						);
		}
		catch (CDbException $e)
		{
			//Print the error if the country table could not be created
			print_r($e->errorInfo);
			return false;
		}
	}

	public function down()
	{
		echo "m130526_073855_create_table_country does not support migration down.\n";
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