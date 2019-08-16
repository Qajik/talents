<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResumeExperiences;

/**
 * ResumeExperiencesSearch represents the model behind the search form of `app\models\ResumeExperiences`.
 */
class ResumeExperiencesSearch extends ResumeExperiences
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdResumeExperiences', 'idOptionsEmploymentsList', 'idDiscipline', 'idCareerLevel', 'idCompany', 'idIndustries', 'idSegments', 'idLegalForm', 'idEmployees', 'IsCurrentJob', 'idUsers', 'idResume'], 'integer'],
            [['JobTitle', 'Description', 'CompanyName', 'CompanyWebsite', 'StartDate', 'EndDate', 'CreatedAt'], 'safe'],
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
        $query = ResumeExperiences::find();

        // add conditions that should always apply here
        $query->joinWith([ 
            'industries', 
            'segments', 
            'employees', 
            'company',
            'discipline as discipline',
            'careerLevel as careerLevel',
            'legalForm as legalForm',
            'optionsEmploymentsList as employment'
            ]);
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
            'IdResumeExperiences' => $this->IdResumeExperiences,
            'idOptionsEmploymentsList' => $this->idOptionsEmploymentsList,
            'idDiscipline' => $this->idDiscipline,
            'idCareerLevel' => $this->idCareerLevel,
            'idCompany' => $this->idCompany,
            'idIndustries' => $this->idIndustries,
            'idSegments' => $this->idSegments,
            'idLegalForm' => $this->idLegalForm,
            'idEmployees' => $this->idEmployees,
            'StartDate' => $this->StartDate,
            'EndDate' => $this->EndDate,
            'IsCurrentJob' => $this->IsCurrentJob,
            'CreatedAt' => $this->CreatedAt,
            'ResumeExperiences.idUsers' => $this->idUsers,
            'ResumeExperiences.idResume' => $this->idResume,
        ]);

        $query->andFilterWhere(['like', 'JobTitle', $this->JobTitle])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'CompanyName', $this->CompanyName])
            ->andFilterWhere(['like', 'CompanyWebsite', $this->CompanyWebsite]);

        return $dataProvider;
    }
}
