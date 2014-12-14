<?php
namespace simple\system\core\database;

class Mapper
{
	public $db;
		
	public function __construct() {
		//实例化mysql数据库
		$this->db = \simple\system\core\database\Mysql::instance();
	}

	public function find($id) {
		
	}
	
}


?>