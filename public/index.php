<?php
/**
 * Created by PhpStorm.
 * User: GrIgar45
 * Date: 29.12.2015
 * Time: 18:21
 */
ini_set('display_errors', '1');
$config = include_once(dirname(dirname(__FILE__))
    .DIRECTORY_SEPARATOR."protected".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."main.php");
include_once(dirname(dirname(__FILE__))
    .DIRECTORY_SEPARATOR."protected".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."constants.php");
include_once(dirname(dirname(__FILE__))
    .DIRECTORY_SEPARATOR."protected".DIRECTORY_SEPARATOR."components".DIRECTORY_SEPARATOR."framework"
    .DIRECTORY_SEPARATOR."App.php");

App::run($config);