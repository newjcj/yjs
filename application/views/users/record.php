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
购买记录
<table width="600" border="1px" align="center">
<tr>
<td>记录id</td>
<td>产品id</td>
<td>会员id</td>
<td>产品名称</td>
<td>购买时间</td>
<td>产品过期时间</td>
</tr>
<?php foreach($rlist as $item){?>
	<tr>
		<td><?=$item['id']?></td>
		<td><?=$item['goods_id']?></td>
		<td><?=$item['uid']?></td>
		<td><?=$item['goods_name']?></td>
		<td><?=$item['order_time']?></td>
		<td><?=$item['expire_time']?></td>
	</tr>
<?php }?>
</table>


<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
