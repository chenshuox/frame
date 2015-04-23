<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/css/admin/manage.css">
</head>
<body>
<div id="content">
<?php if(isset($result)) {?>
	<div class="dalog">
	<?php echo $result; ?>
	</div>
<?php } ?>
	<form action="<?php view\View::url('category/edit'); ?>/<?php echo $data['id']; ?>" method="post">
	<table>
		<tr>
			<td>栏目名称</td>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
		</tr>
		<tr>
			<td>英文名称</td>
			<td><input type="text" name="english" value="<?php echo $data['english']; ?>"></td>
		</tr>
		<tr>
			<td>栏目介绍</td>
			<td><textarea name="description"><?php echo $data['description']; ?></textarea></td>
		</tr>
		<tr>
			<td>栏目类型</td>
			<td>
				<select name="type">
					<option value="0">文章</option>
					<option value="1">图片</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="reset" value="重置"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
	</form>
</div>	
</body>
</html>