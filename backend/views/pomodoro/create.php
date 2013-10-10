<?php

use yii\helpers\Html;

/**
 * @var yii\base\View $this
 * @var app\models\Pomodoro $model
 */

$this->title = 'Create Pomodoro';
$this->params['breadcrumbs'][] = array('label' => 'Pomodoros', 'url' => array('index'));
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pomodoro-create">

	<h1><?php echo Html::encode($this->title); ?></h1>

	<?php echo $this->render('_form', array(
		'model' => $model,
	)); ?>

</div>
