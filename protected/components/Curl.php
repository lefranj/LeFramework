<?php

/**
 * Created by LeFranj.
 * Date: 23.01.2016
 * Time: 15:29
 */
class Curl
{
    public function get($url, $params=[])
    {
        $params = self::getParametersString($params);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 0);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        return curl_exec( $ch );
    }

    public function post($url, $params=[])
    {
        $params = self::getParametersString($params);
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 1);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        return curl_exec( $ch );
    }

    private static function getParametersString($params)
    {
        $paramStr = '';
        if (!empty($params)) {
            foreach ($params as $name => $value) {
                if (!empty($paramStr)) {
                    $paramStr .= '&';
                }
                $paramStr .= $name.'='.$value;
            }
        }

        return $paramStr;
    }
}