<?php
namespace simple\application\model;
use simple\service\domain;
use simple\service\mapper;
use simple\system\core\model;

class Club extends model\Model
{
	public $data;

	public function selectMatch() {
		$mapper = new mapper\Match();
		$data = $mapper->find();
		$this->set("data", $data);
	}
}

?>