<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\TripService;

class Trip extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public function gettrip_service()
    {
        return $this->hasMany(TripService::className(),['trip_id' => 'id']);
    }

    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{trip}}';
    }

    public static function getDb()
    {
        return \Yii::$app->db;
    }
}