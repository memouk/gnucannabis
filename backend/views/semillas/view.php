<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Semillas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Semillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="semillas-view">

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
            'nombre',
            'cepa',
            'tipo_semilla',
            'tipo_cannabis',
            'porcentaje_thc',
            'porcentaje_cbd',
            'tiempo_floracion',
            'rendimiento_interior',
            'rendimiento_exterior',
            'zonas_climaticas',
            'efectos',
            'sabor',
            'aroma',
            'dificultad_cultivo',
            'tipo_strain',
            'calificacion',
            'descripcion_strain:ntext',
        ],
    ]) ?>

</div>
