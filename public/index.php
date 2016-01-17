<?php
/**
 * Created by LeFranj.
 * Date: 29.12.2015
 * Time: 18:21
 */
ini_set('display_errors', '1');
$config = include_once(dirname(dirname(__FILE__))."/protected/config/main.php");
include_once(dirname(dirname(__FILE__))."/protected/config/constants.php");
include_once(dirname(dirname(__FILE__))."/protected/components/framework/App.php");

App::run($config);