<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{

	public $table;

	public $insert = "INSERT INTO pre_admin (username, password)VALUES(?, ?)";

	public function __construct() {
		parent::__construct();
	}
	public function insert($object) {
		$query = "INSERT INTO pre_admin (username, password) VALUES ('{$object->getUser()}', '{$object->getPass()}')";
		return $this->query($query);
	}

	public function select($object) {
		$query = "SELECT * FROM pre_admin WHERE username = '{$object->getUser()}' AND password = '{$object->getPass()}'";
		return $this->fetch($query);
	}

	public function delete() {
		
	}


	public function where() {

	}

}


?>