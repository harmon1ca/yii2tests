<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trip;

class TripQuery extends Trip
{
    const COPRORATE_ID = 3;
    const SERVICE_ID = 2;


    public function query($param)
    {

        $fligh_id = FlightSegment::find()
            ->innerJoinWith([
                'airport_name' => function ($query) use ($param) {
                    $query->andWhere(['like', 'value',$param]);
                }
            ]);

        $query = Trip::find()
            ->innerJoinWith('trip_service',false)
            ->innerJoin(['m' => $fligh_id],'trip_service.id = m.flight_id')
            ->where(['trip.corporate_id' => self::COPRORATE_ID])
            ->andWhere(['trip_service.service_id' => self::SERVICE_ID]);

        $dataprovider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $dataprovider;
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trip';
    }
}