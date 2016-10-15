<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Aj1</title>
  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body>
    <div id="one">
        
    </div>
     <script type="text/javascript" charset="utf-8">
        // $(function(){

             var url='http://api.sbj.com/one.php';
             // var url='./1.php';
   // $.ajax({
     // url:url,
     // dataType:'json',
     // processData: false, 
     // type:'get',
     // success:function(data){
       // alert(data);
     // },
     // error:function(XMLHttpRequest, textStatus, errorThrown) {
       // alert(XMLHttpRequest.status);
       // alert(XMLHttpRequest.readyState);
       // alert(textStatus);
     // }});
		
			// $.get('./1.php',function(data){
				// alert(data.username);
			// });
		
		
        // });
		
		// Ajax().get('./1.php',function(data){
			// alert(data);
		// });
		
		
		
		
$(document).ready(function(){

 $.ajax(  
        {  
            type:'get',  
            url : 'http://api.sbj.com/one.php?loginuser=lee&loginpass=123456',  
            dataType : 'jsonp',  
            jsonp:"jsoncallback",  
            success  : function(data) {  
                alert("用户名："+ data.user +" 密码："+ data.pass);  
            },  
            error : function() {  
                alert('fail');  
            }  
        }  
    );  
 // alert(22);
});

     </script>
</body>
</html>
