<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RccUser;

/**
 * RccUserSearch represents the model behind the search form of `app\models\RccUser`.
 */
class RccUserSearch extends RccUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'user_integral', 'insert_id', 'update_id'], 'integer'],
            [['user_name', 'insert_datetime', 'update_datetime'], 'safe'],
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
        $query = RccUser::find();

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
            'user_id' => $this->user_id,
            'user_type' => $this->user_type,
            'user_integral' => $this->user_integral,
            'insert_id' => $this->insert_id,
            'update_id' => $this->update_id,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'insert_datetime', $this->insert_datetime])
            ->andFilterWhere(['like', 'update_datetime', $this->update_datetime]);

        return $dataProvider;
    }
}
