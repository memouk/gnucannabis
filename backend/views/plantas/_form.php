<?php
use app\models\Cultivos;
use app\models\EtapasPlanta;
use app\models\Plantas;
use app\models\Semillas;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Plantas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plantas-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo_qr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cultivo_id')->dropDownList(
        ArrayHelper::map(Cultivos::find()->all(), 'id', 'nombre'),
        ['prompt' => 'Select...']
    ); ?>

    <?= $form->field($model, 'etapa_id')->dropDownList(
        ArrayHelper::map(EtapasPlanta::find()->all(), 'id', 'nombre'),
        ['prompt' => 'Select...']
    ); ?>

    <?= $form->field($model, 'altura')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'peso')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'diametro_tallo')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'num_hojas')->textInput() ?>
    <?= $form->field($model, 'color_hojas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_origen')->dropDownList([
        'Semilla' => 'Semilla',
        'Esqueje' => 'Esqueje',
        'Desconocido' => 'Desconocido',
    ], ['prompt' => '', 'id' => 'tipo_origen']) ?>

    <div id="campo_semilla" style="display: none;">
        <?= $form->field($model, 'semilla_id')->dropDownList(
            ArrayHelper::map(Semillas::find()->all(), 'id', 'nombre'),
            ['prompt' => 'Select...']
        ); ?>
    </div>

    <div id="campo_planta_madre" style="display: none;">
        <?= $form->field($model, 'planta_madre_id')->dropDownList(
            ArrayHelper::map(Plantas::find()->all(), 'id', 'id'),
            ['prompt' => 'Select...']
        ); ?>
    </div>

    <?= $form->field($model, 'proveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_germinacion')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => [
            'class' => 'form-control',
        ],
    ]) ?>

    <?= $form->field($model, 'fecha_plantacion')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => [
            'class' => 'form-control',
        ],
    ]) ?>

    <?= $form->field($model, 'fecha_floracion')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => [
            'class' => 'form-control',
        ],
    ]) ?>

    <?= $form->field($model, 'fecha_cosecha')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => [
            'class' => 'form-control',
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php
$script = <<< JS
    $('#tipo_origen').change(function() {
        var selectedValue = $(this).val();

        // Ocultar ambos campos por defecto
        $('#campo_semilla').hide();
        $('#campo_planta_madre').hide();

        // Mostrar el campo correspondiente según el valor seleccionado
        if (selectedValue === 'Semilla') {
            $('#campo_semilla').show();
        } else if (selectedValue === 'Esqueje') {
            $('#campo_planta_madre').show();
        }
    });
JS;
$this->registerJs($script);
?>