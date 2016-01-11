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

    public $content ='';


    public function __construct()
    {
        //...
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
            $this->content = ob_get_clean();
        } else {
            throw new Exception('Can\'t find requested page.');
        }
        include_once(BASE_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.App::$layout.'.php');
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
}