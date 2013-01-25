<?php
define('APP_DEBUG', false); // 开启调试模式
define('APP_NAME','app');
define('APP_PATH','./app/');

define('EXTEND_PATH', './extend/Extend/');
define('ENGINE_NAME', 'sae');
define('ENGINE_PATH', './extend/Extend/Engine/');
define('RUNTIME_PATH',APP_PATH.'Runtime/');
// define('THINK_PATH', './thinkphp/ThinkPHP/');

require './thinkphp/ThinkPHP/ThinkPHP.php';
// require './extend/Extend/Engine/sae.php';
