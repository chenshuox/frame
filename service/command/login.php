<?php
namespace simple\service\command;

use simple\system\core\controller;
use simple\service\domain;
use simple\system\core\request;

class Login extends controller\Command
{	

	public function execute(){

		$user = $this->get("username");
		$pass = $this->get("password");

		echo $user, $pass;
		
		return true;
	}
}


?>
