<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seeds */

$this->title = Yii::t('app', 'Update Seeds: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seeds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idseed]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="seeds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
