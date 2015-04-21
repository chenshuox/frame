<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Category extends database\Mapper
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

	public function find() {
		$this->select("*")->table("category")->fetchAll();
		return $this->data;
	}


}


?>