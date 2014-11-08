<?php
namespace simple\system\core\registry;


abstract class Registry
{
	abstract protected function get ($key);
	abstract protected function set ($key, $value);
}

?>