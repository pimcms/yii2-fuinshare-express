<?php

define('YII_DEBUG', true);

require_once '../vendor/autoload.php';
require_once '../vendor/yiisoft/yii2/Yii.php';

use Fuinshare\Express\Waybill;
use Fuinshare\Express\Trackers\Kuaidi100;
use Fuinshare\Express\Trackers\Kuaidiwang;
use Fuinshare\Express\Exceptions\TrackingException;

$wb = \Yii::createObject(
    [
        'class' => 'Fuinshare\Express\Waybill',
        'id' => '70044318801859',
        'express' => '百世',
    ]
);

$tracker = \Yii::createObject(
    [
        'class' => 'Fuinshare\Express\Trackers\Kuaidi100',
    ]
);

try {
    $traces = $wb->getTraces($tracker);
} catch (TrackingException $ex) {
    print_r($ex->getResponse());
    exit;
}

echo json_encode($wb, JSON_PRETTY_PRINT);