<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $webName; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<?php view\View::link("home/index.css"); ?>
</head>
<body>
<div id="warpper">
	<div id="header">
		<p>
			<a href="<?php view\View::url('home/index'); ?>">注册</a>
			<a href="<?php view\View::url('home/login'); ?>">登陆</a>
		</p>
	</div>
	<div id="section">
		<h1>足球迷</h1>
		<p class="desc">因为足球，所以我们在一起！</p>
		<form>
			<p><input type="text" placeholder="用户名"></p>
			<p><input type="text" placeholder="密码"></p>
			<p><input type="submit" value="登录"></p>
		</form>
	</div>
	<div id="footer">
		<p>zuqiu.im 2015</p>
	</div>
	
</div>	
	
	
</body>
</html>
