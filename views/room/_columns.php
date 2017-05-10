<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'floor',
    ],
   
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'room_number',
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'has_conditioner', 
        'vAlign'=>'middle',
        'trueLabel'=>'Yes',
        'falseLabel'=>'No'
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'has_tv', 
        'vAlign'=>'middle',
        'trueLabel'=>'Yes',
        'falseLabel'=>'No'
    ],
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'has_phone', 
        'vAlign'=>'middle',
        'trueLabel'=>'Yes',
        'falseLabel'=>'No'
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'available_from',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'price_per_day',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'description',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   