<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use Da\QrCode\QrCode;
use kartik\file\FileInput;


$qrCode = (new QrCode('http://localhost:8080/index.php?r=plantas%2Fview&id='.$model->id))
            ->setSize(250)
            ->setMargin(5)
            ->useForegroundColor(0, 0, 0);
            $qrCodePng = $qrCode->writeString();

/* @var $this yii\web\View */
/* @var $model app\models\Plantas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Plantas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="plantas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'codigo_qr',
        [
            'label' => 'Cultivo',
            'value' => $model->cultivo->nombre,
        ],
        [
            'label' => 'Etapa',
            'value' => $model->etapa->nombre,
        ],
        'altura',
        'peso',
        'diametro_tallo',
        'num_hojas',
        'color_hojas',
        'tipo_origen',
        [
            'label' => 'Planta Madre',
            'value' => $model->plantaMadre,
        ],
        'proveedor',
        'fecha_germinacion',
        'fecha_plantacion',
        'fecha_floracion',
        'fecha_cosecha',
        [
            'label' => 'Nombre de Semilla',
            'value' => $model->semilla->nombre,
        ],
        [
            'label' => 'Código QR',
            'format' => 'raw',
            'value' => Html::img('data:image/png;base64,' . base64_encode($qrCodePng), ['class' => 'img-responsive']),
        ],
        [
            'label' => 'Imagen',
            'format' => 'raw',
            'value' => $model->filename ? Html::img('@web/uploads/' . $model->filename, ['class' => 'img-responsive']) : 'No hay imagen cargada',
        ],
    ],
]) ?>
</div>
