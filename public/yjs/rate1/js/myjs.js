$(function(){
    $("#dateform input[name=sdate]")[0].value=date_1.date1;
    $("#databutton")[0].setAttribute("data-date",date_1.date1);
   // 分配商品名称
    if(arrdata['goodsname']!=null){
          $("#goodsname_title").html("商品名称:&nbsp;<font color='red'>"+arrdata['goodsname'][1]+"</font>");
         //分配商品uv pv
          $('#pageview')[0].setAttribute('data-value',arrdata['goodspv'][1]);//浏览量
          $('#visitor')[0].setAttribute('data-value',arrdata['goodsuv'][1]);//访客数
    }else{
         $("#goodsname_title").html("&nbsp;<font color='red'>无人访问</font>");
    }
    //document.getElementById('pcvisitor').setAttribute('data-value',arr1['pcvisitor']);//访问次数
    //分配gsku
    $("#goodsid")[0].value=gsku;
});
