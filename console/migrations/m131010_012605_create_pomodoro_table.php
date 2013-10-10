<?php

class m131010_012605_create_pomodoro_table extends \yii\db\Migration
{
	public function up()
	{
		// MySQL-specific table options. Adjust if you plan working with another DBMS
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

		$this->createTable('tbl_pomodoro', array(
			'id' => Schema::TYPE_PK,
			'name' => Schema::TYPE_STRING.' NOT NULL',
			'type' => Schema::TYPE_STRING.'(32) NOT NULL',
			'pomodoros' => Schema::TYPE_INTEGER.' NOT NULL',
			'unplanned' => Schema::TYPE_INTEGER.' NOT NULL',
			'interruptions' => Schema::TYPE_INTEGER.' NOT NULL',
			'created' => Schema::TYPE_DATETIME.' NOT NULL',
			'closed' => Schema::TYPE_DATETIME.' NOT NULL',
			'role' => 'tinyint NOT NULL DEFAULT 10',
			'status' => 'tinyint NOT NULL DEFAULT 10',
			'create_time' => Schema::TYPE_INTEGER.' NOT NULL',
			'update_time' => Schema::TYPE_INTEGER.' NOT NULL',
		), $tableOptions);		
	}

	public function down()
	{
		$this->dropTable('tbl_pomodoro');
		echo "m131010_012605_create_pomodoro_table cannot be reverted.\n";
CREATE TABLE IF NOT EXISTS pomodoro( " +
                                                "id INTEGER PRIMARY KEY ASC, " +
                                                "name TEXT, " +
                                                "type TEXT, " +
                                                "pomodoros INTEGER, " +
                                                "unplanned INTEGER, " +
                                                "interruptions INTEGER, " +
                                                "created DATETIME, " +
                                                "closed DATETIME, " +
                                                "parent INTEGER, " +
                                                "visible BOOLEAN, " +
                                                "ordinal INTEGER, " +
                                                "done BOOLEAN, " +
                                                "estimated INTEGER )";		
		return false;
	}
}
