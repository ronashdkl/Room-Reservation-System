<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Room;

/**
 * RoomSearch represents the model behind the search form about `app\models\Room`.
 */
class RoomSearch extends Room
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'floor', 'room_number', 'has_conditioner', 'has_tv', 'has_phone'], 'integer'],
            [['available_from', 'description'], 'safe'],
            [['price_per_day'], 'number'],
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
        $query = Room::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'floor' => $this->floor,
            'room_number' => $this->room_number,
            'has_conditioner' => $this->has_conditioner,
            'has_tv' => $this->has_tv,
            'has_phone' => $this->has_phone,
            'available_from' => $this->available_from,
            'price_per_day' => $this->price_per_day,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
