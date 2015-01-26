<!DOCTYPE html>
<html>
<head>
	<title><?php echo $webName; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
</head>
<body>
<<<<<<< HEAD
	<h2>足球迷 zuqiu.im</h2>
	<p>喜欢足球</p>
=======
	<h2><?php echo $webName; ?></h2>
	<p><?php echo $description; ?></p>
>>>>>>> FETCH_HEAD
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
<<<<<<< HEAD
	
=======
	<script type="text/javascript">
	var color = document.getElementById('color');
	var text = document.getElementById('text');
	text.value = color.value;
	color.onchange = function() {
		text.value = color.value;
	}
	</script>
	<p><?php echo $powered; ?></p>
>>>>>>> FETCH_HEAD
</body>
</html>