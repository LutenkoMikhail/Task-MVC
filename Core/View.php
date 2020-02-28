<?php


namespace Core;


class View
{
    protected static $viewPath = '\\App\\Views\\';

    /**
     * HTML page output
     * @param $view
     * @param array $args
     * @throws \Exception
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);
        $file = dirname(__DIR__) . static::$viewPath . $view;
        if (is_readable($file)) {
            require_once $file;
        } else {
            throw new \Exception("$file not found");
        }
    }

}
