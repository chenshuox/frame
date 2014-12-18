<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Admin extends database\Mapper
{
	

	public function select() {
		
	}

	public function update() {

	}

	public function delete() {

	}

	public function insert($sql) {
		$this->doInsert($sql);
	}

}


?>