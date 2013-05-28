<?php

class m130526_045030_update_user_add_additional_columns extends CDbMigration
{
	public function up()
	{
		try
		{
			//Try to add the new fields to the user table
			$this->execute("ALTER TABLE user
							ADD country int(11) unsigned NOT NULL DEFAULT '' COMMENT 'CONSTRAINT FOREIGN KEY (country) REFERENCES country(id)',
							ADD	gender varchar(1) NOT NULL,
							ADD	birthdate int(11) unsigned NOT NULL,
							ADD	superuser tinyint(1) unsigned NOT NULL,
							ADD	status tinyint(1) NOT NULL,
							ADD	creationDate int(11) unsigned NOT NULL,
							ADD	registrationKey varchar(60) NOT NULL DEFAULT ''
							AFTER lastname;");
		}
		catch (CDbException $e)
		{
			//Print the error if the update cannot be completed
			print_r($e->errorInfo);
			return false;
		}

	}

	public function down()
	{
		echo "m130526_045030_update_user_add_additional_columns does not support migration down.\n";
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