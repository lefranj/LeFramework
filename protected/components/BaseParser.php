<?php

/**
 * Created by LeFranj.
 * Date: 18.01.2016
 * Time: 23:49
 */
class BaseParser
{
    public static function parseIni($ini, $useSections = true)
    {
        $path = App::$path['dataDir'];
        $file = $path.DIRECTORY_SEPARATOR.$ini.'.ini';
        if (!is_file($file))
            return [];
        else
            return parse_ini_file($path.DIRECTORY_SEPARATOR.$ini.'.ini', $useSections);
    }
}