<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<link rel="stylesheet" type="text/css" href="<?=URL?>/resource/css/admin/login.css">
</head>
<body>
	<section>
		<form id="from" action="<?=URL?>/index.php/admin/index" method="post">
			<h3>博客管理</h3>
			<p><input type="text" name="username" placeholder="username"></p>
			<p><input type="password" name="password" placeholder="password"></p>
			<?php if(!empty($error)) { ?>
			<p style="color:red;"><?php echo $error;  ?></p>
			<?php } ?>
			<p><input type="checkbox" name="bike"><span>Keep me signed in </span><input type="submit" value="Login"></p>
			<p class="footer">2015 &copy; frame by chenshuo. </p>
		</form>
	</section>
</body>
</html>