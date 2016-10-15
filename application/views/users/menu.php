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
用户菜单
<table style="width:700px;" border="1px" align="center">
<tr>
	<td>goods_id</td>
	<td>goods_name</td>
	<td>price</td>
	<td>describe</td>
</tr>

<?php foreach($glist as $item){?>
<tr>
	<td><a href="#" target="_blank"><?=$item['goods_id'];?></a></td>
	<td><a href="#" target="_blank"><?=$item['goods_name'];?></a></td>
	<td><a href="#" target="_blank"><?=$item['price'];?></a></td>
	<td><a href="#" target="_blank"><?=$item['describes'];?></a></td>
</tr>
<?php }?>

</table>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
</body>
</html>
