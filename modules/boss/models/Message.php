<?php

namespace app\modules\boss\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $Message
 *
 * @property Task[] $tasks
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Message'], 'required'],
            [['Message'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ п/п',
            'Message' => 'Документ',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['MessageID' => 'id']);
    }
}
