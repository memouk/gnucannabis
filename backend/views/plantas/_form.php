<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\widgets\DatePicker;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Sexo;
use app\models\Jardin;
use app\models\Seeds;
use app\models\Contenedores;
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
<?= $form->field($model, 'fechaFloracion')->widget(DatePicker::classname(), [
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    
]) ?>

<?= $form->field($model, 'tipo')->dropDownList(
                ArrayHelper::map(Sexo::find()->all(), 'idsexo', 'sexo'), 
                ['prompt'=>'Select...']); ?> 
<?= $form->field($model, 'fechaCosecha')->widget(DatePicker::classname(), [
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    
]) ?>
    

    <?= $form->field($model, 'idjardin')->dropDownList(
                ArrayHelper::map(Jardin::find()->all(), 'idjardin', 'descripcion'), 
                ['prompt'=>'Select...']); ?> 

   <?= $form->field($model, 'idsemilla')->dropDownList(
                ArrayHelper::map(Seeds::find()->all(), 'idseed', 'name'), 
                ['prompt'=>'Select...']); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'contenedor')->dropDownList(
                ArrayHelper::map(Contenedores::find()->all(), 'id', 'descripcion'), 
                ['prompt'=>'Select...']); ?>

   

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
