<?php

/**
 * Created by PhpStorm.
 * User: F@N
 * Date: 29.12.2015
 * Time: 23:07
 */

class App
{
    public static $appName;
    public static $layout;
    public static $controller;
    public static $version = '0.1.1 (Alpha)';

    private static $config;

    public static function run($config)
    {
        try {

            self::$config = $config;
            self::$appName = $config['appName'];
            self::$layout = $config['layout'];
            self::_importClasses();
            self::startController();

        } catch (\Exception $e) {
            echo 'SERVER ERROR: '.$e;
        }
    }

    private static function _importClasses()
    {
        foreach (self::$config['import'] as $item) {
            $stash = explode('.', $item);

            if (!empty($item)) {
                $path = BASE_PATH.DIRECTORY_SEPARATOR;
                foreach ($stash as $unit) {
                    if (is_dir($path.$unit)) {
                        $path .= $unit.DIRECTORY_SEPARATOR;
                    } elseif (is_file($path.$unit.'.php')) {
                        $path .= $unit.'.php';
                    } else {
                        throw new Exception('Wrong import parameter: "'.$item.'"');
                    }
                }
            } else {
                throw new Exception('Import param can\'t be empty!');
            }

            if (!empty($path) && is_file($path)) {
                include_once($path);
            } elseif (!empty($path) && is_dir($path)) {
                $dir = scandir($path);
                foreach ($dir as $dirItem) {
                    if (is_file($path.DIRECTORY_SEPARATOR.$dirItem)) {
                        include_once($path.DIRECTORY_SEPARATOR.$dirItem);
                    } else {
                        continue;
                    }
                }
            } else {
                throw new Exception('Wrong import param!');
            }
        }
    }

    private static function startController()
    {
        if (!isset($_REQUEST['q'])) {
            $controller = new self::$config['defaultController']();
            $controller->actionIndex();
        } else {

        }
    }
}