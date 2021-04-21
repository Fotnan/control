<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main".
 *
 * @property int $id
 * @property string $Object
 * @property int $Iniciator
 * @property string $Datastart
 * @property string $Datadue
 * @property string|null $Datamake
 * @property string|null $Datasend
 * @property int|null $Make
 * @property int|null $Send
 * @property int $Problem
 * @property string|null $Memo
 * @property int|null $Telephone
 * @property string|null $Datatel
 * @property string $Customername
 * @property string $Customertel
 * @property int|null $Ahtung
 * @property int|null $Message
 * @property int $Priority
 *
 * @property Message $message
 * @property Init $iniciator
 * @property Problem $problem
 * @property Priority $priority
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Object', 'Iniciator', 'Datastart', 'Datadue', 'Problem', 'Customername', 'Customertel', 'Priority'], 'required'],
            [['Iniciator', 'Make', 'Send', 'Problem', 'Telephone', 'Ahtung', 'Message', 'Priority'], 'integer'],
            [['Datastart', 'Datadue', 'Datamake', 'Datasend', 'Datatel'], 'safe'],
            [['Memo'], 'string'],
            [['Object'], 'string', 'max' => 10],
            [['Customername', 'Customertel'], 'string', 'max' => 255],
            [['Message'], 'exist', 'skipOnError' => true, 'targetClass' => Message::class, 'targetAttribute' => ['Message' => 'MessageID']],
            [['Iniciator'], 'exist', 'skipOnError' => true, 'targetClass' => Init::class, 'targetAttribute' => ['Iniciator' => 'InitID']],
            [['Problem'], 'exist', 'skipOnError' => true, 'targetClass' => Problem::class, 'targetAttribute' => ['Problem' => 'ProblemID']],
            [['Priority'], 'exist', 'skipOnError' => true, 'targetClass' => Priority::class, 'targetAttribute' => ['Priority' => 'PriorityID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Main ID',
            'Object' => 'Object',
            'Iniciator' => 'Iniciator',
            'Datastart' => 'Datastart',
            'Datadue' => 'Datadue',
            'Datamake' => 'Datamake',
            'Datasend' => 'Datasend',
            'Make' => 'Make',
            'Send' => 'Send',
            'Problem' => 'Problem',
            'Memo' => 'Memo',
            'Telephone' => 'Telephone',
            'Datatel' => 'Datatel',
            'Customername' => 'Customername',
            'Customertel' => 'Customertel',
            'Ahtung' => 'Ahtung',
            'Message' => 'Message',
            'Priority' => 'Priority',
        ];
    }

    /**
     * Gets query for [[Message]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessage()
    {
        return $this->hasOne(Message::class, ['MessageID' => 'Message']);
    }

    /**
     * Gets query for [[Iniciator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIniciator()
    {
        return $this->hasOne(Init::class, ['InitID' => 'Iniciator']);
    }

    /**
     * Gets query for [[Problem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProblem()
    {
        return $this->hasOne(Problem::class, ['ProblemID' => 'Problem']);
    }

    /**
     * Gets query for [[Priority]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPriority()
    {
        return $this->hasOne(Priority::class, ['PriorityID' => 'Priority']);
    }
}
