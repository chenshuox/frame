<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL; ?>/ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="content">
<?php if(isset($result)) {?>
	<div class="dalog">
	<?php echo $result; ?>
	</div>
<?php } ?>
	<form action="<?php view\View::url('article/edit'); ?>/<?php echo $data['id']; ?>" method="post">
	<table>
		<tr>
			<td>标题</td>
			<td><input class="h-title" autocomplete="off" type="text" name="title" value="<?php echo $data['title']; ?>"></td>
		</tr>
		<tr>
			<td>文章内容</td>
			<td><textarea rows="30" cols="50" name="editor01"><?php echo $data['content']; ?></textarea></td>
		</tr>
		<tr>
			<td>摘要</td>
			<td>
				<textarea rows="4" cols="50" name="description"><?php echo $data['description']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td>图像附件</td>
			<td></td>
		</tr>
		<tr>
			<td>封面图像</td>
			<?php if($data['cover'] == 0) { ?>
			<td>无封面</td>
			<?php }else{ ?>
			<td><img width='200' src="<?php echo URL, $data['name'];?>"></td>
			<?php } ?>
		</tr>
		<tr>
			<td><input type="reset" value="重置"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript">CKEDITOR.replace('editor01');</script>
</body>
</html>