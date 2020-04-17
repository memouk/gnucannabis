<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jardin */

// $this->title = Yii::t('app', 'Update Jardin: {name}', [
//     'name' => $model->idjardin,
// ]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jardins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idjardin, 'url' => ['view', 'id' => $model->idjardin]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jardin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
