<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class AirportName extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function getDb()
    {
//        return Yii::$app->get('db2');
        return \Yii::$app->db2;
    }

    public function getFlightSegment()
    {
        return $this->hasOne(FlightSegment::className(),['arrAirportId' => 'airport_id' ]);
    }

    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{nemo_guide_etalon}}.{{airport_name}}';
//        return '{{' . self::getDb()->getSchema()->getRawTableName(parent::tableName()) . '}}';
//        return 'airport_name';
    }



}