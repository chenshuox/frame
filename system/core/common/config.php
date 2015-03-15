<?php
namespace simple\system\core\common;

class Config
{

	public static function get($config) {
		$data = include "application/config/{$config}.php";
		return $data;
	}

}


?>