<{include file="$public/header.tpl"}>
<h1>搜索商品</h1>
<form action="<{$url}>/index" method="post">
商品分类:<{$select}><br>
商品名称：<input type="text" size=15 name="name" /><br>
商品价格：<input type="text" size=5 name="minprice" />
            -
          <input type="text" size=5 name="maxprice" /><br>
<input type="submit" value="搜索" />
</form>
<{include file="$public/footer.tpl"}>
