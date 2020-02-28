<?php
$router->add('', ['controller' => 'TaskController', 'action' => 'index']);
$router->add('home', ['controller' => 'TaskController', 'action' => 'index']);
$router->add('task/{id:\d+}', ['controller' => 'TaskController', 'action' => 'show']);
$router->add('task/create', ['controller' => 'TaskController', 'action' => 'create']);
$router->add('task/store', ['controller' => 'TaskController', 'action' => 'store']);
$router->add('task/{id:\d+}/edit', ['controller' => 'TaskController', 'action' => 'edit']);
$router->add('task/{id:\d+}/complited', ['controller' => 'TaskController', 'action' => 'complited']);
$router->add('task/{id:\d+}/update', ['controller' => 'TaskController', 'action' => 'update']);


$router->add('login', ['controller' => 'AuthController', 'action' => 'login']);
$router->add('registration', ['controller' => 'AuthController', 'action' => 'register']);
$router->add('auth', ['controller' => 'AuthClass', 'action' => 'auth']);
$router->add('logout', ['controller' => 'AuthClass', 'action' => 'out']);



