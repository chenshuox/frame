<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{

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


}


?>