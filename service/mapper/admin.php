<?php
namespace simple\service\mapper;
use simple\system\core\database;
use simple\system\core\request;

class Admin extends database\Mapper {

	public $table;

	public function __construct() {
		parent::__construct();
	}

	public function add($object) {
		$user = $object->getUser();
		$pass = $object->getPass();
		$this->insert()->table("manage")->filed("username, password")->value($user, $pass)->query();

	}

	public function find($object) {
		$user = $object->getUser();
		$pass = $object->getPass();
		$this->select("username, password")->table("manage")->where("username='$user' AND password='$pass'")->fetch();
		return $this->data;
	}

	public function setManager() {
		$context = new request\Request();
		$repassword = md5($context->get('repassword'));
		$result = $this->update()->table("`manage`")->set("password = '$repassword'")->where("id=1")->query();
		return $result;
	}

	public function selectPass() {
		$context = new request\Request();
		$password = md5($context->get('password'));
		$this->select("*")->table("manage")->where("password = '$password'")->fetch();
		return $this->data;
	}

}

?>