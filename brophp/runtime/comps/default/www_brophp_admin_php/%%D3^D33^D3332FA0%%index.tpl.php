<?php /* Smarty version 2.6.18, created on 2016-04-28 11:42:40
         compiled from login/index.tpl */ ?>
<html>
<head></head>

<body onload="document.getElementById('login-form').name.focus()">

    <form action="<?php echo $this->_tpl_vars['url']; ?>
/login" method="post" id="login-form">
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