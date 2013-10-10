<?php

namespace backend\models;

use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

/**
 * Pomodoro represents the model behind the search form about Pomodoro.
 */
class Pomodoro extends ActiveRecord
{
	public $id;
	public $name;
	public $type;
	public $estimated;
	public $pomodoros;
	public $unplanned;
	public $interruptions;
	public $created;
	public $closed;
	public $parent;
	public $ordinal;
	public $done;

	public function rules()
	{
		return array(
			array('id, estimated, pomodoros, unplanned, interruptions, parent, ordinal, done', 'integer'),
			array('name, type, created, closed', 'safe'),
		);
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'type' => 'Type',
			'estimated' => 'Estimated',
			'pomodoros' => 'Pomodoros',
			'unplanned' => 'Unplanned',
			'interruptions' => 'Interruptions',
			'created' => 'Created',
			'closed' => 'Closed',
			'parent' => 'Parent',
			'ordinal' => 'Ordinal',
			'done' => 'Done',
		);
	}

	public function search($params)
	{
		$query = Pomodoro::find();
		$dataProvider = new ActiveDataProvider(array(
			'query' => $query,
		));

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'name', true);
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'estimated');
		$this->addCondition($query, 'pomodoros');
		$this->addCondition($query, 'unplanned');
		$this->addCondition($query, 'interruptions');
		$this->addCondition($query, 'created');
		$this->addCondition($query, 'closed');
		$this->addCondition($query, 'parent');
		$this->addCondition($query, 'ordinal');
		$this->addCondition($query, 'done');
		return $dataProvider;
	}

	protected function addCondition($query, $attribute, $partialMatch = false)
	{
		$value = $this->$attribute;
		if (trim($value) === '') {
			return;
		}
		if ($partialMatch) {
			$value = '%' . strtr($value, array('%'=>'\%', '_'=>'\_', '\\'=>'\\\\')) . '%';
			$query->andWhere(array('like', $attribute, $value));
		} else {
			$query->andWhere(array($attribute => $value));
		}
	}
}
