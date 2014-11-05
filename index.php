<?php
class home{
		
	public function index() {
		echo "index";
	}
}
include "application.php";
$app = new \simple\Application();

$app->run();

?>