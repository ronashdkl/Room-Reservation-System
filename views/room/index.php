<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomSearh */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
    'tableOptions'=>['class'=>'table table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'floor',
            'room_number',
           
//            [
//                'attribute'=>'has_conditioner',
//                'value'=>function($model){
//                 return  Yii::$app->formatter->asBoolean($model->has_conditioner);      
//                }
//            ],
//            [
//                'attribute'=>'has_tv',
//                'value'=>function($model){
//                 return  Yii::$app->formatter->asBoolean($model->has_tv);      
//                }
//            ],
//           [
//                'attribute'=>'has_phone',
//                'value'=>function($model){
//                 return  Yii::$app->formatter->asBoolean($model->has_phone);      
//                }
//            ],
            'available_from',
            [
                'attribute'=>'price_per_day',
                'value'=> function($model){
                return Yii::$app->formatter->asCurrency($model->price_per_day,'EUR');
                }
            ],
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
