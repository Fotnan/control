<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Task */

$this->title = 'Обновить задание: №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>'Задание №:' . $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="task-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
