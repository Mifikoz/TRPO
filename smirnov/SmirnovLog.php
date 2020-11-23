<?php


namespace smirnov;
use core;

class SmirnovLog extends core\LogAbstract implements core\LogInterface
{

    public static function log($str) {
        SmirnovLog::Instance()->_log($str);
    }

    public function _log($str) {
        if (isset(SmirnovLog::Instance()->log)) {
            SmirnovLog::Instance()->log[]= $str;
        }
    }

    public static function write() {
        SmirnovLog::Instance()->_write();
    }

    public function _write() {
        echo implode(SmirnovLog::Instance()->log);
    }

}