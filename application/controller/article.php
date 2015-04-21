<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;


class Article extends controller\Controller
{
	
	public function add() {
		$this->view("article", "add");
	}

	

}

?>