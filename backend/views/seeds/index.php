<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Seeds');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seeds-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Seeds'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idseed',
            'name',
            'bank',
            'seedType',
            'purchaseDate',
            //'feminized',
            //'yield',
            //'Climate',
            //'floweringTime',
            //'height',
            //'cbd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
