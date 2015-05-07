<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/admin/manage.css">
</head>
<body>
<div id="content">
<?php if (isset($result)) {?>
	<div class="dalog">
	<?php echo $result;?>
	</div>
<?php }?>
	<form id="form" action="<?php view\View::url('admin/manager');?>" method="post">
	<table>
		<tr>
			<td>原密码</td>
			<td><input autocomplete="off" type="password" name="password"></td>
		</tr>
		<tr>
			<td>新密码</td>
			<td><input autocomplete="off" type="password" name="repassword"></td>
		</tr>
		<tr>
			<td>确认密码</td>
			<td><input autocomplete="off" type="password" name="supassword"></td>
		</tr>
		<tr>
			<td><input type="reset" value="重置"></td>
			<td><input type="submit" id="submit" value="修改"></td>
		</tr>
	</table>
	</form>
	<script type="text/javascript">
	var form = document.getElementById('form');
	form.onsubmit = function() {

		var password = document.getElementsByTagName('input')['0'];
		var repassword = document.getElementsByTagName('input')['1'];
		var supassword = document.getElementsByTagName('input')['2'];

		if(repassword.value.length<5 || password.value.length<5 ||supassword.value.length<5 ){
			alert("密码长度不能小于6位数值！"); return false;
		}

		// if(repassword.value != supassword.value){
		// 	alert("两次输入的密码不一致！"); return false;
		// }else{
		// 	return true;
		// }
	}
	</script>
</div>
</body>
</html>