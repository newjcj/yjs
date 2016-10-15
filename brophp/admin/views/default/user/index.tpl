<html>
<head></head>

<body>
    <table align="center" width="800" border="1">
    <form action="<{$url}>/del" method="post" onsubmit="return confirm('are you ok')">
        <{foreach from=$user item="data"}>
            <tr>
                <td><input type="checkbox" name="id[]" value="<{$data.id}>" /></td>
                <td><{$data.id}></td>
                <td><{$data.name}></td>
                <td><{$data.age}></td>
                <td><a onclick='return confirm("确定删除吗")' href="<{$url}>/del/id/<{$data.id}>">删除</a></td>
                <td><a href="<{$url}>/mod/id/<{$data.id}>">修改</a></td>
            </tr>
        <{/foreach}>
            <input  style="margin-left:200px;" type="submit" name="sub" value="删除">

        </form>
    </table>
</body>
</html>
