<?php
namespace simple\application\model;
use simple\service\domain;
use simple\service\mapper;
use simple\service\command;

class Admin
{

	public function index() {
		//--- 1.调用命令模式处理数据			command ---//

		//--- 2.访问领域模型处理业务逻辑		domain  ---//

		//--- 3.访问数据库层					mapper  ---//
	}

	public function login() {

	}
}

?>