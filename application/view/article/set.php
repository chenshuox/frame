<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL; ?>/resource/js/jquery.js"></script>
</head>
<body>
<div id="content">
<?php if(isset($result)) {?>
	<div class="dalog">
	<?php echo $result; ?>
	</div>
<?php } ?>
	<table>
		<tr class="title">
			<td>编号</td>
			<td>文章标题</td>
			<td>栏目</td>
			<td>时间</td>
			<td>操作</td>
		</tr>
		<?php if(!empty($data)) {?>
		<?php foreach ($data as $v) { ?>
		<tr>
			<td><?php echo $v["id"] ?></td>
			<td><a href="<?php view\View::url("article/show") ?>/<?php echo $v["cateid"]; ?>/<?php echo $v["id"]; ?>"><?php echo $v["title"] ?></a></td>
			<td><?php echo $v["name"] ?></td>
			<td><?php echo $v["time"] ?></td>
			<td>
				<a class="edit" href='<?php view\View::url("article/move") ?>/<?php echo $v["id"]; ?>'>移动</a>
				<a class="edit" href='<?php view\View::url("article/edit"); ?>/<?php echo $v["id"]; ?>'>编辑</a>
				<a class="edit del" href="<?php view\View::url('article/delete/'); ?><?php echo $v['id']; ?>">删除</a>
			</td>
		</tr>
		<?php } } ?>
	</table>
	<script type="text/javascript">
	$(function() {
		$(".del").click(function() {
			if(confirm("确定删除嘛？")){
				return true;
			}else{
				return false;
			}
		});
	});
	</script>
</div>	
</body>
</html>