<?php

namespace app\controllers;

use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function actionIndex()
    {
        return $this->render('index');
    }

}
