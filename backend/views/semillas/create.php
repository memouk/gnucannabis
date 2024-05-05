<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Semillas */

$this->title = 'Create Semillas';
$this->params['breadcrumbs'][] = ['label' => 'Semillas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semillas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
