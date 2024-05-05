<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plantas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="plantas-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Plantas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'codigo_qr',
            [
                'label' => 'Cultivo',
                'value' => function($model) {
                    return $model->cultivo ? $model->cultivo->nombre : '-';
                }
            ],
            [
                'label' => 'Etapa',
                'value' => function($model) {
                    return $model->etapa ? $model->etapa->nombre : '-';
                }
            ],
            'altura',
            //peso',
            //diametro_tallo',
            //num_hojas',
            //color_hojas',
            //tipo_origen',
            //planta_madre_id',
            //proveedor',
            //fecha_germinacion',
            //fecha_plantacion',
            //fecha_floracion',
            //fecha_cosecha',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>