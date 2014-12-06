<!DOCTYPE html>
<html>
<head>
	<title>陈朔的个人框架</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<style type="text/css">
	.header{
		width: 960px;
		height: 90px;
		background: #000;
		margin: 0 auto;
		
	}
	.content{
		margin-left: -10px;
		background: #f00;
	}
	.show{
		margin-left: 10px;
		height: 10px;
		background: #09c;
	}
	</style>
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
	<div class="header">
		<ul class="content">
			<li class="show"></li>
		</ul>
	</div>
</body>
</html>