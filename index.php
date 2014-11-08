<?php

include "applicationHelper.php";
$app = new \simple\ApplicationHelper();

$app->run();

?>
<form method="post">
	<input type="submit" value="post">
</form>
<form method="get">
	<input type="submit" value="get">
</form>