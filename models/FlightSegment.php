<?php

namespace app\models;

use yii\db\ActiveRecord;

class FlightSegment extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public function getTripServices()
    {
        return $this->hasOne(TripService::className(),['id' => 'flight_id' ]);
    }

    public function getairport_name()
    {
        return $this->hasMany(AirportName::className(),['airport_id' => 'arrAirportId']);
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{flight_segment}}';
    }

    public static function getDb()
    {
        return \Yii::$app->db;
    }
}