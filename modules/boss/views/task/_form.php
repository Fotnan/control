<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Task */
/* @var $form yii\widgets\ActiveForm */


    $param = ['options' =>[ '5' => ['Selected' => true]]];
?>

<div class="task-form">
<div class="container">
    <?php $form = ActiveForm::begin(); ?>
    <div style="display: flex">
        <div class="col-6">
            <?= $form->field($model, 'Object')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'InitID')->dropDownList([\app\modules\boss\models\Init::find()->select(['Initiator', 'id'])->indexBy('id')->column()]) ?>

            <?= $form->field($model, 'Datastart')->input('date', [ 'dateFormat' => 'date',]) ?>

            <?= $form->field($model, 'Datadue')->input('date', [ 'format' => 'date',]) ?>

            <?= $form->field($model, 'Datamake')->input('date', [ 'format' => 'date',]) ?>

            <?= $form->field($model, 'Datasend')->input('date', [ 'format' => 'date',]) ?>

            <?= $form->field($model, 'ProblemID')->dropDownList([\app\modules\boss\models\Problem::find()->select(['Problem', 'id'])->indexBy('id')->column()]) ?>

        </div>
        <div class="col-6">
            <?= $form->field($model, 'Memo')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'Datatel')->input('date', [ 'format' => 'date',]) ?>

            <?= $form->field($model, 'Customername')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'Customertel')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'Ahtung')->DropdownList([
                '0'=>'Норма',
                '1'=>'Внимание!',
            ]) ?>

            <?= $form->field($model, 'MessageID')->dropDownList([\app\modules\boss\models\Message::find()->select(['Message', 'id'])->indexBy('id')->column()],$param) ?>

            <?= $form->field($model, 'PriorityID')->dropDownList([\app\modules\boss\models\Priority::find()->select(['Priority', 'id'])->indexBy('id')->column()]) ?>

        </div>


    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


</div>
