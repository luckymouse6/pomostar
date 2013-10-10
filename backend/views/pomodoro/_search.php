<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\base\View $this
 * @var app\models\Pomodoro $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="pomodoro-search">

	<?php $form = ActiveForm::begin(array(
		'action' => array('index'),
		'method' => 'get',
	)); ?>

		<?php echo $form->field($model, 'id'); ?>
		<?php echo $form->field($model, 'name'); ?>
		<?php echo $form->field($model, 'type'); ?>
		<?php echo $form->field($model, 'estimated'); ?>
		<?php echo $form->field($model, 'pomodoros'); ?>
		<?php // echo $form->field($model, 'unplanned'); ?>
		<?php // echo $form->field($model, 'interruptions'); ?>
		<?php // echo $form->field($model, 'created'); ?>
		<?php // echo $form->field($model, 'closed'); ?>
		<?php // echo $form->field($model, 'parent'); ?>
		<?php // echo $form->field($model, 'ordinal'); ?>
		<?php // echo $form->field($model, 'done'); ?>
		<div class="form-group">
			<?php echo Html::submitButton('Search', array('class' => 'btn btn-primary')); ?>
			<?php echo Html::resetButton('Reset', array('class' => 'btn btn-default')); ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
