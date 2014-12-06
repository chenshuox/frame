<?php
namespace simple\system\core\database;

class Mapper
{
	public $database;
		
	public function __construct() {
		//实例化mysql数据库
		$this->database = Mysql::instance();
	}
	
}


?>