<script>
                                            //搜索
                                            function shop_list(obj){
                                                obj.parentNode.parentNode.style="background:#ccddaa";
                                                var ch=document.getElementsByName('chk[]');
                                                for(var i=0;i<ch.length;i++){
                                                    if(ch[i]==obj){
                                                        var nums=i;
                                                    }
                                                }
                                                alert(nums);
                                                var trs=document.getElementsByTagName('tr');
                                                for(var i in trs){
                                                    if(i==0 || trs[i].innerHTML==undefined){
                                                        continue;
                                                    }
                                                    if(i==nums+1){
                                                        var tds=trs[i];
                                                    }
                                                }
                                                var items=new Array('num','brand','brand_num','hotsail','popu','date','detail');//传值的键
                                                var values=new Array();
                                                var a=0;
                                                for(var i in tds.childNodes){
                                                    if(tds.childNodes[i].nodeName=="TD"){
                                                        var iname=items[a];
                                                        values[iname]=tds.childNodes[i].innerHTML;//得到tr对象
                                                        a++;
                                                    }
                                                }
                                                /*for(var i in values){
                                                    document.write(i+"=========="+values[i]+"<br>");
                                                }*/
                                                /*Ajax().post('<?php echo site_url("yjs/one")?>',{num:values['num'],brand_num:values['brand_num'],hotsail:values['hotsail'],popu:values['popu'],date:values['date'],detail:values['detail']},function(data){
                                                        alert(data);
                                                });*/
                                                //去空格
                                                String.prototype.trim=function() {
                                                    return this.replace(/(^\s*)|(\s*$)/g,'');
                                                }
                                                function show_redirect(arr1,arr2){
                                                    var str='';
                                                    for(var i in arr1){
                                                        str+=arr1[i].trim()+"="+arr2[i].trim()+"&";
                                                    }
                                                    return str;
                                                }
                                                var url=encodeURI(show_redirect(['brand','cate1','cate2','cate3','method','date'],[values['brand_num'],'<?php echo $this->input->get('cate1')?>','<?php echo $this->input->get('cate2')?>','<?php echo $this->input->get('cate3')?>','<?php echo $this->input->get('method')?>','<?php echo $this->input->get('date')?>']));
                                                window.location.href="<?php echo site_url('yjs/related_barnd_detail_1')?>?"+url;
                                            }
                                        </script>
