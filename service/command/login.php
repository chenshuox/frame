<?php
namespace simple\service\command;
use simple\system\core\controller;

class Login extends controller\Command
{	

	public function execute(){
		echo $_POST["username"];
	}
}


?>
