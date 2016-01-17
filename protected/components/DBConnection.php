<?php

/**
 * Created by LeFranj.
 * Date: 29.12.2015
 * Time: 23:15
 */
class DBConnection
{
    private $host;
    private $user;
    private $pass;

    public function __construct($config)
    {
        $this->host = $config['host'];
        $this->user = $config['user'];
        $this->pass = $config['pass'];
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }
}