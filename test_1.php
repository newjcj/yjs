<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Test_1</title>
    
</head>
<body>
    <div id="name">
        <script type="text/javascript" charset="utf-8">
               var exdate=new Date();
               exdate.setDate(exdate.getDate()+1);
               //document.cookie=c_name+ "=" +escape(value)+ ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
            document.cookie="aaaa=cccccc;expires="+exdate.toGMTString()+";path=/";
            document.cookie="bbbbbbb=cccccc;expires="+exdate.toGMTString();
            document.cookie="ccccccc=cccccc;expires="+exdate.toGMTString();
            alert(document.cookie);
            document.write(document.cookie);
        </script>
    </div>
</body>
</html>
<?php
print_r($_COOKIE);
?>
