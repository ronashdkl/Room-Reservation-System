<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reservation;

/**
 * ReservationSearch represents the model behind the search form about `app\models\Reservation`.
 */
class ReservationSearch extends Reservation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_id', 'customer_id'], 'integer'],
            [['price_per_day'], 'number'],
            [['date_from', 'date_to', 'reservation_date'], 'safe'],
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
        $query = Reservation::find();

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
            'room_id' => $this->room_id,
            'customer_id' => $this->customer_id,
            'price_per_day' => $this->price_per_day,
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'reservation_date' => $this->reservation_date,
        ]);

        return $dataProvider;
    }
}
