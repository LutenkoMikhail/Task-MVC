<?php
require_once '..\vendor\autoload.php';
require_once dirname(__DIR__) . '/Config/constants.php';
require_once dirname(__DIR__) . '/Config/database.php';
require_once dirname(__DIR__) . '/App/Helpers/FunctionHelpers.php';


ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if (session_start() === true) {
    $router = new Core\Router();
    require_once dirname(__DIR__) . '/Routes/web.php';
    if (!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) {
        $router->dispatch($_SERVER['REQUEST_URI']);
} else {
        die("Error can not create Session!");
    }
}






