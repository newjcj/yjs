<html>
<head></head>

<body>
    <form action="<{$url}>/login" method="post">
        <table border="1px" width="300px" align="center">
            <caption><h2>用户登录</h2></caption>
            <tr>
                <th>用户名：</th><td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>密码：</th><td><input type="passowrd" name="password"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="sub" value="登录"></td>
            </tr>
        </table>
    </form>
</body>
</html>
