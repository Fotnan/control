<?php

namespace app\modules\boss\models;

use Yii;

/**
 * This is the model class for table "problem".
 *
 * @property int $id
 * @property string $Problem
 *
 * @property Task[] $tasks
 */
class Problem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Problem'], 'required'],
            [['Problem'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ п/п',
            'Problem' => 'Задание',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['ProblemID' => 'id']);
    }
}
