<{include file="/public/header.tpl"}>
<form action="<{$url}>/insert"  method="post" enctype="multipart/form-data" >
    分类：<{$select}><br>
    name:<input type="text" name="name" /><br>
    price:<input type="text" name='price' /><br>
    num:<input type="text" name="num"></br>
    img:<input type="file" name='uppic'></br>
    desn:<textarea name='desn' cols=40 rows=8 ></textarea><br>
    <input type="submit" name="sub" value="添加">
</form>

<{include file="/public/footer.tpl"}>
