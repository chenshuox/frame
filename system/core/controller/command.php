<?php
namespace simple\system\core\controller;
use simple\system\core\request;

abstract class Command
{
	abstract function execute();

	protected function get($param) {
		$context = new request\Request();
		return $context->get($param);
	}
}

?>