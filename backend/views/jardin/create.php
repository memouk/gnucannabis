<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jardin */

$this->title = Yii::t('app', 'Create Jardin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jardins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jardin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
