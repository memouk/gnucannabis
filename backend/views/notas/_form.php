<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TipoNota;

/* @var $this yii\web\View */
/* @var $model app\models\Notas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notas-form">

    <?php $form = ActiveForm::begin(); ?>

  

    <?= $form->field($model, 'tipo')->dropDownList(
                ArrayHelper::map(TipoNota::find()->all(), 'idtipoNota', 'descripcion'), 
                ['prompt'=>'Select...']); ?> 

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
