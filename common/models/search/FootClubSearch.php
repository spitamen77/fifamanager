<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\FootClub;

/**
 * FootClubSearch represents the model behind the search form about `common\models\FootClub`.
 */
class FootClubSearch extends FootClub
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rank', 'played', 'points'], 'integer'],
            [['club', 'abbr'], 'safe'],
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
        $query = FootClub::find();

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
            'rank' => $this->rank,
            'played' => $this->played,
            'points' => $this->points,
        ]);

        $query->andFilterWhere(['like', 'club', $this->club])
            ->andFilterWhere(['like', 'abbr', $this->abbr]);

        return $dataProvider;
    }
}
