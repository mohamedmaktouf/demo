<?php

namespace app\controllers;

use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\rest\ActiveController;

class ProductController extends ActiveController
{
    public $modelClass = 'app\models\Product';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    private $_verbs = ['GET','POST','PATCH','PUT','DELETE'];

    /**
     * @return array|array[]
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // remove auth filter
        unset($behaviors['authenticator']);

        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => Cors::class,
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Request-Method' => $this->_verbs,
                'Access-Control-Allow-Headers' => ['content-type'],
                'Access-Control-Request-Headers' => ['*'],
            ],
        ];
        

        return $behaviors;
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

}
