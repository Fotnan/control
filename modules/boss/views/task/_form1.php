<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Task */
/* @var $form yii\widgets\ActiveForm */
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

             <?= $form->field($model, 'ProblemID')->dropDownList([\app\modules\boss\models\Problem::find()->select(['Problem', 'id'])->indexBy('id')->column()]) ?>
         </div>
         <div class="col-6">

             <?= $form->field($model, 'Memo')->textarea(['rows' => 6, 'cols'=>45]) ?>

             <?= $form->field($model, 'Customername')->textInput(['maxlength' => true]) ?>

             <?= $form->field($model, 'Customertel')->textInput(['maxlength' => true]) ?>

             <?= $form->field($model, 'PriorityID')->dropDownList([\app\modules\boss\models\Priority::find()->select(['Priority', 'id'])->indexBy('id')->column()]) ?>

         </div>
         </div>
         <div class="form-group col-3">
             <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
         </div>

         <?php ActiveForm::end(); ?>




 </div>


</div>
