<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seeds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seeds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank')->textInput() ?>

    <?= $form->field($model, 'seedType')->textInput() ?>

    <?= $form->field($model, 'purchaseDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feminized')->textInput() ?>

    <?= $form->field($model, 'yield')->textInput() ?>

    <?= $form->field($model, 'Climate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'floweringTime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cbd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
