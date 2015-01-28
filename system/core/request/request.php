<?php
namespace simple\system\core\request;
use simple\system\core\registry;

class Request
{
	private $data;

	public function __construct() {
		$this->init();
		// 没看懂
		// registry\Request::setRequest($this);
	}

	private function init() {
		if(isset($_SERVER["REQUEST_METHOD"])) {
			foreach ($_REQUEST as $key => $value) {
				$this->set($key, $value);
			}
			return true;
		}
	}

	public function get($key) {
		if(isset($this->data[$key])) {
			return $this->data[$key];
		}
	}

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
}

?>