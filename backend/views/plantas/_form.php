<?php
use app\models\Cultivos;
use app\models\EtapasPlanta;
use app\models\Plantas;
use app\models\Semillas;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url
/* @var $this yii\web\View */
/* @var $model app\models\Plantas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plantas-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo_qr')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'cultivo_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Cultivos::find()->all(), 'id', 'nombre'),
        'options' => ['placeholder' => 'Selecciona un cultivo...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
?>

<?=
    $form->field($model, 'etapa_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(EtapasPlanta::find()->all(), 'id', 'nombre'),
        'options' => ['placeholder' => 'Selecciona una etapa...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
?>

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

    
    <?= $form->field($model, 'fecha_germinacion')->widget(\kartik\date\DatePicker::className(), [
    'options' => ['placeholder' => 'Selecciona una fecha ...'],
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd', // Formato de la fecha
        'todayHighlight' => true, // Resaltar la fecha actual
        'autoclose' => true // Cerrar el calendario después de seleccionar una fecha
    ]
]) ?>

    

<?= $form->field($model, 'fecha_plantacion')->widget(\kartik\date\DatePicker::className(), [
    'options' => ['placeholder' => 'Selecciona una fecha ...'],
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd', // Formato de la fecha
        'todayHighlight' => true, // Resaltar la fecha actual
        'autoclose' => true // Cerrar el calendario después de seleccionar una fecha
    ]
]) ?>

    

<?= $form->field($model, 'fecha_floracion')->widget(\kartik\date\DatePicker::className(), [
    'options' => ['placeholder' => 'Selecciona una fecha ...'],
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd', // Formato de la fecha
        'todayHighlight' => true, // Resaltar la fecha actual
        'autoclose' => true // Cerrar el calendario después de seleccionar una fecha
    ]
]) ?>

    
    <?= $form->field($model, 'fecha_cosecha')->widget(\kartik\date\DatePicker::className(), [
    'options' => ['placeholder' => 'Selecciona una fecha ...'],
    'pluginOptions' => [
        'format' => 'yyyy-mm-dd', // Formato de la fecha
        'todayHighlight' => true, // Resaltar la fecha actual
        'autoclose' => true // Cerrar el calendario después de seleccionar una fecha
    ]
]) ?>
<?= $form->field($model, 'filename')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'], // Aceptar solo archivos de imagen
    'pluginOptions' => [
        'allowedFileExtensions' => ['jpg', 'png'], // Extensiones de archivo permitidas
        'showUpload' => false, // Ocultar el botón de subida
        'uploadUrl' => Url::to(['/backend/web/uploads']),
        'maxFileCount' => 10
    ]
]) ?>
<?php
    if (!empty($model->filename)) {
        echo '<div class="file-preview-images">';
        $files = FileInput::getFilesFromDatabase($model, 'filename');
        foreach ($files as $file) {
            $path = Yii::getAlias('/backend/web/uploads' . $file->path);
            echo '<div class="file-preview-frame">
                    ' . Html::img($path, ['class' => 'file-preview-image']) . '
                  </div>';
        }
        echo '</div>';
    }
?>

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