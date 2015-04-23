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
	<form action="<?php view\View::url("category/addCate"); ?>" method="post">
	<table>
		<tr>
			<td>父级栏目</td>
			<td>一级栏目</td>
		</tr>
		<tr>
			<td>栏目名称</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>英文名称</td>
			<td><input type="text" name="english"></td>
		</tr>
		<tr>
			<td>栏目介绍</td>
			<td><textarea name="description"></textarea></td>
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
			<td><input type="submit" value="添加"></td>
		</tr>
	</table>
	</form>
</div>	
</body>
</html>