<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResumeQualification;

/**
 * ResumeQualificationSearch represents the model behind the search form of `app\models\ResumeQualification`.
 */
class ResumeQualificationSearch extends ResumeQualification
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdResumeQualification', 'State', 'idUsers', 'idResume'], 'integer'],
            [['Name'], 'safe'],
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
        $query = ResumeQualification::find();

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
            'IdResumeQualification' => $this->IdResumeQualification,
            'State' => $this->State,
            'idUsers' => $this->idUsers,
            'idResume' => $this->idResume,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
