<?php
namespace simple\service\domain;
use simple\system\core\model;

class Admin extends model\Domain
{
	public $id;
	private $username;
	private $password;
	
	public function setId($id) {
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}

	public function setUser($username) {
		$this->username = $username;
	}

	public function getUser() {
		return $this->username;
	}

	public function setPass($password) {
		$this->password = $password;
	}

	public function getPass() {
		return $this->password;
	}

	public function length() {

	}

	public function isEmpty() {
		
	}
	
}


?>