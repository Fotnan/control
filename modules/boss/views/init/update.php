<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Init */

$this->title = 'Update Init: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="init-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
