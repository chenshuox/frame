<!DOCTYPE html>
<html>
<head>
	<title>陈朔的个人框架</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>simple</h2>
	<p>This is simple for php mvc framework!</p>
	<hr>
	<form action="<?=HTTP_PATH?>/home/index" method="post">
		<ul>
			<li><input type="text" name="username"></li>
			<li><input type="password" name="password"></li>
			<li><input type="range" name="password"></li>
			<li><input type="submit" value="login"></li>
		</ul>
	</form>
</body>
</html>