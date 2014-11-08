<?php
namespace simple\application\controller;
$path = include "controller/controller.php";

class Home extends \simple\controller\Controller
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