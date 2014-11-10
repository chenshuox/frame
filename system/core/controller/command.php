<?php
namespace simple\system\core\command;

abstract class Command
{
	abstract function execute(CommandContext $context);
}

?>