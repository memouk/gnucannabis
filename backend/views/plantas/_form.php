<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\widgets\DatePicker;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Plantas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plantas-form">

    <?php $form = ActiveForm::begin(); ?>



    
    <?= $form->field($model, 'fechaGerminacion')->widget(DatePicker::classname(), [
    
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
]) ?>

 

    <?= $form->field($model, 'fechaPlantacion')->widget(DatePicker::classname(), [
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
]) ?>

<?= $form->field($model, 'fechaTrasplante')->widget(DatePicker::classname(), [
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    
]) ?>
    

    <?= $form->field($model, 'idjardin')->textInput() ?>

    <?= $form->field($model, 'idsemilla')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenedor')->textInput() ?>

    <?= $form->field($model, 'idRiego')->textInput() ?>

    <?= $form->field($model, 'idAbono')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
