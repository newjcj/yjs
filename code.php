<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Code</title>
        
</head>
<body>
    <div id="name">
        <form action="./code.php" method="post" accept-charset="utf-8">
            <input type="text" name="code" /><br>
            <input type="submit" name="sub" value="提交">
        </form>
    </div>
</body>
</html>
<?php
    echo $_POST['code'];
?>
