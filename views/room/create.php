<?php
/*
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
?>

<?php if ($modelSaved) { ?>
    <div class="alert alert-success">
        Model Ready to saved!
        <br /><br />    These are values: 
        <br />    Floor: <?php echo $model->floor; ?> <br />
        Room Number: <?php echo $model->room_number; ?> <br />   
        Has conditioner: <?php echo Yii::$app->formatter->asBoolean($model->has_conditioner); ?> <br />
        Has TV: <?php echo Yii::$app->formatter->asBoolean($model->has_tv); ?> <br />
        Has phone: <?php echo Yii::$app->formatter->asBoolean($model->has_phone); ?> <br />  
        Available from (mm/dd/yyyy): <?php echo Yii::$app->formatter->asDate($model->available_from, 'php:m/d/Y'); ?> <br />  
        Price per day: <?php echo Yii::$app->formatter->asCurrency($model->price_per_day, 'EUR'); ?> <br /> 
        <?php
        if (isset($model->fileImage)) {
            ?>
           
          <?= Html::img(Yii::$app->request->baseUrl.'/image/'. $model->fileImage->name, ['alt'=>'Room Picture', 'class'=>'img-round']);?>
 <?php
        }
        ?>

    </div>

<?php } ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' =>  'multipart/form-data']]); ?>  
<div class="row">
    <div class="col-lg-12">
        <h1>Room Form</h1>

        <?= $form->field($model, 'floor')->textInput() ?>
        <?= $form->field($model, 'room_number')->textInput() ?>
        <?= $form->field($model, 'has_conditioner')->checkbox() ?>
        <?= $form->field($model, 'has_tv')->checkbox() ?>
        <?= $form->field($model, 'has_phone')->checkbox() ?>
        <?= $form->field($model, 'available_from')->textInput() ?>
        <?= $form->field($model, 'price_per_day')->textInput() ?>
        <?= $form->field($model, 'description')->textarea() ?>
        <?= $form->field($model, 'fileImage')->fileInput() ?>

    </div>
</div>
<div class="form-group">
    <?= Html::submitButton('create', ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
