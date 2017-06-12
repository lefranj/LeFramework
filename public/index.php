<?php
/**
 * Created by LeFranj.
 * Date: 29.12.2015
 * Time: 18:21
 */
$config = include_once(dirname(dirname(__FILE__))."/protected/config/main.php");

if ($config['params']['dev']) {
    ini_set('display_errors', '1');
}

include_once(dirname(dirname(__FILE__))."/protected/config/constants.php");
include_once(dirname(dirname(__FILE__)) . "/protected/components/framework/App.php");

App::run($config);
