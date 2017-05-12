<?php

namespace app\controllers;
use app\models\Room;
class RoomController extends \yii\web\Controller
{
    public $layout = "frontend";
    
    public function actionIndex()
    {
        
      
        return $this->render('index',[
            'room'=>$this->data()
        ]);
    }

    
    protected function data (){
        return Room::find()->all();
    }
}
