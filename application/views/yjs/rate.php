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
        <?php $this->load->view('public/weebox1')?><!--加载weebox的js 和 css-->
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
                        
                        
                        <li class="nav-item staret active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">易金商流量分析</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item staret active open ">
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
                            <div class="col-md-3" style="float:left;width:190px;">
                                <div class="input-group input-medium date date-picker" style="float:left;" id="databutton" data-date="<?=date('Y-m-d',time()-3600*24);?>" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                    <input type="text" class="form-control" readonly name="sdate" value="">
                                    <span class=""> </span>
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button" >
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                    <script>
                                        var date=<?php echo $date1?>;
                                        $(function(){
                                             $("#dateform input[name=sdate]")[0].value=date.date1;
                                        });
                                        var date_plug=document.getElementById('databutton');
                                        date_plug.setAttribute('data-date',date.date1);
                                    </script>
                                </div>
                            </div>
                            <div style="float:left;margin-left:70px;">
                                <button type="button" class="btn btn-default" onclick="window.dateform.submit()">查询</button>
                            </div>
                        </form>
                    </div>
                        <button type="button" class="btn btn-default navbar-btn" onclick="gtitle1()">店铺整体经营概况</button>
                        <button type="button" class="btn btn-default navbar-btn" onclick="gtitle2()">pc端经营概况</button>
                        <button type="button" class="btn btn-default navbar-btn" onclick="gtitle3()">移动端经营概况</button>
                        
                        <!--显示摘要-->
                        <div class="row" id="row_id_1">
                            <div id="summary" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][0]?>"></span>
                                        </div>
                                        <div class="desc"> 浏览量 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][1]?>">0</span>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][2]?>">0</span>
                                        </div>
                                        <div class="desc">商品关注量</div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][3]?>">0</span>
                                        </div>
                                        <div class="desc"> 店铺关注量 </div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][4];echo ceil($pron)?>">0</span>
                                        </div>
                                        <div class="desc"> 下单金额</div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][5]?>">0</span>
                                        </div>
                                        <div class="desc">下单客户数 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][6]?>">0</span>
                                        </div>
                                        <div class="desc"> 下单单量 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][7]?>">0</span>
                                        </div>
                                        <div class="desc">下单商品件数</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][8];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">店铺成交转化率</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][9];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">先款付款率</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][10];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">30日客户回头率 </div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][11];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">30日重复购买率 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][12]?>">0</span>
                                        </div>
                                        <div class="desc"> 上架商品数量(SPU) </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][13]?>">0</span>
                                        </div>
                                        <div class="desc"> 上架商品数量(SKU) </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--显示摘要-->
                        <div class="portlet box green" data='cc' id="g1">
                                    
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
                                                        <td><?php echo $key+1;?></td> <!--序号-->                                               
                                                        <td> <?php echo $data['detail']['Time']['value'][$key]?></td><!--时间段-->                                                  
                                                        <td> <?php echo $data['detail']['PV']['value'][$key]?></td><!--浏览量-->                                                  
                                                        <td> <?php echo $data['detail']['UV']['value'][$key]?></td><!--访客数-->                                                  
                                                        <td> <?php echo $data['detail']['OrdAmt']['value'][$key]?></td><!--下单金额-->                                                  
                                                        <td> <?php echo $data['detail']['OrdCustNum']['value'][$key]?></td><!--下单客户数-->                                                  
                                                        <td> <?php echo $data['detail']['OrdProNum']['value'][$key]?></td><!--下单单量-->                                                  
                                                        <td> <?php echo $data['detail']['OrdNum']['value'][$key]?></td><!--下单商品件数-->                                                  
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>   <!--日期-->                                               
                                                        <td><input type="button" value="保存" name="chk1[]" onclick="into_data1(this)"></td><!--序号-->                                                                                                 
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
                                        <?php echo A_D(array('num','time_section','look_num','v_num','order_price','order_num','order_total','order_goods','time'),'datainto/r_getcontent_shop_general','into_data1','chk1[]');?>
                                    </div>
                        </div>
                        <?php $data=$data1?>
                        <!--显示摘要-->
                        <div class="row" id="row_id_2">
                            <div id="summary" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][0]?>"></span>
                                        </div>
                                        <div class="desc"> 浏览量 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][1]?>">0</span>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][2]?>">0</span>
                                        </div>
                                        <div class="desc">商品关注量</div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][3]?>">0</span>
                                        </div>
                                        <div class="desc"> 店铺关注量 </div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][4];echo ceil($pron)?>">0</span>
                                        </div>
                                        <div class="desc"> 下单金额</div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][5]?>">0</span>
                                        </div>
                                        <div class="desc">下单客户数 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][6]?>">0</span>
                                        </div>
                                        <div class="desc"> 下单单量 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][7]?>">0</span>
                                        </div>
                                        <div class="desc">下单商品件数</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][8];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">店铺成交转化率</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][9];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">先款付款率</div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][10];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">30日客户回头率 </div>
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
                                            <span data-counter="counterup" data-value="<?php $pron=$data['summary1'][11];echo $pron=ceil($pron*10000)/100?>">0</span>%
                                        </div>
                                        <div class="desc">30日重复购买率 </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][12]?>">0</span>
                                        </div>
                                        <div class="desc"> 上架商品数量(SPU) </div>
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
                                            <span data-counter="counterup" data-value="<?php echo $data['summary1'][13]?>">0</span>
                                        </div>
                                        <div class="desc"> 上架商品数量(SKU) </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--显示摘要-->
                        <div class="portlet box green" data='cc' id="g2">
                                    
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>pc端经营概况 </div>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form action="<?=site_url('datainto/related_hot_shop_ranking')?>" method="post" id="formdata">
                                        <table class="table table-striped table-bordered table-hover" id="sample_2">
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
                                                        <td><?php echo $key+1;?></td> <!--序号-->                                               
                                                        <td> <?php echo $data['detail']['Time']['value'][$key]?></td><!--时间段-->                                                 
                                                        <td> <?php echo $data['detail']['PV']['value'][$key]?></td><!--浏览量-->                                                 
                                                        <td> <?php echo $data['detail']['UV']['value'][$key]?></td><!--访客数-->                                                 
                                                        <td> <?php echo $data['detail']['OrdAmt']['value'][$key]?></td><!--下单金额-->                                                 
                                                        <td> <?php echo $data['detail']['OrdCustNum']['value'][$key]?></td><!--下单客户数-->                                                 
                                                        <td> <?php echo $data['detail']['OrdProNum']['value'][$key]?></td><!--下单单量-->                                                 
                                                        <td> <?php echo $data['detail']['OrdNum']['value'][$key]?></td><!--下单商品件数-->                                                 
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>     <!--日期-->                                            
                                                        <td><input type="button" value="保存" name="chk2[]" onclick="into_data2(this)"></td><!--保存-->                                                                                                
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
                                        <?php echo A_D(array('num','time_section','look_num','v_num','order_price','order_num','order_total','order_goods_total','time'),'datainto/r_pcmanage','into_data2','chk2[]');?>
                                    </div>
                        </div>
                        <div class="portlet box green" data='cc' id="g3">
                                    
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>移动端经营概况 </div>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <form action="<?=site_url('datainto/related_hot_shop_ranking')?>" method="post" id="formdata">
                                        <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                    <th> 序号</th>
                                                    <th> 移动端来源构成</th>
                                                    <th> 浏览量</th>
                                                    <th> 访客数</th>
                                                    <th> 下单金额 </th>
                                                    <th> 下单客户数 </th>
                                                    <th> 下单单量 </th>
                                                    <th> 下单商品件数 </th>
                                                    <th> 客单价 </th>
                                                    <th> 店铺成交转化率 </th>
                                                    <th> 日期 </th>
                                                    <th> 保存 </th>
                                                </tr>
                                                
                                            </thead>
                                            <tbody>
                                                <?php $data=$data2?>
                                                <?php foreach($data['name'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <td><?php echo $key+1;?></td> <!--序号-->                                       
                                                        <td> <?php echo $data['name'][$key]?></td> <!--移动端来源构成-->                                                
                                                        <td> <?php echo $data['summary']['PV']['value'][$key]?></td><!--浏览量-->                                                 
                                                        <td> <?php echo $data['summary']['UV']['value'][$key]?></td><!--访客数-->                                                 
                                                        <td> <?php echo $data['summary']['OrdAmt']['value'][$key]?></td><!--下单金额-->                                                 
                                                        <td> <?php echo $data['summary']['OrdCustNum']['value'][$key]?></td><!--下单客户数-->                                                 
                                                        <td> <?php echo $data['summary']['OrdProNum']['value'][$key]?></td><!--下单单量-->                                                 
                                                        <td> <?php echo $data['summary']['OrdNum']['value'][$key]?></td><!--下单商品件数-->                                                 
                                                        <td> <?php $pron=$data['summary']['OrdAmt']['value'][$key];echo $pron=ceil($pron*10000)/100?>%</td><!--客单价-->                                                 
                                                        <td> <?php $pron=$data['summary']['CustRate']['value'][$key];echo $pron=ceil($pron*10000)/100?>%</td>    <!--店铺成交转化率-->                                             
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td>    <!--日期-->                                             
                                                        <td><input type="button" value="保存" name="r_getcontent_shop_general_m_1[]" onclick="r_getcontent_shop_general_m_1(this)"></td>                                                                                               
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        </form>
                                        <?php echo A_D(array('num','app_src','look_num','v_num','order_price','order_client','order_num','order_g_num','unit_price','shop_strikp_pro','time'),'datainto/r_getcontent_shop_general_m_1','r_getcontent_shop_general_m_1','r_getcontent_shop_general_m_1[]');?>
                                    </div>
                        </div>
                        
                        <div id="show_g4"></div>
                        <script>
                            var show4=document.getElementById('show_g4');
                            var method=0;
                            function show_g(num){
                                if(num){
                                    method=num;
                                }
                                Ajax().post('<?php echo site_url("yjs/show_rate")?>',{sdate:date.date1,method:method},function(data){
                                    window.show4.innerHTML=data;
                                });
                            }
                            show_g('0');
                        </script>
                        <?php echo A_D(array('num','time_part','look_num','v_num','order_price','order_client','order_num','order_g_num','time'),'datainto/r_getcontent_shop_general_m_2','r_getcontent_shop_general_m_2','r_getcontent_shop_general_m_2[]');?>
                        <!-- 设置弹出框-->
                        <script>
                            var shows=window.show;
                            var g1s=window.g1;
                            var g2s=window.g2;
                            var g3s=window.g3;
                            var left="";
                            var top="";
                            function getLeft(obj){
                                var left=0;
                                //left=obj.offsetLeft;
                                while(obj.parentNode!=null){
                                    left+=obj.offsetLeft;
                                    obj=obj.parentNode;
                                }
                                return left;
                            }
                            function getTop(obj){
                                var left=0;
                                //left=obj.offsetTope;
                                while(obj.parentNode!=null){
                                    left+=obj.offsetTop;
                                    obj=obj.parentNode;
                                }
                                return left;
                            }
                            side_left=getLeft(g1s)+50;
                            side_top=getTop(g1s);

                            $(function(){
                                   $('#show').css({left:side_left,top:side_top});
                                });
                            function shop_list(obj){
                                obj.parentNode.parentNode.style="background:#ccddaa";
                                var ch=document.getElementsByName('chkk[]');
                                for(var i=0;i<ch.length;i++){
                                    if(ch[i]==obj){
                                        var nums=i;
                                        break;
                                    }
                                }
                                var shopid='';
                                var date_p='';
                                var method_p='';
                                if("<?php echo $this->input->get(date)?>"){date_p="<?php echo $this->input->get(date)?>";}
                                if("<?php echo $this->input->get(method)?>"){method_p="<?php echo $this->input->get(method)?>";}
                                var shopid=document.getElementsByName('shopid[]')[nums].value;
                                $(function(){
                                    Ajax().post("<?php echo site_url('yjs/related_hot_shop_ranking')?>",{shopid:shopid,date:date_p,method:method_p},function(data){
                                            var jobj=eval('('+data+')');//得到传过来 的json格式的数据
                                            var stab=document.createElement('table');
                                            stab.style="width:90%;height:90%;color:black;margin-left:5%;margin-top:2%;align:center;align:center;";
                                            //stab.style.paddingTop="100px";
                                            var trh=document.createElement('tr');
                                            trh.innerHTML="<th>序号</th><th>商品名称</th><th>SKU</th>";
                                            stab.appendChild(trh);
                                            for(var i in v=jobj.ProSKU.value){
                                                var str=document.createElement('tr');
                                                str.innerHTML="<td>"+v[i]+"</td><td>"+jobj.ProName.value[i]+"</td><td>"+jobj.ProNum.value[i]+"</td>";
                                                stab.appendChild(str);

                                            }
                                            window.show.appendChild(stab);
                                    });
                                    
                                });
                                $('#show').css({display:'block'});
                            }
                            function del_ff(elem){

                                var elem_child = elem.childNodes;

                                for(var i=0; i<elem_child.length;i++){

                                        if(elem_child[i].nodeName == "#text" && !/\s/.test(elem_child.nodeValue)){
                                                elem.removeChild(elem_child)
                                            }
                                        }
                                    }
                            del_ff(window.show);
                            function del(obj){
                                obj.parentNode.style.display='none';
                                for(var i=0 ;i<window.show.childNodes.length; i++){
                                    if(window.show.childNodes[i].nodeName=="TABLE"){
                                       window.show.removeChild(window.show.childNodes[i]);
                                    }
                                    //window.show.removeChild(window.show.childNodes[3]);
                                    //window.show.removeChild(window.show.childNodes[2]);
                                }
                            }
                        </script>

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
            function gtitle1(){
                window.g1.style.display="block";
                window.g2.style.display="none";
                window.g3.style.display="none";
                window.show_g4.style.display="none";
                window.row_id_1.style="display:block";
                window.row_id_2.style="display:none";
            }
            function gtitle2(){
                window.g1.style.display="none";
                window.g2.style.display="block";
                window.g3.style.display="none";
                window.show_g4.style.display="none";
                window.row_id_1.style="display:none";
                window.row_id_2.style="display:block";
            }
            function gtitle3(){
                window.g1.style.display="none";
                window.g2.style.display="none";
                window.g3.style.display="block";
                window.show_g4.style.display="block";
                window.row_id_1.style="display:none";
                window.row_id_2.style="display:none";
            }
            window.onload=function (){
                window.g2.style.display="none";
                window.g3.style.display="none";
                window.show_g4.style.display="none";
                window.row_id_2.style="display:none";
                setTimeout(function(){
                    //window.pinfo.style.display="none";
                },5000);
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
