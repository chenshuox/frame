<?php
namespace simple\system\core\model;

class Domain
{
	
	public $id;

	public function __construct() {

	}

	public function setId($id) {
		$this->id = $id;
	}

	public function find() {
		
	}

	public function getId() {
		return $this->id;
	}
	
	
}


?>