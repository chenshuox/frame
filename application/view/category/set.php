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
	<table>
		<tr class="title">
			<td>栏目编号</td>
			<td>栏目名称</td>
			<td>英文名称</td>
			<td>访问</td>
			<td>操作</td>
		</tr>
		<?php foreach ($data as $v) { ?>
		<tr>
			<td><?php echo $v["id"] ?></td>
			<td><span>|-- </span><?php echo $v["name"] ?></td>
			<td><?php echo $v["english"] ?></td>
			<td><a target="new" href='<?php view\View::url("category/show") ?>/<?php echo $v["id"]; ?>'>访问</a></td>
			<td>
				<a class="edit" href="<?php view\View::url('category/add') ?>">添加子栏目</a>
				<a class="edit" href="">编辑</a>
				<a class="edit" href="">删除</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>	
</body>
</html>