<?php

/**
 * Created by LeFranj.
 * Date: 29.12.2015
 * Time: 23:07
 */

class App
{
    public static $appName;
    public static $layout;
    public static $controller;
    public static $path;
    public static $params;
    public static $version = '0.1.1 (Alpha)';

    private static $config;

    public static function run($config)
    {
        try {

            self::$config = $config;
            self::$appName = $config['appName'];
            self::$layout = $config['layout'];
            self::$path = $config['path'];
            self::$params = $config['params'];
            self::_importClasses();
            self::startController();

        } catch (\AppException $e) {
            echo $e;
        }
    }

    public static function createAddress($url = '')
    {
        $scheme = $_SERVER['REQUEST_SCHEME'];
        $host   = $_SERVER['HTTP_HOST'];

        return $scheme.'://'.$host.'/'.$url;
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
                        throw new AppException('Wrong import parameter: "'.$item.'"');
                    }
                }
            } else {
                throw new AppException('Import param can\'t be empty!');
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
                throw new AppException('Wrong import param!');
            }
        }
    }

    private static function startController()
    {
        if (empty($_SERVER['QUERY_STRING'])) {
            $controller = new self::$config['defaultController']();
            $controller->actionIndex();
        } else {
            parse_str($_SERVER['QUERY_STRING'], $params);
            $params = explode('/', $params['path']);
            $controller = ucfirst(strtolower($params[0])).'Controller';

            if (class_exists($controller)) {
                $controller = new $controller();
                if (isset($params[1])) {
                    $action = 'action'.ucfirst(strtolower($params[1]));
                } else {
                    $action = 'actionIndex';
                }
            } elseif (count($params) == 1) {
                $controller = new self::$config['defaultController']();
                $action = 'action'.ucfirst(strtolower($params[0]));
                if (!method_exists($controller, $action)) {
                    throw new AppException('Can\'t find requested action "'.$action.'".');
                }
            } else {
                throw new AppException('Can\'t find requested controller.');
            }
            $controller->$action();
        }
    }
}