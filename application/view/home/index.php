<!DOCTYPE html>
<html>
<head>
	<title><?php echo $webName; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
</head>
<body>

	<h2><?php echo $webName; ?></h2>
	<hr>
	<p><?php echo "$description"; ?></p>

	<hr>
	<form action="<?php echo HTTP_PATH; ?>/home/index" method="post">
		<ul>
			<li><input type="text" name="username"></li>
			<li><input type="password" name="password"></li>
			<li><input type="text" id="text"></li>
			<li><input type="submit" value="login"></li>
		</ul>
	</form>
	
	<p><a href="<?php echo HTTP_PATH; ?>/admin/index">后台管理</a></p>
	
	<p><?php echo $powered; ?></p>

</body>
</html>
