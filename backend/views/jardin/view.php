<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\TipoJardin;
use app\models\TipoCultivo;

/* @var $this yii\web\View */
/* @var $model app\models\Jardin */

$this->title = $model->idjardin;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jardins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jardin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idjardin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idjardin], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    

    <?= 
    //$c=TipoCultivo::findOne($model->idTipoCultivo)->cultivo;
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idjardin',
            'descripcion',
            'fecha_creacion',
            'fecha_finalizacion',
            [
                'attribute'=>'tipo de jardin',
                'value'=>TipoJardin::findOne($model->tipo_jardin)->descripcion,  
            ],
            [
                'attribute'=>'TipoCultivo',
                'value'=>TipoCultivo::findOne($model->idTipoCultivo)->cultivo,   
            ]
        ],
    ]) ?>

<?php echo Html::img('../uploads/jardin'.$model->idjardin.'.png') ?>
<?php echo Html::img('../uploads/qrJardin'.$model->idjardin.'.png') ?>



</div>
