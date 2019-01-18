<?php

namespace App\Libs;

interface PaymentInterface{

    /**
     * @param       $action
     * @param array $data
     * @return mixed
     */
    public static function makeRequest($action, array $data);

    /**
     * @param array $requestMap
     * @return mixed
     */
    public static function inquiry(array $requestMap);

    /**
     * @param array $requestMap
     * @return mixed
     */
    public static function payment(array $requestMap);


}