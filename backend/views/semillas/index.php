<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Semillas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semillas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Semillas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'cepa',
            'tipo_semilla',
            'tipo_cannabis',
            //'porcentaje_thc',
            //'porcentaje_cbd',
            //'tiempo_floracion',
            //'rendimiento_interior',
            //'rendimiento_exterior',
            //'zonas_climaticas',
            //'efectos',
            //'sabor',
            //'aroma',
            //'dificultad_cultivo',
            //'tipo_strain',
            //'calificacion',
            //'descripcion_strain:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
