<?php

/*
 *  Author: Ronash Dhakal
 *  Email: ronash@outlook.com
 *  Git Username: ronashdkl
 */

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Room;
use yii\web\UploadedFile;
class RoomController extends Controller {

    public function actionCreate() {
        $model = new Room();
        $modelCanSave = false;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $model->fileImage = UploadedFile::getInstance($model, 'fileImage');
            if ($model->fileImage) {
                $model->fileImage
                        ->saveAs(Yii::getAlias('@uploadedfilesdir/' .
                                        $model->fileImage->baseName . '.' .
                                        $model->fileImage->extension));
               
            }

            $modelCanSave = true;
        }

        return $this->render('create', [
                    'model' => $model,
                    'modelSaved' => $modelCanSave
        ]);
    }

}
