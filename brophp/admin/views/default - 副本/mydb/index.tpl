mydb
<table width="800" align="center" border=1>
<{foreach from=$mydata item="data"}>
    <tr>
        <td><{$data.id}></td>
        <td><{$data.name}></td>
    </tr>
<{/foreach}>
</table>
