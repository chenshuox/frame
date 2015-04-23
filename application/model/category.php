<?php
namespace simple\application\model;
use simple\service\domain;
use simple\service\mapper;
use simple\system\core\model;

class Category extends model\Model
{

	private $mapper;

	public function __construct() {
		$this->mapper = new mapper\Category();
	}

	public function select() {
		$data = $this->mapper->find();
		$this->set("data", $data);
	}

	public function delete() {
		$this->mapper->del();
	}

	public function test() {
		
	}
}

?>