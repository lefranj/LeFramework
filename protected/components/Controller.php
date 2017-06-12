<?php

/**
 * Created by LeFranj.
 * Date: 29.12.2015
 * Time: 22:01
 */
class Controller
{
    public $breadcrumbs = [];
    public $layout;
    public $title = '';
    public $caption = '';

    protected $model;


    public function __construct()
    {
        $this->layout = App::$layout;
    }

    public function createAddress($url)
    {
        return App::createAddress($url);
    }

    protected function render($view, $params = []/*, $return = false*/)
    {
        $controller = str_replace('Controller', '', lcfirst(get_class($this)));
        $file = BASE_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR .$controller
            .DIRECTORY_SEPARATOR.$view.'.php';

        if (is_file($file)) {
            extract($params);
            ob_start();
            include($file);
            $content = ob_get_clean();
        } else {
            throw new AppException('Can\'t find requested page.');
        }

        if (DEV_MODE) {
            $isMin = '';
        } else {
            $isMin = '.min';
        }

        $layout = BASE_PATH
            .DIRECTORY_SEPARATOR
            .'views'
            .DIRECTORY_SEPARATOR
            .'layout'
            .DIRECTORY_SEPARATOR
            .$this->layout
            .'.php';

        include_once($layout);
    }

    protected function renderPart($view, $params = []/*, $return = false*/)
    {
        $controller = str_replace('Controller', '', lcfirst(get_class($this)));
        $file = BASE_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR .$controller
            .DIRECTORY_SEPARATOR.$view.'.php';
        if (is_file($file)) {
            extract($params);
            ob_start();
            include($file);
            $content = ob_get_clean();
            echo $content;
        } else {
            throw new AppException('Can\'t find requested page.');
        }
    }

    protected function getBreadcrumbs()
    {
        $default = [
            'Home' => [
                'url' => '/',
                'active' => false,
            ]
        ];
        $this->breadcrumbs = array_merge($default, $this->breadcrumbs);
        $bcStr = '';
        foreach ($this->breadcrumbs as $name => $item) {
            if ($item['active']) {
                $bcStr .= '<li class="active">'.$name.'</li>';
            } else {
                $bcStr .= '<li><a href="'.$item['url'].'">'.$name.'</a></li>';
            }
        }

        return $bcStr;
    }

    public function getModel($controller)
    {
        $modelName = str_replace('Controller', '', ucfirst(get_class($controller)));
        return new $modelName();
    }
}
