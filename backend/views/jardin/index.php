<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\TipoJardin;
use app\models\TipoCultivo;


/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jardins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jardin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Jardin'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idjardin',
            'descripcion',
            'fecha_creacion',
            'fecha_finalizacion',
            [
                'attribute'=>'tipoJardin',
                'value'=>'tipoJardin.descripcion',  
            ],
            // [
            //     'attribute'=>'TipoCultivo',
            //     'value'=>TipoCultivo::findOne(1)->cultivo,   
            // ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
