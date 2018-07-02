<?php

namespace Fuinshare\Express\Trackers;

use Fuinshare\Express\Waybill;


interface TrackerInterface
{
    /**
     * Track a willbay and return traces
     *
     * @param Waybill $waybill
     * @return void
     * @throws \Fuinshare\Express\Exceptions\TrackingException
     */
    function track(Waybill $waybill);

    static function getSupportedExpresses();

    static function isSupported($express);

    static function getExpressCode($expressName);
}