<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reservation */
?>
<div class="reservation-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'room_id',
            'customer_id',
            'price_per_day',
            'date_from',
            'date_to',
            'reservation_date',
        ],
    ]) ?>

</div>
