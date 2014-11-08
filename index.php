<?php
//核心类库路径定义
define("CORE_PATH", "./system/core/");

//扩展类库路径定义
define("EXPAND_PATH", "./system/expand");

//第三方类库路径定义
define("VENDOR_PARH", "./system/vendor");


require "./system/core/controller/applicationHelper.php";

$app = new \simple\system\core\controller\ApplicationHelper();

$app->run();

?>
