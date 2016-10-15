<html>
<head>
    <title>Ajax</title>
    <script src="<{$public}>/js/ajax3.0.js"></script>
</head>
<body>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    <div id="one">加载中。。。</div>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    rrrrrrrrrrrrrrrrrrrrrr<br>
    <script>
        function show(){
            var data='';
            Ajax().get("<{$url}>/test",function(data){
                document.getElementById('one').innerHTML=data;
            });
        }
    </script>
    <input onclick="show()" type="button" value="点击">
</body>
</html>
