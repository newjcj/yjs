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
        <script src="<?=base_url();?>public/js/echarts1.js"></script>
        <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
        <!-- metronic模板 -->
        <meta charset="utf-8" />
        <title>店铺流量概况</title>
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
                            <form action="<?=site_url('yjs/rate2');?>" method="get" id="dateform">
                                
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        
                        
                        <li class="nav-item staret active open">
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
                                <li class="nav-item staret active open ">
                                    <a href="<?=site_url('yjs/rate2');?>" class="nav-lin ">
                                        <span class="title">店铺流量概况</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/rate3');?>" class="nav-link ">
                                        <span class="title">实时访客</span>
                                    </a>
                                    <li class="nav-item ">
                                    <a href="<?php echo site_url('yjs/related_real_src');?>" class="nav-link ">
                                        <span class="title">实时榜单</span>
                                    </a>
                                </li>
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
                        <li class="nav-item  ">
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
                                <li class="nav-item  ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">品牌排行</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item ">
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
                    <div class="" style="height:80px;">
                        <form action="<?=site_url('yjs/rate');?>" method="get" id="dateform">
                            <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" onclick="summ1(1)">全部</button>
                              <button type="button" class="btn btn-default" onclick="summ1(2)">pc</button>

                              <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  无线
                                  <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a  onclick="summ1(3)">无线整体</a></li>
                                  <li><a  onclick="summ1(4)">APP</a></li>
                                  <li><a  onclick="summ1(5)">M端</a></li>
                                  <li><a  onclick="summ1(6)">微信</a></li>
                                  <li><a  onclick="summ1(7)">手Q</a></li>
                                </ul>
                              </div>
                            </div>
                        </form>
                        <div class="btn-group btn-group-xs" role="group" aria-label="..." style="margin-top:10px;" >
                            <button type="button" class="btn btn-default" onclick="showtime(3000)">3秒更新</button>
                            <button type="button" class="btn btn-default" onclick="showtime(10000)">10秒更新</button>
                            <button type="button" class="btn btn-default" onclick="showtime(20000)">20秒更新</button>
                        </div>
                    </div>
                        
                        <script>
                            //window.myuv='<?php echo $data1["myuv"]?>';
                            myuvs=200;
                            window.onload=function(){
                                dosummary();
                            }
                            
                        </script>
                        
                        <!--显示摘要-->
                        <div class="row" id="row_id_1">
                            <div id="summary" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span0" data-value="<?php echo $data1['summary1'][0]?>"></span>
                                        </div>
                                        <div class="desc"> 浏览量 </div>
                                        <div class="number" style="font-size:14px;margin-top:-20px;display:none">
                                            浏览量:&nbsp;&nbsp;<span style="" data-counter="counterup" data-value="<?php echo $data1['summary1'][0]?>"></span>
                                            <nav style="width:20px;display:inline-block;"></nav>
                                            浏览量:&nbsp;&nbsp;<span style="" data-counter="counterup" data-value="<?php echo $data1['summary1'][0]?>"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span1" data-value="<?php echo $data1['summary1'][1]?>">0</span>
                                        </div>
                                        <div class="desc"> 访客数 </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span2" data-value="<?php echo $data1['summary1'][2]?>">0</span>
                                        </div>
                                        <div class="desc">下单单量</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span3" data-value="<?php echo $data1['summary1'][3]?>">0</span>
                                        </div>
                                        <div class="desc"> 下单金额 </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span4" data-value="<?php $pron=$data1['summary1'][4];echo ceil($pron)?>">0</span>
                                        </div>
                                        <div class="desc"> 下单商品件数</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span5" data-value="<?php echo $data1['summary1'][5]?>">0</span>
                                        </div>
                                        <div class="desc">成交单量 </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span6" data-value="<?php echo $data1['summary1'][6]?>">0</span>
                                        </div>
                                        <div class="desc"> 成交金额 </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" id="span7" data-value="<?php echo $data1['summary1'][7]?>">0</span>
                                        </div>
                                        <div class="desc">成交商品件数</div>
                                    </div>
                                </a>
                            </div>
                            <script>
                            function summ1(num,showinfo){
                                    window.num=num;
                                    Ajax('json',true).post('rate2_1',{method:num},function(data){
                                        function dosumm(num){
                                            var idname='span'+num;
                                            var idname1='span_'+num;
                                            var idname1=document.getElementById(idname);
                                            idname1.setAttribute("data-value",data.summary1[num]);
                                        }
                                        for(var i=0;i<8;i++){
                                            dosumm(i);
                                        }
                                        dosummary();//调用一下加载数据的js
                                        //uv
                                        window.uv_data=data.currentData.UV.value;
                                        window.uv_data_t=data.lastData.UV.value;
                                        window.uv_max=data['myuv_max'];
                                        //pv
                                        window.pv_data=data.currentData.PV.value;
                                        window.pv_data_t=data.lastData.PV.value;
                                        window.pv_max=data['mypv_max'];
                                        //DealNum   下单单量
                                        window.DealNum_data=data.currentData.DealNum.value;
                                        window.DealNum_data_t=data.lastData.DealNum.value;
                                        window.DealNum_max=data['myDealNum_max'];
                                        //DealProNum   成交单量
                                        window.DealProNum_data=data.currentData.DealProNum.value;
                                        window.DealProNum_data_t=data.lastData.DealProNum.value;
                                        window.DealProNum_max=data['myDealProNum_max'];
                                        //OrdAmt    下单金额
                                        window.OrdAmt_data=data.currentData.OrdAmt.value;
                                        window.OrdAmt_data_t=data.lastData.OrdAmt.value;
                                        window.OrdAmt_max=data['myOrdAmt_max'];
                                        //DealAmt    成交金额
                                        window.DealAmt_data=data.currentData.DealAmt.value;
                                        window.DealAmt_data_t=data.lastData.DealAmt.value;
                                        window.DealAmt_max=data['myDealAmt_max'];
                                        //OrdNum     下单商品件数
                                        window.OrdNum_data=data.currentData.OrdNum.value;
                                        window.OrdNum_data_t=data.lastData.OrdNum.value;
                                        window.OrdNum_max=data['myOrdNum_max'];
                                        //OrdProNum    成交商品件数
                                        window.OrdProNum_data=data.currentData.OrdProNum.value;
                                        window.OrdProNum_data_t=data.lastData.OrdProNum.value;
                                        window.OrdProNum_max=data['myOrdProNum_max'];
                                        doechars_uv1();
                                        doechars_uv2();
                                        doechars_DealNum();
                                        doechars_DealProNum();
                                        doechars_OrdAmt();
                                        doechars_DealAmt();
                                        doechars_OrdNum();
                                        doechars_OrdProNum();
                                    });
                                    if(window.dt && !showinfo){
                                        clearInterval(window.dt);
                                    }
                                    //设置图表数据
                                    
                            }
                            function showtime(num){
                                if(window.dt){clearInterval(window.dt);}
                                if(num){
                                    window.dt=setInterval('summ1(window.num,true)',num);
                                }
                            }
                            summ1();
                        </script>
                        </div>
                        <!--显示摘要-->
                        <ul class="nav nav-tabs" id="e_show">
                          <li role="presentation" class="active" id="eshow1" onclick="eshow(this)"><a  >流量 </a></li>
                          <li role="presentation" class="" id="eshow2" onclick="eshow(this)"><a >单量</a></li>
                          <li role="presentation" class="" id="eshow3" onclick="eshow(this)"><a  >金额</a></li>
                          <li role="presentation" class="" id="eshow4" onclick="eshow(this)"><a  >商品件数</a></li>
                        </ul>
                        
                        <div id='c1' style="display:block">
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main2" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_uv2(){
                                doechar();
                                var myChart = echarts.init(document.getElementById('main2'));
                               var option = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日流量','今日流量']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '流量',
                                            min: 0,
                                            max: pv_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日流量',
                                            type:'line',
                                            data:[pv_data_t[0],pv_data_t[1],pv_data_t[2],pv_data_t[3],pv_data_t[4],pv_data_t[5],pv_data_t[6],pv_data_t[7],pv_data_t[8],pv_data_t[9],pv_data_t[10],pv_data_t[11],pv_data_t[12],pv_data_t[13],pv_data_t[14],pv_data_t[15],pv_data_t[16],pv_data_t[17],pv_data_t[18],pv_data_t[19],pv_data_t[20],pv_data_t[21],pv_data_t[22],pv_data_t[23],pv_data_t[24],pv_data_t[25],pv_data_t[26],pv_data_t[27],pv_data_t[28],pv_data_t[29],pv_data_t[30],pv_data_t[31],pv_data_t[32],pv_data_t[33],pv_data_t[34],pv_data_t[35],pv_data_t[36],pv_data_t[37],pv_data_t[38],pv_data_t[39],pv_data_t[40],pv_data_t[41],pv_data_t[42],pv_data_t[43],pv_data_t[44],pv_data_t[45],pv_data_t[46],pv_data_t[47]]
                                        },
                                        {
                                            name:'今日流量',
                                            type:'line',
                                            data:[pv_data[0],pv_data[1],pv_data[2],pv_data[3],pv_data[4],pv_data[5],pv_data[6],pv_data[7],pv_data[8],pv_data[9],pv_data[10],pv_data[11],pv_data[12],pv_data[13],pv_data[14],pv_data[15],pv_data[16],pv_data[17],pv_data[18],pv_data[19],pv_data[20],pv_data[21],pv_data[22],pv_data[23],pv_data[24],pv_data[25],pv_data[26],pv_data[27],pv_data[28],pv_data[29],pv_data[30],pv_data[31],pv_data[32],pv_data[33],pv_data[34],pv_data[35],pv_data[36],pv_data[37],pv_data[38],pv_data[39],pv_data[40],pv_data[41],pv_data[42],pv_data[43],pv_data[44],pv_data[45],pv_data[46],pv_data[47]]
                                        },
                                    ]
                                };

                                    myChart.setOption(option);
                                }
                            </script>
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main1" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_uv1(){
                                doechar();
                                var myChart1 = echarts.init(document.getElementById('main1'));
                               var option1 = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日访客数','今日访客数']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '访客数',
                                            min: 0,
                                            max: uv_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日访客数',
                                            type:'line',
                                            data:[uv_data_t[0],uv_data_t[1],uv_data_t[2],uv_data_t[3],uv_data_t[4],uv_data_t[5],uv_data_t[6],uv_data_t[7],uv_data_t[8],uv_data_t[9],uv_data_t[10],uv_data_t[11],uv_data_t[12],uv_data_t[13],uv_data_t[14],uv_data_t[15],uv_data_t[16],uv_data_t[17],uv_data_t[18],uv_data_t[19],uv_data_t[20],uv_data_t[21],uv_data_t[22],uv_data_t[23],uv_data_t[24],uv_data_t[25],uv_data_t[26],uv_data_t[27],uv_data_t[28],uv_data_t[29],uv_data_t[30],uv_data_t[31],uv_data_t[32],uv_data_t[33],uv_data_t[34],uv_data_t[35],uv_data_t[36],uv_data_t[37],uv_data_t[38],uv_data_t[39],uv_data_t[40],uv_data_t[41],uv_data_t[42],uv_data_t[43],uv_data_t[44],uv_data_t[45],uv_data_t[46],uv_data_t[47]]
                                        },
                                        {
                                            name:'今日访客数',
                                            type:'line',
                                            data:[uv_data[0],uv_data[1],uv_data[2],uv_data[3],uv_data[4],uv_data[5],uv_data[6],uv_data[7],uv_data[8],uv_data[9],uv_data[10],uv_data[11],uv_data[12],uv_data[13],uv_data[14],uv_data[15],uv_data[16],uv_data[17],uv_data[18],uv_data[19],uv_data[20],uv_data[21],uv_data[22],uv_data[23],uv_data[24],uv_data[25],uv_data[26],uv_data[27],uv_data[28],uv_data[29],uv_data[30],uv_data[31],uv_data[32],uv_data[33],uv_data[34],uv_data[35],uv_data[36],uv_data[37],uv_data[38],uv_data[39],uv_data[40],uv_data[41],uv_data[42],uv_data[43],uv_data[44],uv_data[45],uv_data[46],uv_data[47]]
                                        },
                                    ]
                                };

                                    myChart1.setOption(option1);
                                }
                            </script>
                        </div>
                        <div id='c2' style="display:none">
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main3" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_DealNum(){
                                doechar();
                                var myChart1 = echarts.init(document.getElementById('main3'));
                               var option1 = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日下单单量','今日下单单量']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '下单单量',
                                            min: 0,
                                            max: DealNum_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日下单单量',
                                            type:'line',
                                            data:[DealNum_data_t[0],DealNum_data_t[1],DealNum_data_t[2],DealNum_data_t[3],DealNum_data_t[4],DealNum_data_t[5],DealNum_data_t[6],DealNum_data_t[7],DealNum_data_t[8],DealNum_data_t[9],DealNum_data_t[10],DealNum_data_t[11],DealNum_data_t[12],DealNum_data_t[13],DealNum_data_t[14],DealNum_data_t[15],DealNum_data_t[16],DealNum_data_t[17],DealNum_data_t[18],DealNum_data_t[19],DealNum_data_t[20],DealNum_data_t[21],DealNum_data_t[22],DealNum_data_t[23],DealNum_data_t[24],DealNum_data_t[25],DealNum_data_t[26],DealNum_data_t[27],DealNum_data_t[28],DealNum_data_t[29],DealNum_data_t[30],DealNum_data_t[31],DealNum_data_t[32],DealNum_data_t[33],DealNum_data_t[34],DealNum_data_t[35],DealNum_data_t[36],DealNum_data_t[37],DealNum_data_t[38],DealNum_data_t[39],DealNum_data_t[40],DealNum_data_t[41],DealNum_data_t[42],DealNum_data_t[43],DealNum_data_t[44],DealNum_data_t[45],DealNum_data_t[46],DealNum_data_t[47]]
                                        },
                                        {
                                            name:'今日下单单量',
                                            type:'line',
                                            data:[DealNum_data[0],DealNum_data[1],DealNum_data[2],DealNum_data[3],DealNum_data[4],DealNum_data[5],DealNum_data[6],DealNum_data[7],DealNum_data[8],DealNum_data[9],DealNum_data[10],DealNum_data[11],DealNum_data[12],DealNum_data[13],DealNum_data[14],DealNum_data[15],DealNum_data[16],DealNum_data[17],DealNum_data[18],DealNum_data[19],DealNum_data[20],DealNum_data[21],DealNum_data[22],DealNum_data[23],DealNum_data[24],DealNum_data[25],DealNum_data[26],DealNum_data[27],DealNum_data[28],DealNum_data[29],DealNum_data[30],DealNum_data[31],DealNum_data[32],DealNum_data[33],DealNum_data[34],DealNum_data[35],DealNum_data[36],DealNum_data[37],DealNum_data[38],DealNum_data[39],DealNum_data[40],DealNum_data[41],DealNum_data[42],DealNum_data[43],DealNum_data[44],DealNum_data[45],DealNum_data[46],DealNum_data[47]]
                                        },
                                    ]
                                };

                                    myChart1.setOption(option1);
                                }
                            </script>
                        
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main4" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_DealProNum(){
                                doechar();
                                var myChart = echarts.init(document.getElementById('main4'));
                               var option = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日成交单量','今日成交单量']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '成交单量',
                                            min: 0,
                                            max: DealProNum_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日成交单量',
                                            type:'line',
                                            data:[DealProNum_data_t[0],DealProNum_data_t[1],DealProNum_data_t[2],DealProNum_data_t[3],DealProNum_data_t[4],DealProNum_data_t[5],DealProNum_data_t[6],DealProNum_data_t[7],DealProNum_data_t[8],DealProNum_data_t[9],DealProNum_data_t[10],DealProNum_data_t[11],DealProNum_data_t[12],DealProNum_data_t[13],DealProNum_data_t[14],DealProNum_data_t[15],DealProNum_data_t[16],DealProNum_data_t[17],DealProNum_data_t[18],DealProNum_data_t[19],DealProNum_data_t[20],DealProNum_data_t[21],DealProNum_data_t[22],DealProNum_data_t[23],DealProNum_data_t[24],DealProNum_data_t[25],DealProNum_data_t[26],DealProNum_data_t[27],DealProNum_data_t[28],DealProNum_data_t[29],DealProNum_data_t[30],DealProNum_data_t[31],DealProNum_data_t[32],DealProNum_data_t[33],DealProNum_data_t[34],DealProNum_data_t[35],DealProNum_data_t[36],DealProNum_data_t[37],DealProNum_data_t[38],DealProNum_data_t[39],DealProNum_data_t[40],DealProNum_data_t[41],DealProNum_data_t[42],DealProNum_data_t[43],DealProNum_data_t[44],DealProNum_data_t[45],DealProNum_data_t[46],DealProNum_data_t[47]]
                                        },
                                        {
                                            name:'今日成交单量',
                                            type:'line',
                                            data:[DealProNum_data[0],DealProNum_data[1],DealProNum_data[2],DealProNum_data[3],DealProNum_data[4],DealProNum_data[5],DealProNum_data[6],DealProNum_data[7],DealProNum_data[8],DealProNum_data[9],DealProNum_data[10],DealProNum_data[11],DealProNum_data[12],DealProNum_data[13],DealProNum_data[14],DealProNum_data[15],DealProNum_data[16],DealProNum_data[17],DealProNum_data[18],DealProNum_data[19],DealProNum_data[20],DealProNum_data[21],DealProNum_data[22],DealProNum_data[23],DealProNum_data[24],DealProNum_data[25],DealProNum_data[26],DealProNum_data[27],DealProNum_data[28],DealProNum_data[29],DealProNum_data[30],DealProNum_data[31],DealProNum_data[32],DealProNum_data[33],DealProNum_data[34],DealProNum_data[35],DealProNum_data[36],DealProNum_data[37],DealProNum_data[38],DealProNum_data[39],DealProNum_data[40],DealProNum_data[41],DealProNum_data[42],DealProNum_data[43],DealProNum_data[44],DealProNum_data[45],DealProNum_data[46],DealProNum_data[47]]
                                        },
                                    ]
                                };

                                    myChart.setOption(option);
                                }
                            </script>
                        </div>
                        <div id='c3' style="display:none">
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main5" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_OrdAmt(){
                                doechar();
                                var myChart1 = echarts.init(document.getElementById('main5'));
                               var option1 = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日下单金额','今日下单金额']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '下单金额',
                                            min: 0,
                                            max: OrdAmt_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日下单金额',
                                            type:'line',
                                            data:[OrdAmt_data_t[0],OrdAmt_data_t[1],OrdAmt_data_t[2],OrdAmt_data_t[3],OrdAmt_data_t[4],OrdAmt_data_t[5],OrdAmt_data_t[6],OrdAmt_data_t[7],OrdAmt_data_t[8],OrdAmt_data_t[9],OrdAmt_data_t[10],OrdAmt_data_t[11],OrdAmt_data_t[12],OrdAmt_data_t[13],OrdAmt_data_t[14],OrdAmt_data_t[15],OrdAmt_data_t[16],OrdAmt_data_t[17],OrdAmt_data_t[18],OrdAmt_data_t[19],OrdAmt_data_t[20],OrdAmt_data_t[21],OrdAmt_data_t[22],OrdAmt_data_t[23],OrdAmt_data_t[24],OrdAmt_data_t[25],OrdAmt_data_t[26],OrdAmt_data_t[27],OrdAmt_data_t[28],OrdAmt_data_t[29],OrdAmt_data_t[30],OrdAmt_data_t[31],OrdAmt_data_t[32],OrdAmt_data_t[33],OrdAmt_data_t[34],OrdAmt_data_t[35],OrdAmt_data_t[36],OrdAmt_data_t[37],OrdAmt_data_t[38],OrdAmt_data_t[39],OrdAmt_data_t[40],OrdAmt_data_t[41],OrdAmt_data_t[42],OrdAmt_data_t[43],OrdAmt_data_t[44],OrdAmt_data_t[45],OrdAmt_data_t[46],OrdAmt_data_t[47]]
                                        },
                                        {
                                            name:'今日下单金额',
                                            type:'line',
                                            data:[OrdAmt_data[0],OrdAmt_data[1],OrdAmt_data[2],OrdAmt_data[3],OrdAmt_data[4],OrdAmt_data[5],OrdAmt_data[6],OrdAmt_data[7],OrdAmt_data[8],OrdAmt_data[9],OrdAmt_data[10],OrdAmt_data[11],OrdAmt_data[12],OrdAmt_data[13],OrdAmt_data[14],OrdAmt_data[15],OrdAmt_data[16],OrdAmt_data[17],OrdAmt_data[18],OrdAmt_data[19],OrdAmt_data[20],OrdAmt_data[21],OrdAmt_data[22],OrdAmt_data[23],OrdAmt_data[24],OrdAmt_data[25],OrdAmt_data[26],OrdAmt_data[27],OrdAmt_data[28],OrdAmt_data[29],OrdAmt_data[30],OrdAmt_data[31],OrdAmt_data[32],OrdAmt_data[33],OrdAmt_data[34],OrdAmt_data[35],OrdAmt_data[36],OrdAmt_data[37],OrdAmt_data[38],OrdAmt_data[39],OrdAmt_data[40],OrdAmt_data[41],OrdAmt_data[42],OrdAmt_data[43],OrdAmt_data[44],OrdAmt_data[45],OrdAmt_data[46],OrdAmt_data[47]]
                                        },
                                    ]
                                };

                                    myChart1.setOption(option1);
                                }
                            </script>
                        
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main6" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_DealAmt(){
                                doechar();
                                var myChart = echarts.init(document.getElementById('main6'));
                               var option = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日成交金额','今日成交金额']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '成交金额',
                                            min: 0,
                                            max: DealAmt_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日成交金额',
                                            type:'line',
                                            data:[DealAmt_data_t[0],DealAmt_data_t[1],DealAmt_data_t[2],DealAmt_data_t[3],DealAmt_data_t[4],DealAmt_data_t[5],DealAmt_data_t[6],DealAmt_data_t[7],DealAmt_data_t[8],DealAmt_data_t[9],DealAmt_data_t[10],DealAmt_data_t[11],DealAmt_data_t[12],DealAmt_data_t[13],DealAmt_data_t[14],DealAmt_data_t[15],DealAmt_data_t[16],DealAmt_data_t[17],DealAmt_data_t[18],DealAmt_data_t[19],DealAmt_data_t[20],DealAmt_data_t[21],DealAmt_data_t[22],DealAmt_data_t[23],DealAmt_data_t[24],DealAmt_data_t[25],DealAmt_data_t[26],DealAmt_data_t[27],DealAmt_data_t[28],DealAmt_data_t[29],DealAmt_data_t[30],DealAmt_data_t[31],DealAmt_data_t[32],DealAmt_data_t[33],DealAmt_data_t[34],DealAmt_data_t[35],DealAmt_data_t[36],DealAmt_data_t[37],DealAmt_data_t[38],DealAmt_data_t[39],DealAmt_data_t[40],DealAmt_data_t[41],DealAmt_data_t[42],DealAmt_data_t[43],DealAmt_data_t[44],DealAmt_data_t[45],DealAmt_data_t[46],DealAmt_data_t[47]]
                                        },
                                        {
                                            name:'今日成交金额',
                                            type:'line',
                                            data:[DealAmt_data[0],DealAmt_data[1],DealAmt_data[2],DealAmt_data[3],DealAmt_data[4],DealAmt_data[5],DealAmt_data[6],DealAmt_data[7],DealAmt_data[8],DealAmt_data[9],DealAmt_data[10],DealAmt_data[11],DealAmt_data[12],DealAmt_data[13],DealAmt_data[14],DealAmt_data[15],DealAmt_data[16],DealAmt_data[17],DealAmt_data[18],DealAmt_data[19],DealAmt_data[20],DealAmt_data[21],DealAmt_data[22],DealAmt_data[23],DealAmt_data[24],DealAmt_data[25],DealAmt_data[26],DealAmt_data[27],DealAmt_data[28],DealAmt_data[29],DealAmt_data[30],DealAmt_data[31],DealAmt_data[32],DealAmt_data[33],DealAmt_data[34],DealAmt_data[35],DealAmt_data[36],DealAmt_data[37],DealAmt_data[38],DealAmt_data[39],DealAmt_data[40],DealAmt_data[41],DealAmt_data[42],DealAmt_data[43],DealAmt_data[44],DealAmt_data[45],DealAmt_data[46],DealAmt_data[47]]
                                        },
                                    ]
                                };

                                    myChart.setOption(option);
                                }
                            </script>
                        </div>
                        <div id='c4' style="display:none">
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main7" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_OrdNum(){
                                doechar();
                                var myChart1 = echarts.init(document.getElementById('main7'));
                               var option1 = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日下单商品件数','今日下单商品件数']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '下单商品件数',
                                            min: 0,
                                            max: OrdNum_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日下单商品件数',
                                            type:'line',
                                            data:[OrdNum_data_t[0],OrdNum_data_t[1],OrdNum_data_t[2],OrdNum_data_t[3],OrdNum_data_t[4],OrdNum_data_t[5],OrdNum_data_t[6],OrdNum_data_t[7],OrdNum_data_t[8],OrdNum_data_t[9],OrdNum_data_t[10],OrdNum_data_t[11],OrdNum_data_t[12],OrdNum_data_t[13],OrdNum_data_t[14],OrdNum_data_t[15],OrdNum_data_t[16],OrdNum_data_t[17],OrdNum_data_t[18],OrdNum_data_t[19],OrdNum_data_t[20],OrdNum_data_t[21],OrdNum_data_t[22],OrdNum_data_t[23],OrdNum_data_t[24],OrdNum_data_t[25],OrdNum_data_t[26],OrdNum_data_t[27],OrdNum_data_t[28],OrdNum_data_t[29],OrdNum_data_t[30],OrdNum_data_t[31],OrdNum_data_t[32],OrdNum_data_t[33],OrdNum_data_t[34],OrdNum_data_t[35],OrdNum_data_t[36],OrdNum_data_t[37],OrdNum_data_t[38],OrdNum_data_t[39],OrdNum_data_t[40],OrdNum_data_t[41],OrdNum_data_t[42],OrdNum_data_t[43],OrdNum_data_t[44],OrdNum_data_t[45],OrdNum_data_t[46],OrdNum_data_t[47]]
                                        },
                                        {
                                            name:'今日下单商品件数',
                                            type:'line',
                                            data:[OrdNum_data[0],OrdNum_data[1],OrdNum_data[2],OrdNum_data[3],OrdNum_data[4],OrdNum_data[5],OrdNum_data[6],OrdNum_data[7],OrdNum_data[8],OrdNum_data[9],OrdNum_data[10],OrdNum_data[11],OrdNum_data[12],OrdNum_data[13],OrdNum_data[14],OrdNum_data[15],OrdNum_data[16],OrdNum_data[17],OrdNum_data[18],OrdNum_data[19],OrdNum_data[20],OrdNum_data[21],OrdNum_data[22],OrdNum_data[23],OrdNum_data[24],OrdNum_data[25],OrdNum_data[26],OrdNum_data[27],OrdNum_data[28],OrdNum_data[29],OrdNum_data[30],OrdNum_data[31],OrdNum_data[32],OrdNum_data[33],OrdNum_data[34],OrdNum_data[35],OrdNum_data[36],OrdNum_data[37],OrdNum_data[38],OrdNum_data[39],OrdNum_data[40],OrdNum_data[41],OrdNum_data[42],OrdNum_data[43],OrdNum_data[44],OrdNum_data[45],OrdNum_data[46],OrdNum_data[47]]
                                        },
                                    ]
                                };

                                    myChart1.setOption(option1);
                                }
                            </script>
                        
                            <!-- 为 ECharts 准备一个具备大小（宽高）的Dom -->
                            <div id="main8" style="width:92%;height:400px;"></div>
                            <script type="text/javascript">
                            function doechars_OrdProNum(){
                                doechar();
                                var myChart = echarts.init(document.getElementById('main8'));
                               var option = {
                                    tooltip: {
                                        trigger: 'axis'
                                    },
                                    toolbox: {
                                        feature: {
                                            dataView: {show: true, readOnly: false},
                                            magicType: {show: true, type: ['line', 'bar']},
                                            restore: {show: true},
                                            saveAsImage: {show: true}
                                        }
                                    },
                                    legend: {
                                        data:['昨日成交商品件数','今日成交商品件数']
                                    },
                                    xAxis: [
                                        {
                                            type: 'category',
                                            data: ['0:00','0:30','1:00','1:30','2:00','2:30','3:00','3:30','4:00','4:30','5:00','5:30','6:00','6:30','7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30','24:00']
                                        }
                                    ],
                                    yAxis: [
                                        {
                                            type: 'value',
                                            name: '成交商品件数',
                                            min: 0,
                                            max: OrdProNum_max,
                                            interval: 0,
                                            axisLabel: {
                                                formatter: '{value} '
                                            }
                                        },
                                        
                                    ],
                                    series: [
                                        {
                                            name:'昨日成交商品件数',
                                            type:'line',
                                            data:[OrdProNum_data_t[0],OrdProNum_data_t[1],OrdProNum_data_t[2],OrdProNum_data_t[3],OrdProNum_data_t[4],OrdProNum_data_t[5],OrdProNum_data_t[6],OrdProNum_data_t[7],OrdProNum_data_t[8],OrdProNum_data_t[9],OrdProNum_data_t[10],OrdProNum_data_t[11],OrdProNum_data_t[12],OrdProNum_data_t[13],OrdProNum_data_t[14],OrdProNum_data_t[15],OrdProNum_data_t[16],OrdProNum_data_t[17],OrdProNum_data_t[18],OrdProNum_data_t[19],OrdProNum_data_t[20],OrdProNum_data_t[21],OrdProNum_data_t[22],OrdProNum_data_t[23],OrdProNum_data_t[24],OrdProNum_data_t[25],OrdProNum_data_t[26],OrdProNum_data_t[27],OrdProNum_data_t[28],OrdProNum_data_t[29],OrdProNum_data_t[30],OrdProNum_data_t[31],OrdProNum_data_t[32],OrdProNum_data_t[33],OrdProNum_data_t[34],OrdProNum_data_t[35],OrdProNum_data_t[36],OrdProNum_data_t[37],OrdProNum_data_t[38],OrdProNum_data_t[39],OrdProNum_data_t[40],OrdProNum_data_t[41],OrdProNum_data_t[42],OrdProNum_data_t[43],OrdProNum_data_t[44],OrdProNum_data_t[45],OrdProNum_data_t[46],OrdProNum_data_t[47]]
                                        },
                                        {
                                            name:'今日成交商品件数',
                                            type:'line',
                                            data:[OrdProNum_data[0],OrdProNum_data[1],OrdProNum_data[2],OrdProNum_data[3],OrdProNum_data[4],OrdProNum_data[5],OrdProNum_data[6],OrdProNum_data[7],OrdProNum_data[8],OrdProNum_data[9],OrdProNum_data[10],OrdProNum_data[11],OrdProNum_data[12],OrdProNum_data[13],OrdProNum_data[14],OrdProNum_data[15],OrdProNum_data[16],OrdProNum_data[17],OrdProNum_data[18],OrdProNum_data[19],OrdProNum_data[20],OrdProNum_data[21],OrdProNum_data[22],OrdProNum_data[23],OrdProNum_data[24],OrdProNum_data[25],OrdProNum_data[26],OrdProNum_data[27],OrdProNum_data[28],OrdProNum_data[29],OrdProNum_data[30],OrdProNum_data[31],OrdProNum_data[32],OrdProNum_data[33],OrdProNum_data[34],OrdProNum_data[35],OrdProNum_data[36],OrdProNum_data[37],OrdProNum_data[38],OrdProNum_data[39],OrdProNum_data[40],OrdProNum_data[41],OrdProNum_data[42],OrdProNum_data[43],OrdProNum_data[44],OrdProNum_data[45],OrdProNum_data[46],OrdProNum_data[47]]
                                        },
                                    ]
                                };

                                    myChart.setOption(option);
                                }
                            </script>
                        </div>
                        <div class="portlet box green" data='cc' id="g1" style="display:none">
                                    
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>店铺整体经营概况 </div>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form action="<?=site_url('datainto/related_hot_shop_ranking')?>" method="post" id="formdata">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
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
                                                <?php foreach($data['detail']['OrdProNum']['value'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <input type="hidden" value="<?php echo $key+1;?>" name="DateTime[]" />  <!--  日期-->                                              
                                                        <input type="hidden" value="<?php echo $data['detail']['Time']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  时间段-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['PV']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  浏览量-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['UV']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  访客量-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['OrdAmt']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  下单金额-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['OrdCustNum']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  下单客户数-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['OrdProNum']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  下单商单量-->    
                                                        <input type="hidden" value="<?php echo $data['detail']['OrdNum']['value'][$key]?>" name="SearchClickIndex[]" />    <!--  下单商品件数-->    
                                                        <input type="hidden" value="<?php echo date("Y-m-d H:m:s",time())?>" name="time[]" />      <!--  时期-->                     
                                                        <input type="hidden" value="" name="ProductIndex[]" />    <!--  热卖商品-->                            
                                                        
                                                        <td><?php echo $key+1;?></td>                                                
                                                        <td> <?php echo $data['detail']['Time']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['PV']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['UV']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['OrdAmt']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['OrdCustNum']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['OrdProNum']['value'][$key]?></td>                                                
                                                        <td> <?php echo $data['detail']['OrdNum']['value'][$key]?></td>                                                
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>                                                
                                                        <td><input type="button" value="点击查看" name="chkk[]" onclick="shop_list(this)"></td>                                                                                               
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
                                        <script>
                                            function dodata(obj){
                                                obj.parentNode.parentNode.style="background:#ccddaa";
                                                var ch=document.getElementsByName('chk[]');
                                                for(var i=0;i<ch.length;i++){
                                                    if(ch[i]==obj){
                                                        var nums=i;
                                                    }
                                                }
                                                var goodsname_d=document.getElementsByName('goodsname[]')[nums];
                                                var price_d=document.getElementsByName('price[]')[nums];
                                                var sku_d=document.getElementsByName('sku[]')[nums];
                                                var assess_d=document.getElementsByName('access[]')[nums];
                                                var who_d=document.getElementsByName('who[]')[nums];
                                                var page_d=document.getElementsByName('page[]')[nums];
                                                var time_d=document.getElementsByName('time[]')[nums];
                                                Ajax().post('<?php echo site_url("datainto/r_getcontent_w")?>',{num:nums,goodsname:goodsname_d.value,price:price_d.value,sku:sku_d.value,assess:assess_d.value,who:who_d.value,page:page_d.value,time:time_d.value},function(data){
                                                        //alert(data);

                                                });
                                            }
                                        </script>
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
       
         <script>
            var e_shows=new Array();
            e_shows[0]=document.getElementById('eshow1');
            e_shows[1]=document.getElementById('eshow2');
            e_shows[2]=document.getElementById('eshow3');
            e_shows[3]=document.getElementById('eshow4');
            var echars_show=new Array();
            echars_show[0]=document.getElementById('c1');
            echars_show[1]=document.getElementById('c2');
            echars_show[2]=document.getElementById('c3');
            echars_show[3]=document.getElementById('c4');
            function eshow(obj){
                for(var i=0;i<e_shows.length;i++){
                    if(e_shows[i]==obj){
                        e_shows[i].className="active";
                        echars_show[i].style.display='block';
                    }else{
                        e_shows[i].className="";
                        echars_show[i].style.display='none';
                    }
                }
                doechars_uv1();
                                        doechars_uv2();
                                        doechars_DealNum();
                                        doechars_DealProNum();
                                        doechars_OrdAmt();
                                        doechars_DealAmt();
                                        doechars_OrdNum();
                                        doechars_OrdProNum();
            }
        </script>
        <!-- END FOOTER -->
        <script src="<?php echo base_url();?>/public/yjs/rate/js/myjs.js"></script>
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
        <script src="<?=base_url();?>tpl/assets/global/scripts/app.min1.js" type="text/javascript"></script>
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
        <!-- 显示摘要的 -->
        <script src="<?php base_url()?>/tpl/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php base_url()?>/tpl/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- 显示摘要的 -->
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

