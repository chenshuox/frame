<?php
namespace simple\service\command;

class Login extends \simple\system\core\controller\Command
{	

	public function execute(){
		echo $_POST["username"];
	}
}


?>
