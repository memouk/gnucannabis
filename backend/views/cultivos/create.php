<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cultivos */

$this->title = 'Create Cultivos';
$this->params['breadcrumbs'][] = ['label' => 'Cultivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultivos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
