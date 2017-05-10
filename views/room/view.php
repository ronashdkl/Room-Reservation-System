<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Room */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
                'attribute'=>'available_from',
                'value'=>function($model){
                 return  Yii::$app->formatter->asDate($model->available_from,'php:Y-M-d D');      
                }
            ],
          
           [
                'attribute'=>'price_per_day',
                'value'=> function($model){
                return Yii::$app->formatter->asCurrency($model->price_per_day,'EUR');
                }
            ],
            'description:ntext',
        ],
    ]) ?>

</div>
