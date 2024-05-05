<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
            'cultivo_id',
            'etapa_id',
            'altura',
            'peso',
            'diametro_tallo',
            'num_hojas',
            'color_hojas',
            'tipo_origen',
            'planta_madre_id',
            'proveedor',
            'fecha_germinacion',
            'fecha_plantacion',
            'fecha_floracion',
            'fecha_cosecha',
            'semilla_id',
        ],
    ]) ?>

</div>
