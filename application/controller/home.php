<?php
namespace simple\application\controller;

class Home extends \simple\system\core\controller\Controller
{
	public function index() {
	
	if($this->get())
	{
		$this->display("home", "index");
	}

	if($this->post())
	{
		echo "post";
	}

	}

	public function show() {
		echo "show";
	}

}

?>