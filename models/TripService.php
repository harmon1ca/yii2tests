<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Trip;

class TripService extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public function getTrip()
    {
        return $this->hasOne(Trip::className(),['id' => 'trip_id' ]);
    }

    public function getflight_segment()
    {
        return $this->hasMany(FlightSegment::className(),['flight_id' => 'id']);
    }

    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{trip_service}}';
    }

    public static function getDb()
    {
        return \Yii::$app->db;
    }
}