<?php
namespace simple\service\command;

use simple\system\core\controller;
use simple\service\domain;
use simple\system\core\request;

class Login extends controller\Command
{	

	public function execute(){
		$context = new request\Request();
		echo $user = $context->get("username");
		echo $pass = $context->get("password");
	}
}


?>
