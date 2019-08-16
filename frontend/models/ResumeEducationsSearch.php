<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResumeEducations;
use app\models\OptionsUniversities;

/**
 * ResumeEducationsSearch represents the model behind the search form of `app\models\ResumeEducations`.
 */
class ResumeEducationsSearch extends ResumeEducations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdResumeEducations', 'idUniversities', 'idDegree', 'idUsers', 'idResume'], 'integer'],
            [['Field', 'Description', 'StartDate', 'EndDate', 'CreatedAt'], 'safe'],
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
        $query = ResumeEducations::find();

        // add conditions that should always apply here
        $query->joinWith([ 'universities', 'options']);
        //$query->join('left join', 'Options', "Options.IdOptions=ResumeEducations.idDegree and Options.OptionType='degree'");
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
            'IdResumeEducations' => $this->IdResumeEducations,
            'idUniversities' => $this->idUniversities,
            'idDegree' => $this->idDegree,
            'StartDate' => $this->StartDate,
            'EndDate' => $this->EndDate,
            'CreatedAt' => $this->CreatedAt,
            'idUsers' => $this->idUsers,
            'idResume' => $this->idResume,
        ]);

        $query->andFilterWhere(['like', 'Field', $this->Field])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
