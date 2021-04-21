<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $MainID
 * @property string $Object
 * @property int $InitID
 * @property string $Datastart
 * @property string|null $Datadue
 * @property string|null $Datamake
 * @property string|null $Datasend
 * @property int|null $ProblemID
 * @property string|null $Memo
 * @property string|null $Datatel
 * @property string|null $Customername
 * @property string|null $Customertel
 * @property int|null $Ahtung
 * @property int|null $MessageID
 * @property int $PriorityID
 *
 * @property Init $iniciator
 * @property Message $message
 * @property Priority $priority
 * @property Problem $problem
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Object', 'InitID', 'Datastart', 'PriorityID'], 'required'],
            [['InitID', 'ProblemID', 'Ahtung', 'MessageID', 'PriorityID'], 'integer'],
            [['Datastart', 'Datadue', 'Datamake', 'Datasend', 'Datatel'], 'safe'],
            [['Memo'], 'string'],
            [['Object'], 'string', 'max' => 10],
            [['Customername', 'Customertel'], 'string', 'max' => 255],
            [['MessageID'], 'exist', 'skipOnError' => true, 'targetClass' => Message::class, 'targetAttribute' => ['MessageID' => 'id']],
            [['InitID'], 'exist', 'skipOnError' => true, 'targetClass' => Init::class, 'targetAttribute' => ['InitID' => 'id']],
            [['ProblemID'], 'exist', 'skipOnError' => true, 'targetClass' => Problem::class, 'targetAttribute' => ['ProblemID' => 'id']],
            [['PriorityID'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::class, 'targetAttribute' => ['PriorityID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ п/п',
            'Object' => 'Object',
            'InitID' => 'Iniciator',
            'Datastart' => 'Datastart',
            'Datadue' => 'Datadue',
            'Datamake' => 'Datamake',
            'Datasend' => 'Datasend',
            'ProblemID' => 'Problem',
            'Memo' => 'Memo',
            'Datatel' => 'Datatel',
            'Customername' => 'Customername',
            'Customertel' => 'Customertel',
            'Ahtung' => 'Ahtung',
            'MessageID' => 'Message',
            'PriorityID' => 'Priority',
        ];
    }

    /**
     * Gets query for [[Iniciator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInit()
    {
        return $this->hasOne(Init::class, ['id' => 'InitID']);
    }

    /**
     * Gets query for [[Message]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessage()
    {
        return $this->hasOne(Message::class, ['id' => 'MessageID']);
    }

    /**
     * Gets query for [[Priority]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::class, ['id' => 'PriorityID']);
    }

    /**
     * Gets query for [[Problem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProblem()
    {
        return $this->hasOne(Problem::class, ['id' => 'ProblemID']);
    }
}
