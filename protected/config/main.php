<?php
/**
 * Created by PhpStorm.
 * User: F@N
 * Date: 29.12.2015
 * Time: 22:07
 */

return [
    // Application name
    'appName'           => 'WebApp',
    // Application layout
    'layout'            => 'layout'.DIRECTORY_SEPARATOR.'main',
    // Default application controller
    'defaultController' => 'SiteController',
    // Files that will be automatically included to application
    'import'            => [
        'components',
        'models',
        'controllers',
        'vendor.VarDumper',
    ],
    // Database credentials
    'db'                => [
        'host'     => '127.0.0.1',
        'user'     => 'root',
        'password' => 'root'
    ],
    // Path parameters
    'path'              => [
        'webRoot' => dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'public',
        'basePath' => dirname(dirname(__FILE__)),
        'dataPath' => dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'data',
    ],
    // Custom params
    'params'            => [],
];