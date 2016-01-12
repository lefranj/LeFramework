<?php

/**
 * Created by PhpStorm.
 * User: F@N
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
        $this->model = self::getModel();
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
            throw new Exception('Can\'t find requested page.');
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

    private function getModel()
    {
        $modelName = str_replace('Controller', '', ucfirst(get_class($this)));
        return new $modelName();
    }
}