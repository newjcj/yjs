<{include file="public/header.tpl"}>
<form action="<{$url}>/insert" method="post">
选择分类：<{$select}><br>
分类名称：<input type="text" name="name"><br>
<input type="submit" value="添加" name="sub">
</form>

<{include file="public/footer.tpl"}>
