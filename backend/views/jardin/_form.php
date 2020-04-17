<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\TipoJardin;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Jardin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jardin-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

     <!-- <?= $model->fecha_creacion= date('Y-m-d H:i:s');?>  -->
  
    <?= $form->field($model, 'fecha_finalizacion')->textInput() ?>

    <?= $form->field($model, 'tipo_jardin')->dropDownList(
                ArrayHelper::map(TipoJardin::find()->all(), 'id', 'descripcion'), 
                ['prompt'=>'Select...']); ?>

<?php echo $form->field($model, 'filename')->widget(FileInput::classname(), [

'options' => ['accept' => 'image/*'],

]);      
?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
