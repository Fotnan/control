<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\boss\models\Task */

$this->title = "Задание №{$model->id} по объекту {$model->Object}";
$this->params['breadcrumbs'][] = ['label' => 'Задания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить это?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Object',
            //'InitID',
            [
                'attribute'=>'InitID',
                'value'=> $model->init->Initiator,
            ],
            //'Datastart',
            [
                'attribute'=>'Datastart',
                'format' => 'date',
            ],
            //'ProblemID',
            [
                'attribute'=>'ProblemID',
                'value'=> $model->problem->Problem,
            ],
            //'PriorityID',
            [
                'attribute'=>'PriorityID',
                'value'=> $model->priority->Priority,
            ],
            //'Datadue',
            [
                'attribute'=>'Datadue',
                'format' => 'date',
            ],
            //'Datamake',
            [
                'attribute'=>'Datamake',
                'format' => 'date',
            ],
            //'Datasend',
            [
                'attribute'=>'Datasend',
                'format' => 'date',
            ],
            //'MessageID',
            [
                'attribute'=>'MessageID',
                'value'=>function($model){
                    return isset($model->message->Message) ? $model->message->Message : 'Не задано';
                }
            ],
            'Memo:ntext',
            //'Datatel',
            [
                'attribute'=>'Datatel',
                'format' => 'date',
            ],
            'Customername',
            'Customertel',
            //'Ahtung',
            [
                'attribute'=>'Ahtung',
                'value'=>function($data){
                    return $data==0 ? 'Норма':'Внимание!';
                },
            ],
        ],
    ]) ?>

</div>
