<!DOCTYPE html>
<html>
<head>
	<title>新华问知</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
</head>
<body>
	<h2>问知</h2>
	<p>问了才知道</p>
	<hr>
	<form action="<?=HTTP_PATH?>/home/index" method="post">
		<ul>
			<li><input type="text" name="username"></li>
			<li><input type="password" name="password"></li>
			<li><input type="date" name="password"></li>
			<li><input type="submit" value="login"></li>
		</ul>
	</form>
	<ul>
		<li><a href="<?=HTTP_PATH?>/home/show">chenshuo</a></li>
		<li></li>
	</ul>
</body>
</html>