<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResumeVolunteer;

/**
 * ResumeVolunteerSearch represents the model behind the search form of `app\models\ResumeVolunteer`.
 */
class ResumeVolunteerSearch extends ResumeVolunteer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdResumeVolunteer', 'idUsers', 'idResume'], 'integer'],
            [['Title', 'Field', 'Website', 'Year', 'Description'], 'safe'],
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
        $query = ResumeVolunteer::find();

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
            'IdResumeVolunteer' => $this->IdResumeVolunteer,
            'Year' => $this->Year,
            'idUsers' => $this->idUsers,
            'idResume' => $this->idResume,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Field', $this->Field])
            ->andFilterWhere(['like', 'Website', $this->Website])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
