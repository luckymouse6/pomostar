<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\base\View $this
 * @var app\models\Pomodoro $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="pomodoro-form">

	<?php $form = ActiveForm::begin(); ?>

		<?php echo $form->field($model, 'name')->textInput(array('maxlength' => 255)); ?>

		<?php echo $form->field($model, 'type')->textInput(array('maxlength' => 32)); ?>

		<?php echo $form->field($model, 'created')->textInput(); ?>

		<?php echo $form->field($model, 'parent')->textInput(); ?>

		<?php echo $form->field($model, 'ordinal')->textInput(); ?>

		<?php echo $form->field($model, 'estimated')->textInput(); ?>

		<?php echo $form->field($model, 'pomodoros')->textInput(); ?>

		<?php echo $form->field($model, 'unplanned')->textInput(); ?>

		<?php echo $form->field($model, 'interruptions')->textInput(); ?>

		<?php echo $form->field($model, 'done')->textInput(); ?>

		<?php echo $form->field($model, 'closed')->textInput(); ?>

		<div class="form-group">
			<?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-primary')); ?>
		</div>

	<?php ActiveForm::end(); ?>

</div>
