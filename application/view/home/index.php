<!DOCTYPE html>
<html>
<head>
	<title>足球迷</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
</head>
<body>
	<h2>足球迷</h2>
	<p>喜欢足球</p>
	<hr>
	<form action="<?=HTTP_PATH?>/home/index" method="post">
		<ul>
			<li><input type="text" name="username"></li>
			<li><input type="password" name="password"></li>
			<li><input type="color" id="color"></li>
			<li><input type="text" id="text"></li>
			<li><input type="submit" value="login"></li>
		</ul>
	</form>
	<ul>
		<li><a href="<?=HTTP_PATH?>/home/show">chenshuo</a></li>
	</ul>
	<script type="text/javascript">
	var color = document.getElementById('color');
	var text = document.getElementById('text');
	text.value = color.value;
	color.onchange = function() {
		text.value = color.value;
	}
	</script>
</body>
</html>