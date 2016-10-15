<{include file="/public/header.tpl"}>
<h1>修改商品</h1>
<form action="<{$url}>/update/img/<{$pic}>"  method="post" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<{$id}>">
    商品分类：<{$select}><br>
    name:<input type="text" name="name" value="<{$name}>" /><br>
    price:<input type="text" name='price' value="<{$price}>" /><br>
    num:<input type="text" name="num" <{$num}>></br>
    img:<input type="file" name='uppic'></br>
    desn:<textarea name='desn' cols=40 rows=8 value="<{$desn}>" ></textarea><br>
    <input type="submit" name="sub" value="修改商品">
</form>
<img src="<{$public}>/uploads/sm_<{$pic}>"/>

<{include file="/public/footer.tpl"}>
