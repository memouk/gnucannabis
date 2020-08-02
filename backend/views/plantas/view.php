<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Jardin;

/* @var $this yii\web\View */
/* @var $model app\models\Plantas */

$this->title = $model->idplanta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plantas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="plantas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idplanta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Notas'), ['notas', 'id' => $model->idplanta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idplanta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idplanta',
            'tipo',
            'fechaGerminacion',
            'fechaPlantacion',
            [
                'attribute'=>'ubicacion',
                'value'=>$model->hasOne(Jardin::className(), ['idjardin' => 'idjardin']),  
            ],
            'idsemilla',
            'descripcion',
            'contenedor',
            'fechaTrasplante',
            'idRiego',
            'idAbono',
        ],
    ]) ?>

</div>
