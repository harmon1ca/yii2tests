<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Trip';
?>

<div class="site-index">
    <h4>Trip</h4>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'corporate_id',
        'user_id',
        'created_at:datetime',
        'updated_at:datetime',
        'coordination_at:datetime',
        'saved_at:datetime',
        'tag_le_id',
        'trip_purpose_id',
        'trip_purpose_parent_id',
        'trip_purpose_desc',
        'status',
    ],
]) ?>





</div>
