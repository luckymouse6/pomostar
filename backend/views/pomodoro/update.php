<?php

use yii\helpers\Html;

/**
 * @var yii\base\View $this
 * @var app\models\Pomodoro $model
 */

$this->title = 'Update Pomodoro: ' . $model->name;
$this->params['breadcrumbs'][] = array('label' => 'Pomodoros', 'url' => array('index'));
$this->params['breadcrumbs'][] = array('label' => $model->name, 'url' => array('view', 'id' => $model->id));
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pomodoro-update">

	<h1><?php echo Html::encode($this->title); ?></h1>

	<?php echo $this->render('_form', array(
		'model' => $model,
	)); ?>

</div>
