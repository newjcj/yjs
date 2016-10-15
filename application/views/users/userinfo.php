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
<body>
会员信息
<table width="900" border="1px" align="center">
<tr>
<td>会员id</td>
<td>帐号</td>
<td>密码</td>
<td>email</td>
<td>qq</td>
<td>手机号</td>
<td>店铺登录帐号</td>
<td>登录密码</td>
<td>状态（0/1默认0表示审核）</td>
</tr>
<?php foreach($ulist as $item){?>
	<tr>
		<td><?=$item['uid']?></td>
		<td><?=$item['user']?></td>
		<td><?=$item['password']?></td>
		<td><?=$item['email']?></td>
		<td><?=$item['qq']?></td>
		<td><?=$item['tell']?></td>
		<td><?=$item['shop_user']?></td>
		<td><?=$item['shop_password']?></td>
		<td><?=$item['statu']?></td>
	</tr>
<?php }?>
</table>




<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
