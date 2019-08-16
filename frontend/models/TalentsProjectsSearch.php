<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TalentsProjects;

/**
 * TalentsProjectsSearch represents the model behind the search form of `app\models\TalentsProjects`.
 */
class TalentsProjectsSearch extends TalentsProjects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdTalentsProjects', 'idUsers', 'State'], 'integer'],
            [['Title', 'Description', 'CreatedAt'], 'safe'],
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
        $query = TalentsProjects::find();

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
            'IdTalentsProjects' => $this->IdTalentsProjects,
            'idUsers' => $this->idUsers,
            'State' => $this->State,
            'CreatedAt' => $this->CreatedAt,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
