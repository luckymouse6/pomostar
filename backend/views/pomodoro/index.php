<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\base\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\Pomodoro $searchModel
 */

$this->title = 'Pomodoros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pomodoro-index">

	<h1><?php echo Html::encode($this->title); ?></h1>

	<?php // echo $this->render('_search', array('model' => $searchModel)); ?>

	<p>
		<?php echo Html::a('Create Pomodoro', array('create'), array('class' => 'btn btn-danger')); ?>
	</p>

	<?php echo GridView::widget(array(
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => array(
			array('class' => 'yii\grid\SerialColumn'),

			'id',
			'name',
			'type',
			'estimated',
			'pomodoros',
			// 'unplanned',
			// 'interruptions',
			// 'created',
			// 'closed',
			// 'parent',
			// 'ordinal',
			// 'done',

			array('class' => 'yii\grid\ActionColumn'),
		),
	)); ?>

</div>
