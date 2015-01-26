<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{

	//数据库连接句柄
	private $link;
	public $table;

	public function __construct() {
		parent::__construct();
		//$this->table()->data()->delete()->end();
	}
	public function select() {
		
	}

	public function update() {

	}

	public function delete() {
		echo "DELETE FROM ".$this->table." SET";
	}

	public function insert($sql) {
		$this->doInsert($sql);
	}

	public function data() {

	}

	public function table() {
		$this->table = $this->tableName();
		return $this;
	}

	public function end() {

	}
	
}


?>