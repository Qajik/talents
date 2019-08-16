<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Options;

/**
 * OptionsSearch represents the model behind the search form of `app\models\Options`.
 */
class OptionsSearch extends Options
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdOptions', 'Status'], 'integer'],
            [['Name', 'OptionType'], 'safe'],
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
        $query = Options::find();

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
            'IdOptions' => $this->IdOptions,
            'Status' => $this->Status,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'OptionType', $this->OptionType]);

        return $dataProvider;
    }
}
