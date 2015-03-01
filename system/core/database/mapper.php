<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mapper
{
	public $db;
	public $query;
	public $table;
	
	
	public function __construct() {
		$this->db = Mysql::instance();
	}

	public function find($id) {
		
	}

	public function select() {
		
	}

	//获取子类的名称，在数据库映射中相当于获取名表
	public function table($table = null) {
		$className = get_class($this);
		$array = explode("\\", $className);
		$data = common\Config::get("database");
		if(empty($table)){
			return $this->table = $data["mysqli"]["prefix"].strtolower(end($array));
		}else{
			return $this->table = $data["mysqli"]["prefix"].$table;
		}
	}

	public function query($query) {
		return $this->db->execute($query);
	}

	public function fetch($query) {
		return $this->db->fetch($query);
	}

	public function __destruct() {
		$this->db->close();
	}
	
}


?>