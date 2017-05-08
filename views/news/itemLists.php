<?php
/*
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */
?>
<table>
    <tr>
        <th> Title</th>
        <th>Date</th>
    </tr>
<?php foreach ($newsList as $list) {
    ?>
        <tr>
        <?php
        /*
         * Create Url
         * Yii::$app->urlManager->createUrl(['news/item-detail','id'=>$list['id']]) 
         */
        ?>
            <td><a href="<?php echo Yii::$app->urlManager->createUrl(['news/item-detail', 'id' => $list['id']]) ?>"><?= $list['title'] ?></a></td>

            <?php
            /*
             * Date formater 
             * Yii::$app->formatter->asDatetime($list['date'],"php:d/m/y"
             */
            ?>
            <td><?= Yii::$app->formatter->asDatetime($list['date'], "php:d/m/y") ?></td>

        </tr>
    <?php }
?>
</table>
