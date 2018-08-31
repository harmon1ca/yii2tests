<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Tested';
?>

<?php foreach($names as $name): ?>
    <p><?= Html::encode($name->value) ?></P>
<?php endforeach; ?>