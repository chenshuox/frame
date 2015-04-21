<?php
namespace simple\application\model;
use simple\service\domain;
use simple\service\mapper;
use simple\system\core\model;

class Category extends model\Model
{

	public function select() {
		$mapper = new mapper\Category();
		$data = $mapper->find();
		$this->set("data", $data);
	}

}

?>