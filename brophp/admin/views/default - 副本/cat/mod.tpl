<{include file="public/header.tpl"}>
<h1>修改分类</h1>
<form action="<{$url}>/update/" method="post">
<input type="hidden" name="id" value="<{$id}>">
选择分类：<{$select}><br>
输入分类：<input type="text" name="name" value="<{$name}>"><br>
<input type="submit" value="修改">
</form>

<{include file="public/footer.tpl"}>
