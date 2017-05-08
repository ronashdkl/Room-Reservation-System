<?php

/*
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

namespace app\models;

use yii;
use yii\base\Model;

class Room extends Model {
    /*
     * Methods
     */

    public $floor;
    public $room_number;
    public $has_conditioner;
    public $has_tv;
    public $has_phone;
    public $available_from;
    public $price_per_day;
    public $description;

    public function attributeLabels() {
        return [
            'floor' => 'Floor',
            'room_number' => 'Room Number',
            'has_conditioner' => 'Condition Available',
            'has_tv' => 'TV Available',
            'has_phone' => 'Phone available',
            'available_from' => 'Available from',
            'price_per_day' => 'Price (EUR/day)',
            'description' => 'Description',
        ];
    }
    public function rules() {
        return [
            ['floor','integer','min'=>0],
            ['room_number','integer','min'=>0],
            [['has_conditioner','has_tv','has_phone'],'integer','min'=>0,'max'=>1],
            ['available_from','date','format'=>'php:y-m-d'],
            ['price_per_day','number','min'=>0],
            ['description','string','max'=>500]
            
        ];
    }
}
