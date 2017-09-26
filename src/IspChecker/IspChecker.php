<?php

namespace IspChecker;

use Curl\Curl;

class IspChecker {

    public static function check($ip = '') : array {

        $curl = new Curl();

        $curl->get("http://ip-api.com/php/$ip");

        exec('ab -n 1 -c 1 https://www.prosimples.com.br/', $test);

        $result = ['isp' => unserialize($curl->response), 'test' => $test];

        return $result;
    }
}