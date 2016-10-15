<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" onclick="show_g('0')">移动端整体</button>
  <button type="button" class="btn btn-default" onclick="show_g(1)">M端</button>
  <button type="button" class="btn btn-default" onclick="show_g(2)">app端</button>
  <button type="button" class="btn btn-default" onclick="show_g(3)">微信端</button>
  <button type="button" class="btn btn-default" onclick="show_g(4)">手机qq端</button>
  <button type="button" class="btn btn-default" onclick="show_g(10)">其它</button>
</div>
<div class="portlet box green" data='cc' id="g4">
                                    
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>移动端经营概况->时段分布 </div>
                <div class="tools"> </div>
                
            </div>
            <div class="portlet-body">
                <form action="<?=site_url('datainto/related_hot_shop_ranking')?>" method="post" id="formdata">
                <table class="table table-striped table-bordered table-hover" id="sample_4">
                    <thead>
                        <tr>
                            <th> 序号</th>
                            <th> 时间段</th>
                            <th> 浏览量</th>
                            <th> 访客数</th>
                            <th> 下单金额 </th>
                            <th> 下单客户数 </th>
                            <th> 下单单量 </th>
                            <th> 下单商品件数 </th>
                            <th> 日期 </th>
                            <th> 保存 </th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <?php $data['detail']=$data2['detail'][$method]?>
                        <?php foreach($data['detail']['TimeSeg']['value'] as $key=>$value){?>
                            <tr id="tr_db">
                                
                                <td><?php echo $key+1;?></td> <!--序号-->            
                                <td> <?php echo $data['detail']['TimeSeg']['value'][$key]."-".$data['detail']['TimeSeg']['value'][$key+1]."点"?></td><!--时间段-->                                                
                                <td> <?php echo $data['detail']['PV']['value'][$key]?></td>   <!--浏览量-->                                             
                                <td> <?php echo $data['detail']['UV']['value'][$key]?></td>   <!--访客数-->                                             
                                <td> <?php echo $data['detail']['OrdAmt']['value'][$key]?></td> <!--下单金额-->                                               
                                <td> <?php echo $data['detail']['OrdCustNum']['value'][$key]?></td>  <!--下单客户数-->                                              
                                <td> <?php echo $data['detail']['OrdProNum']['value'][$key]?></td> <!--下单单量-->                                               
                                <td> <?php echo $data['detail']['OrdNum']['value'][$key]?></td>   <!--下单商品件数-->                                             
                                <td> <?php echo date("Y-m-d H:m:s",time())?></td> <!--日期-->                                               
                                <td><input type="button" value="保存" name="r_getcontent_shop_general_m_2[]" onclick="r_getcontent_shop_general_m_2(this,'<?php echo $method?>')"></td><!--保存-->                                                                                               
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                </form>

            </div>
</div>