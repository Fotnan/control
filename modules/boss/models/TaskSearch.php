<?php

namespace app\modules\boss\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\boss\models\Task;

/**
 * TaskSearch represents the model behind the search form of `app\modules\boss\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'InitID', 'ProblemID', 'Ahtung', 'MessageID', 'PriorityID'], 'integer'],
            [['Object', 'Datastart', 'Datadue', 'Datamake', 'Datasend', 'Memo', 'Datatel', 'Customername', 'Customertel'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Task::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'InitID' => $this->InitID,
            'Datastart' => $this->Datastart,
            'Datadue' => $this->Datadue,
            'Datamake' => $this->Datamake,
            'Datasend' => $this->Datasend,
            'ProblemID' => $this->ProblemID,
            'Datatel' => $this->Datatel,
            'Ahtung' => $this->Ahtung,
            'MessageID' => $this->MessageID,
            'PriorityID' => $this->PriorityID,
        ]);

        $query->andFilterWhere(['like', 'Object', $this->Object])
            ->andFilterWhere(['like', 'Memo', $this->Memo])
            ->andFilterWhere(['like', 'Customername', $this->Customername])
            ->andFilterWhere(['like', 'Customertel', $this->Customertel]);

        return $dataProvider;
    }
}
