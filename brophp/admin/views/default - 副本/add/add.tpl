<form align="center" action="<{$url}>/install" method="post">
    id:<input type="text" name="id" ><br>
    name:<input type="text" name="name" ><br>
    age:<input type="text" name="age" ><br>
    sub:<input type="submit" name="sub" value="添加数据">
    code:<input size="4" type="text" name="code" ><img onclick="this.src='<{$url}>/code/'+Math.random()" src="<{$url}>/code">
</form>
<{$cod}>
