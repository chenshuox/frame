<!DOCTYPE html>
<html>
<head>
	<title><?php echo $webName; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
</head>
<body>

	<h2><?php echo $webName; ?></h2>
	<p><?php echo $description; ?></p>

	<hr>
	<form action="<?=HTTP_PATH?>/home/index" method="post">
		<ul>
			<li><input type="text" name="username"></li>
			<li><input type="password" name="password"></li>
			<li><input type="text" id="text"></li>
			<li><input type="submit" value="login"></li>
		</ul>
	</form>
	<ul>
		<li><a href="<?=HTTP_PATH?>/home/show">chenshuo</a></li>
	</ul>
	<p><?php echo $powered; ?></p>

</body>
</html>
