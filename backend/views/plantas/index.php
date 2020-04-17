<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Plantas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plantas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Plantas'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idplanta',
            'tipo',
            'fechaGerminacion',
            'fechaPlantacion',
            'idjardin',
            //'idsemilla',
            //'descripcion',
            //'contenedor',
            //'fechaTrasplante',
            //'idRiego',
            //'idAbono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
