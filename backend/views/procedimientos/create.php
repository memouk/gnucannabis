<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Procedimientos $model */

$this->title = 'Create Procedimientos';
$this->params['breadcrumbs'][] = ['label' => 'Procedimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="procedimientos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
