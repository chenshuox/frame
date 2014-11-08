<?php
namespace simple\request;

class Request
{
	private $properties;

	public function __construct() {
		$this->init();
		\simple\registry\RequestRegistry::setRequest($this);
	}

	private function init() {
		if(isset($_SERVER["REQUEST_METHOD"])) {
			foreach ($_REQUEST as $key => $value) {
				$this->setProperty($key, $value);
			}
			return true;
		}
	}

	public function getProperty($key) {
		if(isset($this->properties[$key])) {
			return $this->properties[$key];
		}
	}

	public function setProperty($key, $value) {
		$this->properties[$key] = $value;
	}
}

?>