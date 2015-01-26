<?php
//引用命名空间
use simple\system\core\controller;
use simple\system\core\database;
use simple\service\mapper;
use simple\service\domain;

define("HTTP_PATH", "http://".$_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"]);
define("URL", dirname(HTTP_PATH));

//引入应用助手类，并实例化运行
require "./system/core/controller/applicationHelper.php";
$app = new controller\ApplicationHelper();
$app->run();



//均为测试内容
$domain = new domain\Admin();

$username = $domain->getUsername();
echo $username;
$mapper = new mapper\Admin();
$mapper->table()->delete();

//$c = database\Mysql::instance();
//$mapper->table()->insert()->data()->end();
?>
