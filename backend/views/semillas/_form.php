<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Semillas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semillas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cepa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_semilla')->dropDownList([ 'Regular' => 'Regular', 'Feminizada' => 'Feminizada', 'Autofloreciente' => 'Autofloreciente', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipo_cannabis')->dropDownList([ 'Sativa' => 'Sativa', 'Indica' => 'Indica', 'Hibrida' => 'Hibrida', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'porcentaje_thc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'porcentaje_cbd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiempo_floracion')->textInput() ?>

    <?= $form->field($model, 'rendimiento_interior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rendimiento_exterior')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zonas_climaticas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'efectos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sabor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aroma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dificultad_cultivo')->dropDownList([ 'Fácil' => 'Fácil', 'Moderada' => 'Moderada', 'Difícil' => 'Difícil', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tipo_strain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_strain')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
