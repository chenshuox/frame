<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{

	//数据库连接句柄
	private $link;	

	public function __construct() {
		$this->link = database\Mysql::instance();
	}

	public function select() {
		
	}

	public function update() {

	}

	public function delete() {

	}

	public function insert($sql) {
		$this->doInsert($sql);
	}

	public function __destruct() {
		$this->link->close();
	}

}


?>