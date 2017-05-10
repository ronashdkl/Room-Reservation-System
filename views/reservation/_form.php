<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Room;
use app\models\Customer;
/* @var $this yii\web\View */
/* @var $model app\models\Reservation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->dropDownList(
 ArrayHelper::map(Room::find()->select(['room_number','id'])->all(), 'id', 'room_number'),
              ['prompt'=>"Select Room Number",]
            ) ?>

   <?= $form->field($model, 'customer_id')->dropDownList(
 ArrayHelper::map(Customer::find()->select(['id','name'])->all(), 'id', 'name'),
           ['prompt'=>"Select Customer",]
            ) ?>

    <?= $form->field($model, 'price_per_day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_from')->textInput() ?>

    <?= $form->field($model, 'date_to')->textInput() ?>

  

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
