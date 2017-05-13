<?php
/* @var $this yii\web\View */
?>
<h1> Rooms</h1>
<br/>

<div class="row">

<?php foreach ($room as $data): ?>
    <div class="col-md-4">
        <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="http://placehold.it/64x64" alt="Room Image">
    </a>
  </div>
  <div class="media-body">
      <h4 class="media-heading">Price: <?= Yii::$app->formatter->asCurrency($data->price_per_day,'EUR') ?> /day</h4>
      <table class="table">
         <tr>
  <th>Floor</th>
  <td> <?=  $data->floor; ?></td>
         </tr>
         <tr>
  <th>Room Number</th>
  <td> <?=  $data->room_number; ?></td>
         </tr>
         <tr>
  <th>Has Phone</th>
  <td> <?= $data->has_phone? "Yes":"No" ?></td>
         </tr>
         <tr>
  <th>Has TV</th>
  <td> <?= $data->has_tv? "Yes":"No" ?></td>
         </tr>
         <tr>
   <th>Has Conditioner</th>
  <td> <?= $data->has_conditioner? "Yes":"No" ?></td>
         </tr>
         <tr>
   <th>Available Date</th>
  <td> <?= Yii::$app->formatter->asDate($data->available_from,'php:Y-M-d D') ?></td>
         </tr>
  
</table>
 
  </div>
</div>
    

</div>
    
    <?php    endforeach; ?>
</div>




