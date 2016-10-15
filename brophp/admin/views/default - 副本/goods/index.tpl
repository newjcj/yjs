<{include file="/public/header.tpl"}>
<form action='<{$url}>/del' method="post" enctype="multipart/form-data">
<table width="900px" align="center" border='1px'>
    <tr><th>&nbsp;</th><th>id</th><th>name</th><th>图片</th><th>price</th><th>num</th><th>ptime</th><th>添加&nbsp;/&nbsp;删除</th>
    </tr>
    <{foreach from=$good item="goods"}>
        <tr align='center'>
            <td><input type='checkbox'  name='id[]' value="<{$goods.id}>" /></td>
            <td><{$goods.id}></td>
            <td><{$goods.name}></td>
            <td><img width=100 src="<{$public}>/uploads/sm_<{$goods.pic}>"></td>
            <td style="color:red">￥<{$goods.price}>元</td>
            <td><{$goods.num}></td>
            <td><{$goods.ptime|date_format:"%Y-%m-%d日 %H:%M:%S"}></td>
            <td><a href="<{$url}>/mod/id/<{$goods.id}>" >修改</a>&nbsp;<a onclick="return confirm('你确定删除吗')" href="<{$url}>/del/id/<{$goods.id}>/page/<{$pag}>">删除</a></td>
        </tr>
    <{/foreach}>
        
        <tr align='right'>
            <td cols='7'>
            <td>
                <input onclick="return confirm('你确定删除吗？')" type="submit" name='del' value='删除'>&nbsp;
                <a href="<{$url}>/add">添加</a>
            </td>
            <td colspan=6 ><{$page}></td>
        </tr>
        
</table>
</form>

<{include file="/public/footer.tpl"}>
