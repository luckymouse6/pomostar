<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\base\View $this
 * @var app\models\Pomodoro $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = array('label' => 'Pomodoros', 'url' => array('index'));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pomodoro-view">

	<h1><?php echo Html::encode($this->title); ?></h1>

	<p>
		<?php echo Html::a('Update', array('update', 'id' => $model->id), array('class' => 'btn btn-danger')); ?>
		<?php echo Html::a('Delete', array('delete', 'id' => $model->id), array(
			'class' => 'btn btn-danger',
			'data-confirm' => Yii::t('app', 'Are you sure to delete this item?'),
			'data-method' => 'post',
		)); ?>
	</p>

	<?php echo DetailView::widget(array(
		'model' => $model,
		'attributes' => array(
			'id',
			'name',
			'type',
			'estimated',
			'pomodoros',
			'unplanned',
			'interruptions',
			'created',
			'closed',
			'parent',
			'ordinal',
			'done',
		),
	)); ?>

</div>
