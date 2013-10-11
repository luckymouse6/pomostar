<?php
use yii\db\Schema;

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
			'estimated' => Schema::TYPE_INTEGER.' NOT NULL DEFAULT 0',
			'pomodoros' => Schema::TYPE_INTEGER.' NOT NULL DEFAULT 0',
			'unplanned' => Schema::TYPE_INTEGER.' NOT NULL DEFAULT 0',
			'interruptions' => Schema::TYPE_INTEGER.' NOT NULL DEFAULT 0',
			'created' => Schema::TYPE_DATETIME.' NOT NULL',
			'closed' => Schema::TYPE_DATETIME.' NULL',
			'parent' => Schema::TYPE_INTEGER.' NOT NULL',
			'ordinal' => Schema::TYPE_INTEGER.' NOT NULL',
			'parent' => Schema::TYPE_INTEGER.' NOT NULL',
			'done' => 'tinyint NOT NULL DEFAULT 10',
		), $tableOptions);		
	}

	public function down()
	{
		$this->dropTable('tbl_pomodoro');		
	}
}