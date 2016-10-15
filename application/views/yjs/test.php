<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title></title>
</head>
<body>
    <div id="name" style="width:200px;height:300px;background:red;">
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
        eeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
    </div>
    <input type="button" name="some_name" value="222" id="btn">
    <script type="text/javascript" charset="utf-8">
        window.btn.onclick=function(){
            alert(33);
            Ajax('html',false).post('getCate1',{},function(data){
                alert(data);
            });
        }
    </script>
</body>
</html>
