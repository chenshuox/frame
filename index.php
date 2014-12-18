<?php
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

$domain = new domain\Admin();
$domain->setUsername("chens");
$username = $domain->getUsername();
echo $username;
$mapper = new mapper\Admin();
//$mapper -> select("INSERT INTO pre_admin (username, password) VALUES ('$username', 'chens')");
//$mapper->insert()->table("admin")->data("$data");
//$mapper->select()->table()->data();
?>
