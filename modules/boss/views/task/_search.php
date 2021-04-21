<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\TaskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Object') ?>

    <?= $form->field($model, 'InitID') ?>

    <?= $form->field($model, 'Datastart') ?>

    <?= $form->field($model, 'Datadue') ?>

    <?php // echo $form->field($model, 'Datamake') ?>

    <?php // echo $form->field($model, 'Datasend') ?>

    <?php // echo $form->field($model, 'ProblemID') ?>

    <?php // echo $form->field($model, 'Memo') ?>

    <?php // echo $form->field($model, 'Datatel') ?>

    <?php // echo $form->field($model, 'Customername') ?>

    <?php // echo $form->field($model, 'Customertel') ?>

    <?php // echo $form->field($model, 'Ahtung') ?>

    <?php // echo $form->field($model, 'MessageID') ?>

    <?php // echo $form->field($model, 'PriorityID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
