<?php
define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);
define('ASSETS_URI', SITE_URL . '/assets/');

define('IMAGE_POSTS', ASSETS_URI . '\\resources\\images\\posts\\');
define('RESOURCES_IMAGE_POSTS', 'resources/images/posts/');

define('PUBLIC_PATH', '\\public');
define('FULL_PATH_IMAGE_POSTS', dirname(__DIR__) . PUBLIC_PATH . '\\assets\\resources\\images\\posts\\');
define('PATH_POST_IMAGE', dirname(__DIR__) .DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR);

define('NAME_ARRAY_FOR_LOADSFILES', 'loadImagePostFile');
define('TEST_PATH', 'test_path');

