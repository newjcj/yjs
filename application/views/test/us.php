<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Url</title>
    
</head>
<body>
 <form action="us_submit" method="post" accept-charset="utf-8" id='formone'>
     
 
 
 <p><input type="text" value="a" name="arr[]"></p>
 <p><input type="text" value="b" name="arr[]"></p>
 <p><input type="text" value="c" name="arr[]"></p>
 <p><input type="text" value="d" name="arr[]"></p>
 <p><input type="text" value="e" name="arr[]"></p>
 </form>
<script type="text/javascript" charset="utf-8">
    var str=document.getElementsByName('arr[]');
    alert(str[2].value);
</script>

</body>
</html>
