<?php
namespace simple\system\core\database;
use simple\system\core\common;

class Mapper
{
	public $db;
	public $query;
	public $table;
	//返回的数据
	public $data;

	//获取的结果集合
	public $result;
	
	
	public function __construct() {
		//连接mysql
		return $this->link = Mysql::instance();
	}


	//获取子类的名称，在数据库映射中相当于获取名表
	public function table($table = null) {
		$className = get_class($this);
		$array = explode("\\", $className);
		$data = common\Config::get("database");
		if(empty($table)){
			$this->query .= "`".$data["mysqli"]["prefix"].strtolower(end($array))."` ";
		}else{
			$this->query .= "`".$data["mysqli"]["prefix"].$table."` ";
		}
		return $this;
	}

	public function select($columns){
		$this->query = "SELECT ".$columns." FROM ";
		return $this;
	}

	public function insert(){
		$this->query = "INSERT INTO ";
		return $this;
	}

	public function filed($filed){
		$this->query .= "(".$filed;
		return $this;
	}

	public function value($value){
		$this->query .= ") VALUES (".$value.")";
		return $this;
	}

	public function query() {
		$this->result = $this->link->query($this->query);
	}

	public function fetch(){
		$this->data = $this->link->query($this->query)->fetch_array();
	}

	public function fetchAll() {
		$result = $this->link->query($this->query);
		while($row = $result->fetch_array()){
			$data[] = $row;
		}
		$this->data = $data;
	}


	public function where($where){
		$this->query .= "WHERE ".$where;
		return $this;
	}

	public function update(){
		return $this;
	}

	public function delete(){
		return $this;
	}

	


	public function __destruct() {
		$this->link->close();
	}
	
}


?>