<?php

namespace app\controllers;

use app\models\AirportName;
use app\models\Trip;
use app\models\TripQuery;

use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;

class TripController extends Controller
{


    public function actionIndex()
    {

        $tripquery = new TripQuery();

        $dataprovider = $tripquery->query(Yii::$app->request->get('param'));

        return $this->render('index',[
            'dataProvider' => $dataprovider
        ]);
    }

    public function actionYest()
    {
        $names = AirportName::find()
            ->limit(10)
            ->all();

        return $this->render('yest',[
            'names' =>  $names
        ]);
    }
}