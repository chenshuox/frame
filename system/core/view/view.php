<?php
namespace simple\system\core\view;

class View {
	public static function url($param) {
		echo HTTP_PATH . "/" . $param;
	}

	public static function img($param) {
		echo URL . "/resource/images/" . $param;
	}

	public static function link($param) {
		echo "<link rel='stylesheet' type='text/css' href=" . URL . "/resource/css/" . $param . " />";
	}

	public static function import($path, $file) {
		include "./application/view/" . $path . "/" . $file . ".php";
	}
}

?>