<?php
namespace simple\service\mapper;
use simple\system\core\database;

class Match extends database\Mapper
{

	public $table;

	

	public function __construct() {
		parent::__construct();
	}

	public function find() {
		$this->select("*")->table("match")->fetchAll();
		return $this->data;
	}

	public function add(){

	}


}


?>