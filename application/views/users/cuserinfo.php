<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>用户信息</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
</head>
<script>
$(function(){
	$('input').focus(function(){
		//$(this).val("");
	});
});
</script>
<body>
会员信息:
<form action="<?php echo site_url('users/cuserinfo');?>" method="post" name="frm">
    <span>用户名：</span> <input type="text" name="user" value="<?=$ulist['user'];?>" /><?php echo form_error('user','<span style="color:red">','</span>');?><br>
     <span>密码：</span> <input type="password" name="password" value='' /><?php echo form_error('password','<span style="color:red">','</span>');?><br>
     <span>确认密码：</span>  <input type="password" name="repassword" value="" /><?php echo form_error('repassword','<span style="color:red">','</span>');?><br>
     <span>邮箱：</span> <input type="email" name="email" value="<?=$ulist['email'];?>" /><?php echo form_error('email','<span style="color:red">','</span>');?><br>
    <span>手机号：</span>  <input type="text" name="tell" value="<?=$ulist['tell'];?>" /><?php echo form_error('tell','<span style="color:red">','</span>');?><br>
    <span>qq</span>  <input type="text" name="qq" value="<?=$ulist['qq'];?>" /><?php echo form_error('qq','<span style="color:red">','</span>');?><br>
    <input type="submit" value="提交修改" />
</form>




<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
