<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin 菜单 Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <php lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <php lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8">
         <!-- 引入 ECharts 文件 -->
        <script src="<?=base_url();?>public/js/echarts.js"></script>
        <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
        <!-- metronic模板 -->
        <meta charset="utf-8" />
        <title>品牌分析</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url()?>tpl/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url()?>tpl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url()?>tpl/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url()?>tpl/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url()?>tpl/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- date-->
         <!-- BEGIN GLOBAL MANDATORY STYLES datecss components_date_time_pickers.html -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url();?>/tpl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url();?>/tpl/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/tpl/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url();?>/tpl/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- date-->

        <script src="<?php echo base_url();?>/public/js/ajax3.0.js"></script>
        <script src="<?php echo base_url();?>/public/js/jq.js"></script>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <!-- <div id='json' style='color:red;float:left;padding-top:200px;z-index=50111000;'></div> -->
        
        <?php $this->load->view('public/view_user')?><!--加载右上user--> 
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  " action="page_general_search_3.php" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        
                        
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商流量分析</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/rate');?>" class="nav-link ">
                                        <span class="title">店铺经营概况</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?=site_url('yjs/rate2');?>" class="nav-lin ">
                                        <span class="title">店铺流量概况</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/rate3');?>" class="nav-link ">
                                        <span class="title">实时访客</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="<?php echo site_url('yjs/related_real_src');?>" class="nav-link ">
                                        <span class="title">实时榜单</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商引流词分析</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?=site_url('yjs/related');?>" class="nav-link ">
                                        <span class="title">相关词查询</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?=site_url('yjs/related_shop');?>" class="nav-link ">
                                        <span class="title">关键词商品销售商家</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商排名分析</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_ranking');?>" class="nav-link ">
                                        <span class="title">pc端搜索排名查询</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_cate_pc');?>" class="nav-link ">
                                        <span class="title">pc端类目排名查询</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_cate_app');?>" class="nav-link ">
                                        <span class="title">app端/M端搜索排名查询</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="<?php echo site_url('yjs/related_cate_w');?>" class="nav-link ">
                                        <span class="title">微信端搜索排名查询</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">排名监测</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('datasearch/r_getcontent_c');?>" class="nav-link ">类目排监测</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('datasearch/related_search_survey');?>" class="nav-link ">搜索挂名监测</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item staret active open  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商行业分析</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_trade');?>" class="nav-link nav-toggle">
                                        <span class="title">行业分析</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item  ">
                                            <a href="<?php echo site_url('yjs/related_trade');?>" class="nav-link ">行业整体分析</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_hot_shop_ranking');?>" class="nav-link ">热销商家排行</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_hot_goods_ranking');?>" class="nav-link ">热销商品排行</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_rise_goods_ranking');?>" class="nav-link ">飙升商品排行</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_bull_analyse');?>" class="nav-link ">买家购买分析</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_bull_pro_analyse');?>" class="nav-link ">买家特征分析</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  staret active open">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">品牌排行</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item staret active open">
                                            <a href="<?php echo site_url('yjs/related_barnd_detail');?>" class="nav-link ">品牌分析</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_barnd_detail_1');?>" class="nav-link ">品牌详情</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">属性分析</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_attr_detail');?>" class="nav-link ">属性分析</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="<?php echo site_url('yjs/related_attr_detail_1');?>" class="nav-link ">属性详情</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                         <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商热词榜</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_cate_host_word');?>" class="nav-link ">
                                        <span class="title">类目相关热词查询</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_goods_title_analyse');?>" class="nav-link ">
                                        <span class="title">商品标题分析</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_trade_hot_word');?>" class="nav-link ">
                                        <span class="title">关联行业热词</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/related_hot_word_detail');?>" class="nav-link ">
                                        <span class="title">热词详情</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="portlet ">
                        <form class="form-inline" action="<?=site_url('yjs/related_barnd_detail');?>" method="get" id="dateform">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3"></label>
                          </div>
                          <select class="form-control" name="cate1" id="cate1" onchange="showcate1(this)">
                              <option value="1">一级类目</option>
                          </select>
                          <select class="form-control" name="cate2" id="cate2" onchange="showcate2(this)">
                              <option value="1">二级类目</option>
                          </select>
                          <select class="form-control" name="cate3" id="cate3">
                              <option value="1">三级类目</option>
                          </select>
                          <select class="form-control" name="date" id='dateid'>
                              <option value="1">最近1天</option>
                              <option value="7">最近7天</option>
                              <option value="30">最近30天</option>
                              <option value="30">上个季度</option>
                              <option value="30">上个月</option>
                          </select>
                          <select class="form-control" name="method" id='methodid'>
                              <option value="1">全部</option>
                              <option value="2">pc</option>
                              <option value="3">无线整体</option>
                              <option value="4">app</option>
                              <option value="5">M端</option>
                              <option value="6">微信</option>
                              <option value="7">手Q</option>
                          </select>
                          <button type="submit" class="btn btn-default">查询</button>
                          <script>
                              function getCate(cateid,obj,catename,select_num){
                                    Ajax('json',false).post("getCate",{cateid:cateid},function(data){
                                            window.d_cate1=data;
                                    });
                                    var obj_cate1=document.getElementById(obj);
                                        obj_cate1.innerHTML='';
                                    var d_cate1=window.d_cate1;
                                    d_cate1=d_cate1.jingdong_category_read_findByPId_responce.categories;
                                    var cate1s=document.createElement('option');
                                    cate1s.innerHTML=catename;
                                    cate1s.value='1';
                                    if(cateid == '1'){
                                            window.cate2.innerHTML="<option >二级类目</option>";
                                            window.cate3.innerHTML="<option >三级类目</option>";
                                            return;
                                        }
                                    obj_cate1.appendChild(cate1s);
                                    for(var i=0;i<d_cate1.length;i++){
                                            var cate1s=document.createElement('option');
                                            cate1s.innerHTML=d_cate1[i].name;
                                            cate1s.value=d_cate1[i].id;
                                            //设置选择同步
                                            if(select_num!=undefined){
                                                if(select_num==i){
                                                    cate1s.selected=true;
                                                }
                                            }
                                            obj_cate1.appendChild(cate1s);
                                    }
                                    //alert(select_num);
                              }
                              function showcate1(obj){
                                    getCate(obj.selectedOptions[0].value,'cate2','二级类目');
                              }
                              function showcate2(obj){
                                    getCate(obj.selectedOptions[0].value,'cate3','三级类目');
                              }
                              //设置选择同步
                              var selected_cate1="<?php echo $cate1?>";
                              var selected_cate2="<?php echo $cate2?>";
                              var selected_cate3="<?php echo $cate3?>";
                              //跟据传过来的cate1的value 得到options的index
                              getCate(0,'cate1','一级类目');
                              function getCateIndex(obj,opvalue){
                                  for(var i=0;i<obj.length;i++){
                                        if(obj.options[i].value==opvalue){
                                            var cate_index=i-1;
                                        }
                                  }
                                  return cate_index;
                                }
                              getCate(0,'cate1','一级类目',getCateIndex(window.cate1,selected_cate1));
                              if(selected_cate1!=''){
                                  getCate(selected_cate1,'cate2','二级类目');
                                  getCate(selected_cate1,'cate2','二级类目',getCateIndex(window.cate2,selected_cate2));
                                }
                              if(selected_cate2!=''){
                                  getCate(selected_cate2,'cate3','三级类目');
                                  getCate(selected_cate2,'cate3','三级类目',getCateIndex(window.cate3,selected_cate3));
                                }
                          </script>
                        </form>
                                
                    </div>
                        <div class="panel panel-default" style="width:50%;height:500px;border:1px solid green;background:;display:none;position:absolute;z-index:999;left:200px;" id="show">
                            <div style="width:20px;height:20px;color:red;font-size:2em;float:right;margin-top:0px;" id="del" onclick="del(this)">×</div>
                        </div>
                        <button type="button" class="btn btn-default navbar-btn" onclick="gtitle1()">品牌热销排行</button>
                        <button type="button" class="btn btn-default navbar-btn" onclick="gtitle2()">飙升品牌排行</button>
                        <script>
                            function gtitle1(){
                                window.g1.style.display="block";
                                window.g2.style.display="none";
                                window.main.style.display="block";
                                window.main2.style.display="none";
                            }
                            function gtitle2(){
                                window.g1.style.display="none";
                                window.g2.style.display="block";
                                window.main1.style.display="none";
                                window.main2.style.display="block";
                            }
                            
                            window.onload=function(){
                                //window.g3.style.display="none";
                                //window.main3.style.display="none";
                                window.g2.style.display="none";
                                window.main2.style.display="none";
                            }
                        </script>
                        <div class="portlet box green" data='cc' id="g1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>品牌热销排行 </div>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form action="<?=site_url('datainto/related_hot_shop_ranking')?>" method="post" id="formdata">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> 序号</th>
                                                    <th> 品牌</th>
                                                    <th> 品牌编号</th>
                                                    <th> 热卖指数</th>
                                                    <th> 人气指数</th>
                                                    <th> 时间 </th>
                                                    <th> 详情 </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <?php foreach($data['detail']['BrandID']['value'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <input type="hidden" value="<?php echo $key+1;?>" name="key[]" />  <!-- 序号 -->
                                                        <input type="hidden" value="<?php echo $province[]=$data['detail']['BrandName']['value'][$key]?>" name="prosku[]" />    <!-- 品牌 --> 
                                                        <input type="hidden" value="<?php echo $province[]=$data['detail']['BrandID']['value'][$key]?>" name="prosku[]" />    <!-- 品牌 --> 
                                                        <input type="hidden" value="<?php echo $ord_goods[]=$data['detail']['SalesIndex']['value'][$key]?>" name="prosku[]" />    <!-- 热卖指数 -->
                                                        <input type="hidden" value="<?php echo $data['detail']['PopularityIndex']['value'][$key]?>" name="prosku[]" />    <!-- 人气指数 -->
                                                        
                                                        <input type="hidden" value=" <?php echo date("Y-m-d H:m:s",time())?>" name="prosku[]" />    <!-- 时间 -->
                                                        
                                                        
                                                        <td><?php echo $key+1;?></td>                                                
                                                        <td> <?php echo $data['detail']['BrandName']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['BrandID']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['SalesIndex']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['PopularityIndex']['value'][$key]?></td>                                                
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>                                                
                                                        <td><input type="button" value="点击查看" name="chk[]" onclick="shop_list(this)"></td>                                                                                               
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
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
                                                //设置搜索
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
                                    </div>
                        </div>
                        <div class="portlet box green" data='cc' id="g2">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>飙升品牌排行 </div>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form action="<?=site_url('datainto/related_barnd_detail_1')?>" method="post" id="formdata">
                                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th> 序号</th>
                                                    <th> 品牌</th>
                                                    <th> 品牌id</th>
                                                    <th> 热卖指数</th>
                                                    <th> 热卖变化率</th>
                                                    <th> 人气指数</th>
                                                    <th> 人气变化率</th>
                                                    <th> 时间 </th>
                                                    <th> 详情 </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <?php foreach($data1['detail']['BrandID']['value'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <input type="hidden" value="<?php echo $key+1;?>" name="key[]" />  <!-- 序号 -->
                                                        <input type="hidden" value="<?php echo $data1['detail']['BrandID']['value'][$key]?>" name="brandid[]" />    <!-- 品牌id --> 
                                                        <input type="hidden" value="<?php echo $data1['detail']['BrandName']['value'][$key]?>" name="prosku[]" />    <!-- 品牌 --> 
                                                        <inp1ut type="hidden" value="<?php echo $data1['detail']['SalesIndex']['value'][$key]?>" name="prosku[]" />    <!-- 热卖指数 --> 
                                                        <inp1ut type="hidden" value="<?php echo $data1['detail']['SalesIndexRatio']['value'][$key]?>" name="prosku[]" />    <!-- 热卖变化率 -->
                                                        <input type="hidden" value="<?php echo $data1['detail']['PopularityIndex']['value'][$key]?>" name="prosku[]" />    <!-- 人气指数 -->
                                                        <input type="hidden" value="<?php echo $data1['detail']['PopularityIndexRatio']['value'][$key]?>" name="prosku[]" />    <!-- 人气变化率 -->
                                                        
                                                        <input type="hidden" value=" <?php echo date("Y-m-d H:m:s",time())?>" name="prosku[]" />    <!-- 时间 -->
                                                        
                                                        
                                                        <td><?php echo $key+1;?></td>  <!--序号-->                                              
                                                        <td> <?php echo $data1['detail']['BrandName']['value'][$key]?></td>  <!--品牌-->                                              
                                                        <td> <?php echo $data1['detail']['BrandID']['value'][$key]?></td>  <!--品牌id-->                                              
                                                        <td> <?php echo $data1['detail']['SalesIndex']['value'][$key]?></td>  <!--热卖指数-->                                              
                                                        <td> <?php echo $data1['detail']['SalesIndexRatio']['value'][$key]?></td> <!--热卖变化率-->                                               
                                                        <td> <?php echo $data1['detail']['PopularityIndex']['value'][$key]?></td> <!--人气指数-->                                               
                                                        <td> <?php echo $data1['detail']['PopularityIndexRatio']['value'][$key]?></td><!--人气变化率-->                                                
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>   <!--时间-->                                             
                                                        <td><input type="button" value="点击查看" name="chk[]" onclick="shop_list_1(this)"></td>                                                                                               
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
                                        <script>
                                            //搜索
                                            function shop_list_1(obj){
                                                obj.parentNode.parentNode.style="background:#ccddaa";
                                                var ch=document.getElementsByName('chk[]');
                                                for(var i=0;i<ch.length;i++){
                                                    if(ch[i]==obj){
                                                        var nums=i;
                                                    }
                                                }
                                                var trs=document.getElementsByTagName('tr');
                                                for(var i in trs){
                                                    if(i==0 || trs[i].innerHTML==undefined){
                                                        continue;
                                                    }
                                                    if(i==nums+1){
                                                        var tds=trs[i];
                                                    }
                                                }
                                                var items=new Array('num','brand','brand_num','hotsail','hostsail_ch','popuindex','popu_ch','date','detail');//传值的键
                                                var values=new Array();
                                                var a=0;
                                                for(var i in tds.childNodes){
                                                    if(tds.childNodes[i].nodeName=="TD"){
                                                        var iname=items[a];
                                                        values[iname]=tds.childNodes[i].innerHTML;//得到tr对象
                                                        a++;
                                                    }
                                                }
                                                //设置搜索
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
                                                var attr1=['brand','cate1','cate2','cate3','method','date'];
                                                var attr2=[
                                                        values['brand_num'],
                                                        '<?php echo $this->input->get('cate1')?>',
                                                        '<?php echo $this->input->get('cate2')?>',
                                                        '<?php echo $this->input->get('cate3')?>',
                                                        '<?php echo $this->input->get('method')?>',
                                                        '<?php echo $this->input->get('date')?>'
                                                        ];
                                                var url=encodeURI(show_redirect(attr1,attr2));
                                                window.location.href="<?php echo site_url('yjs/related_barnd_detail_1')?>?"+url;
                                            }
                                        </script>
                                    </div>
                        </div>
                    </div>
                        
                        
                      
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    <div class="row">
                        
                       
                    </div>
                    
                <!-- END CONTENT BODY -->
            </div>

            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            
                  

            <!-- END QUICK SIDEBAR -->

         
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 武汉联合启商网络科技有限公司
                <!-- <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a> -->
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
       
         
        <!-- END FOOTER -->
       
        <script src="<?php echo base_url();?>/public/yjs/related_hot_shop_ranking/js/myjs.js"></script>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url();?>tpl/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url();?>tpl/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url();?>tpl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url();?>tpl/assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- date -->
        <script src="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/tpl/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/tpl/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/tpl/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- date -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url();?>tpl/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- bootstrap-->
        <script src="<?php echo base_url();?>/public/js/bootstrap.js"></script>
        <script src="<?php echo base_url();?>/public/js/bootstrap.min.js"></script>
        
        <!-- END THEME LAYOUT SCRIPTS -->
        <script type="text/javascript">
            $(function(){
               // alert(22);
               $('.nav-link').click(function(){
                //alert(1);
               });
            })
        </script>
    </body>

</html>
