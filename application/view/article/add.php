<?php use simple\system\core\view; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>/resource/css/admin/manage.css">
	<script type="text/javascript" src="<?php echo URL; ?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>/resource/js/jquery.js"></script>
</head>
<body>
<div id="content">
<?php if(isset($result)) {?>
	<div class="dalog">
	<?php echo $result; ?>
	</div>
<?php } ?>
	<form action="<?php view\View::url('article/add'); ?>" method="post">
	<table>
		<tr>
			<td>所属分类</td>
			<td class="cate">
				<select class="first" name="cateid">
				<option value="-1">选择栏目</option>
				<?php foreach($data as $v) {?>
					<option value="<?php echo $v['id']; ?>"><?php echo $v["name"]; ?></option>
				<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>标题</td>
			<td><input autocomplete="off" class="h-title" type="text" name="title"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td>
				<textarea rows="30" cols="50" name="editor01"></textarea>
			</td>
		</tr>
		<tr>
			<td>摘要</td>
			<td>
				<textarea rows="4" cols="50" name="description"></textarea>
			</td>
		</tr>
		<tr>
			<td>附件上传</td>
			<td><input type="file" id="file" multiple /></td>
		</tr>
		<tr>
			<td>附件列表</td>
			<td class="list">
				<ul></ul>
			</td>
		</tr>
		<tr>
			<td><input type="reset" value="重置"></td>
			<td><input type="submit" value="发布文章"></td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript">CKEDITOR.replace('editor01');</script>
<script type="text/javascript">
    $(function(){
    	$(".first").change(function(){
    		var data = $(this).val();
    		$.ajax({
    			type: "post",
    			url : "<?php view\View::url('article/first'); ?>",
    			data: {id:data},
    			success: function(a, b , c){
    				$(".cate select:gt(0)").remove();
    				$(".cate").append(a);
    			}
    		})
    	});

        $("#file").change(function(){
                data = new FormData();
                data.append('files', $('#file')[0].files[0]);
                $.ajax({
                    type: "post",
                    url: "<?php view\View::url('admin/upload'); ?>",
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(a, b, c){
                        $(".list ul").append(a);
                    }
                });
            });
    });
    </script>
</script>
</body>
</html>