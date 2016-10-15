<body>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
    
        <title></title>
        
    </head>
    <body>
        <select name="" id="cate1" onchange="getCate(this)" onclick="b(33)">
            <option value="1">a</option>
            <option value="2">b</option>
            <option value="3">c</option>
            <option value="4">d</option>
        </select>
            <form action="http://localhost/y/te.php" method="get">
                <input type="text"  id="test" value="">
                
                <input type="submit"  value="提交">
            </form>
    </body>
</body>
<script>
window.test.name="one";
for(var i in window.test){
   // document.write(i+"======="+window.test[i]+"<br>");
}
function a(cc){
    alert(cc);
}
function b(info){
    a(info);
}

</script>
<?php
    print($_GET);
echo 3333;
echo $_GET['one'];
?>
