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
<table width="600" border="1px" align="center">
<tr>
<td>订单号</td>
<td>会员编号</td>
<td>时间</td>
</tr>
<?php foreach($olist as $item){?>
	<tr>
		<td><?=$item['id']?></td>
		<td><?=$item['uid']?></td>
		<td><?=$item['time']?></td>
	</tr>
<?php }?>
</table>




<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
