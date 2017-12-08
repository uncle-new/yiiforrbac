<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RccUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rcc-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_type')->textInput() ?>

    <?= $form->field($model, 'user_integral')->textInput() ?>

    <?= $form->field($model, 'insert_id')->textInput() ?>

    <?= $form->field($model, 'insert_datetime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_id')->textInput() ?>

    <?= $form->field($model, 'update_datetime')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
