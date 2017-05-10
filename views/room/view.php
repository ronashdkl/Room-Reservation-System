<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
?>
<div class="room-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'floor',
            'room_number',
         [
                'attribute'=>'has_conditioner',
                'value'=>function($model){
                 return  Yii::$app->formatter->asBoolean($model->has_conditioner);      
                }
            ],
            [
                'attribute'=>'has_tv',
                'value'=>function($model){
                 return  Yii::$app->formatter->asBoolean($model->has_tv);      
                }
            ],
           [
                'attribute'=>'has_phone',
                'value'=>function($model){
                 return  Yii::$app->formatter->asBoolean($model->has_phone);      
                }
            ],
          
            [
                'attribute'=>'price_per_day',
                'value'=> function($model){
                return Yii::$app->formatter->asCurrency($model->price_per_day,'EUR');
                }
            ],
                      [
                'attribute'=>'available_from',
                'value'=>function($model){
                 return  Yii::$app->formatter->asDate($model->available_from,'php:Y-M-d D');      
                }
            ],
            'description:ntext',
        ],
    ]) ?>

</div>
