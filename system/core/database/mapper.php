<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mapper
{
	public $db;
	
	public function __construct() {
		//实例化mysql数据库
		$this->db = Mysql::instance();
		
	}

	public function find($id) {
		
	}

	public function doInsert($sql) {
		$this->db->execute($sql);
	}
	
	
	public function doSelect($sql) {

	}

	public function __destruct() {
		$this->db->close();
	}

	//获取子类的名称，在数据库映射中相当于获取名表
	public function tableName() {
		$className = get_class($this);
		$array = explode("\\", $className);
		$data = common\Config::get("database");
		return $data["mysqli"]["prefix"].strtolower(end($array));
	}
}


?>