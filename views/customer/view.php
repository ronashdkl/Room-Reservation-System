<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
?>
<div class="customer-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surname',
            'phone_number',
        ],
    ]) ?>

</div>
