<?php

namespace backend\modules\controllers;

use yii\web\Controller;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBasicAuth;

class PlantasController extends ActiveController
{
    public $modelClass = 'app\models\Plantas';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    // public function init(){
    //     parent::init();
    //     \Yii::$app->user->enableSession = false;
    // }

    

// public function behaviors()
// {
//     $behaviors = parent::behaviors();
//     $behaviors['authenticator'] = [
//         'class' => HttpBasicAuth::class,
//     ];
//     return $behaviors;
// }
    
}