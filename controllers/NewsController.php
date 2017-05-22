<?php

/*
 * Author: Ronash Dhakal
 */

namespace app\controllers;

use yii;
use yii\web\Controller;

class NewsController extends Controller {

    public function actionIndex() {
        echo "My first controller";
    }

    public function DataItems() {
        $newsList = [
            ['id'=>1, 'title' => 'Nepal Election', 'date' => '2074-01-31'],
            ['id'=>2, 'title' => 'First man on the moon', 'date' => '1969-07-20']
            
        ];

        return $newsList;
    }

    public function actionItemList() {
        $newsList = $this->DataItems();
        return $this->render('itemLists', [
                    'newsList' => $newsList
        ]);
    }
    public function actionItemDetail($id) {
        $newsList = $this->DataItems();
        $item = null;
        
        foreach ($newsList as $n) {
            ($id==$n['id']) ? $item = $n : $item; 
        }
        
        return $this->render('itemDetail',['item'=>$item]);
        
    }

}
