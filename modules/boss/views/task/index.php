<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\boss\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задания';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <p>
        <?= Html::a('Создать задание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Object',
            'InitID',
            //'Datastart',
            [
                'attribute'=>'Datastart',
                'format' => 'date',
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
            'ProblemID',
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
                'value' => function($data) {
                    return $data->Ahtung ? '<span class="text-red">ВНИМАНИЕ!</span>' : '<span class="text-green">Норма</span>';
                },
                'format'=>'raw',
            ],
            'MessageID',
            'PriorityID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
