<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cultivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultivos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cultivos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre',
            [
                'label' => 'Tipo de Cultivo',
                'value' => function($model) {
                    return $model->tipoCultivo->nombre;
                }
            ],
            [
                'label' => 'Tipo de Licencia',
                'value' => function($model) {
                    return $model->tipoLicencia ? $model->tipoLicencia->nombre : '-';
                }
            ],
            [
                'label' => 'País',
                'value' => function($model) {
                    return $model->pais->nombre;
                }
            ],
            //'ubicacion',
            //'metodo_cultivo_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
