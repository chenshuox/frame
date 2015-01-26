<?php
namespace simple\service\command;
use simple\system\core\controller;
use simple\service\domain;

class Login extends controller\Command
{	

	public function execute(){
		$domain = new domain\Admin();
		$domain->setUsername($_POST["username"]);
		$username = $domain->getUsername();
		
	}
}


?>
