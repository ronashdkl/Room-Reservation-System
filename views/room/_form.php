<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'room_number')->textInput() ?>
    <?=
    $form->field($model, 'has_conditioner')->widget(CheckboxX::classname(), [
        'autoLabel' => true
    ])->label(false);
    ?>
<?=
$form->field($model, 'has_tv')->widget(CheckboxX::classname(), [
    'autoLabel' => true
])->label(false);
?>


    <?=
    $form->field($model, 'has_phone')->widget(CheckboxX::classname(), [
        'autoLabel' => true
    ])->label(false);
    ?>



    <?= $form->field($model, 'available_from')->textInput() ?>

        <?= $form->field($model, 'price_per_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


<?php if (!Yii::$app->request->isAjax) { ?>
        <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
<?php } ?>

<?php ActiveForm::end(); ?>

</div>
