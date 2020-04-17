<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seeds */

$this->title = Yii::t('app', 'Create Seeds');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seeds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seeds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
