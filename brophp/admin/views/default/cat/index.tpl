<{include file="public/header.tpl"}>
<h1>分类管理</h1>
<ul>
    <{foreach from=$select item="sel"}>
    <{$space= str_repeat("&nbsp;&nbsp;", count(explode("-",$sel.abspath))-2)}>
    
        <li style="list-style:none"> <{$space}>|-<{$sel.name}></li>&nbsp;&nbsp;
        <a href="<{$url}>/mod/id/<{$sel.id}>">修改</a>&nbsp;&nbsp;&nbsp;
        <a onclick="return confirm('确定删除分类吗？')" href="<{$url}>/del/id/<{$sel.id}>">删除分类</a>
    <{/foreach}>
</ul>


<{include file="public/footer.tpl"}>
