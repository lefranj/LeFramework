<?php

/**
 * Created by LeFranj.
 * Date: 18.01.2016
 * Time: 2:18
 */
class AppException extends Exception
{
    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return '<code>'.__CLASS__ . ": [{$this->code}]: {$this->message}\n</code>";
    }
}