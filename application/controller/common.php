<?php
namespace simple\application\controller;
use simple\system\core\controller;
use simple\system\core\registry;

class Common extends controller\Controller
{
	public function logout() {
		session_start();
		session_destroy();
		echo '<script>location.href='."\"".HTTP_PATH."\"".'</script>';
	}

	
}

?>