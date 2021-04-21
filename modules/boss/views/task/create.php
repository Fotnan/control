<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Task */

$this->title = 'Создать задание';
$this->params['breadcrumbs'][] = ['label' => 'Задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">

    <?= $this->render('_form1', [
        'model' => $model,
    ]) ?>

</div>
