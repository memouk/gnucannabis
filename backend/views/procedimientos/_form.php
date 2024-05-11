<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Procedimientos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="procedimientos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'planta_id')->textInput() ?>

    <?= $form->field($model, 'jardinero_id')->textInput() ?>

    <?= $form->field($model, 'tipo_procedimiento_id')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'nota')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
