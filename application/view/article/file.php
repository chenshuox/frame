<?php use simple\system\core\view;?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL;?>/resource/js/jquery.js"></script>
</head>
<body>
<div id="content">
<?php if (isset($result)) {?>
	<div class="dalog">
	<?php echo $result;?>
	</div>
<?php }?>
	<table>
		<tr class="title">
			<td>附件编号</td>
			<td>附件预览</td>
			<td>附件路径</td>
			<td>删除附件</td>
		</tr>
		<?php if (!empty($data)) {?>
		<?php foreach ($data as $v) {?>
		<tr>
			<td><?php echo $v["id"]?></td>
			<td><img width="100" src="<?php echo URL . $v["path"]?>"></td>
			<td><?php echo URL . $v["path"]?></td>
			<td><a href="<?php view\View::url("article/file")?>?file=<?php echo "/Users/ChenShuo/Documents/Web/www/Frame/frame" . $v['path']?>&id=<?php echo $v['id'];?>">删除附件</a></td>
		</tr>
		<?php }}?>
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