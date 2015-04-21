<?php
namespace simple\application\model;
use simple\service\domain;
use simple\service\mapper;
use simple\system\core\model;

class Admin extends model\Model
{


	public function index() {
		$user = $this->get("username");
		$pass = $this->get("password");
		$domain = new domain\Admin();
		$domain->setUser($this->get("username"));
		$domain->setPass(md5($this->get("password")));
		$mapper = new mapper\Admin();
		if($mapper->find($domain)) {
			$this->set("bool", true);
			$_SESSION["manage"] = $user;
		}else{
			$this->set("bool", false);
		}
		
	}

	

	public function login() {

	}
}

?>