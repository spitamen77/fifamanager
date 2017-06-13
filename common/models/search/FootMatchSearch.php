<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FootMatch;

/**
 * FootMatchSearch represents the model behind the search form about `common\models\FootMatch`.
 */
class FootMatchSearch extends FootMatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'matchweek', 'team1_id', 'team2_id', 'team1_score', 'team2_score'], 'integer'],
            [['data_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = FootMatch::find();

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
            'matchweek' => $this->matchweek,
            'team1_id' => $this->team1_id,
            'team2_id' => $this->team2_id,
            'team1_score' => $this->team1_score,
            'team2_score' => $this->team2_score,
        ]);

        $query->andFilterWhere(['like', 'data_time', $this->data_time]);

        return $dataProvider;
    }
}
