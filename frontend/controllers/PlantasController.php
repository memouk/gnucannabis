<?php
namespace app\controllers;

use app\models\Plantas;
use yii\rest\ActiveController;

class PlantasController extends ActiveController
{
    public $modelClass = Plantas::class;
}