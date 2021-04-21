<?php

namespace app\modules\boss\models;

use Yii;

/**
 * This is the model class for table "init".
 *
 * @property int $id
 * @property string $Initiator
 *
 * @property Task[] $tasks
 */
class Init extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'init';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Initiator'], 'required'],
            [['Initiator'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ п/п',
            'Initiator' => 'Инициатор',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['InitID' => 'id']);
    }
}
