<?php

use app\models\MetodosCultivo;
use app\models\Paises;
use app\models\TipoCultivo;
use app\models\TiposLicencia;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cultivos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cultivos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    
<?= $form->field($model, 'tipo_cultivo_id')->dropDownList(
                ArrayHelper::map(TipoCultivo::find()->all(), 'id', 'nombre'), 
                ['prompt'=>'Select...']); ?>

    
<?= $form->field($model, 'tipo_licencia_id')->dropDownList(
                ArrayHelper::map(TiposLicencia::find()->all(), 'id', 'nombre'), 
                ['prompt'=>'Select...']); ?>


<?= $form->field($model, 'pais_id')->dropDownList(
                ArrayHelper::map(Paises::find()->all(), 'id', 'nombre'), 
                ['prompt'=>'Select...']); ?>

    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>

   

<?= $form->field($model, 'metodo_cultivo_id')->dropDownList(
                ArrayHelper::map(MetodosCultivo::find()->all(), 'id', 'nombre'), 
                ['prompt'=>'Select...']); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
