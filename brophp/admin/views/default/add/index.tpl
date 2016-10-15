<table width="900" align="center" border='1'>
    <caption><h2>用户表查询结果</h2></caption>
    <tr>
        <th>id</th>
        <th>age</th>
        <th>name</th>
    </tr>
    <{foreach from=$users item='user'}>
        <tr height="30px" align="center">
            <td><{$user.id}></td>
            <td><{$user.age}></td>
            <td><{$user.name}></td>
        </tr>
    <{/foreach}>
    <tr><td align="right" colspan=3><{$page}></td></tr>
</table>

