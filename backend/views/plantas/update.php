<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plantas */

$this->title = Yii::t('app', 'Update Plantas: {name}', [
    'name' => $model->idplanta,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Plantas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idplanta, 'url' => ['view', 'id' => $model->idplanta]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="plantas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
