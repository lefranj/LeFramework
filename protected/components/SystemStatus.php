<?php

/**
 * Created by PhpStorm.
 * User: F@N
 * Date: 29.01.2016
 * Time: 12:02
 */
class SystemStatus
{
    public static function sensors()
    {
        $cmd = 'sensors';

        return shell_exec($cmd);
    }

    public static function top()
    {
        $cmd = 'top -n 1 -b';

        return shell_exec($cmd);
    }
}