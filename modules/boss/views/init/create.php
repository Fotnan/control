<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Init */

$this->title = 'Create Init';
$this->params['breadcrumbs'][] = ['label' => 'Inits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="init-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
