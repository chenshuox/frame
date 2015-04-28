<?php
//引用命名空间
use simple\system\core\controller;

define("HTTP_PATH", "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["SCRIPT_NAME"]);
define("URL", dirname(HTTP_PATH));

//引入应用助手类，并实例化运行
require "./system/core/controller/applicationHelper.php";
$app = new controller\ApplicationHelper();
$app->run();

?>
