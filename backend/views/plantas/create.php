<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plantas */

$this->title = 'Create Plantas';
$this->params['breadcrumbs'][] = ['label' => 'Plantas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plantas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
