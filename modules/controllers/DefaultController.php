<?php

namespace app\modules\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
/**
 * Default controller for the `modules` module
 */
class DefaultController extends Controller
{
    
    public function behaviors() {
        
        return [
            'access' => [
             'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['Admin'],
                    ],
                ],
            ],
        ];
        
    }
    
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
