<?php
namespace simple\system\core\request;

class Request {
	private $data;

	public function __construct() {
		$this->handle();
	}

	private function handle() {
		if (isset($_SERVER["REQUEST_METHOD"])) {
			foreach ($_REQUEST as $key => $value) {
				//特殊字符转义
				//$value = addslashes($value);
				$this->set($key, $value);
			}
			return true;
		}
	}

	public function get($key) {
		if (isset($this->data[$key])) {
			return $this->data[$key];
		}
	}

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
}

?>