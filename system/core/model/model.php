<?php
namespace simple\system\core\model;
use simple\system\core\request;
use simple\system\core\registry;
use simple\service\mapper;

class Model
{
	
	protected function get($param) {
		$context = new request\Request();
		return $context->get($param);
	}

	protected function set($key, $value) {
		$set = registry\Request::instance();
		$set->set($key, $value);
	}
	
	
}


?>