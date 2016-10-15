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

        <script src="<?php echo base_url();?>/public/js/ajax3.0.js"></script>
        <script src="<?php echo base_url();?>/public/js/jq.js"></script>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <!-- <div id='json' style='color:red;float:left;padding-top:200px;z-index=50111000;'></div> -->
        
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">
                        <img src="<?=base_url();?>tpl/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
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
                                <li class="nav-item staret active open ">
                                    <a href="<?php echo site_url('yjs/rate3');?>" class="nav-link ">
                                        <span class="title">实时访客</span>
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
                    <div class="portlet ">
                        <form class="form-inline" action="<?=site_url('yjs/rate3');?>" method="get" id="dateform">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3"></label>
                          </div>
                          <span>流量来源:</span>
                          <select class="form-control" name="cate1" id="cate1" onchange="showcate1(this)">
                              <option value="999999">全部</option>
                              <option value="41-41">自主访问</option>
                              <option value="41-50">&nbsp;&nbsp;&nbsp;直接访问</option>
                              <option value="41-51">&nbsp;&nbsp;&nbsp;我的京东</option>
                              <option value="41-54">&nbsp;&nbsp;&nbsp;购物车</option>
                              <option value="41-89">&nbsp;&nbsp;&nbsp;结算页</option>
                              <option value="42-42">京东免费流量</option>
                              <option value="42-60">&nbsp;&nbsp;&nbsp;京东首页</option>
                              <option value="42-61">&nbsp;&nbsp;&nbsp;京东搜索</option>
                              <option value="42-62">&nbsp;&nbsp;&nbsp;一级类目</option>
                              <option value="42-63">&nbsp;&nbsp;&nbsp;二级类目</option>
                              <option value="42-64">&nbsp;&nbsp;&nbsp;三级类目</option>
                              <option value="42-65">&nbsp;&nbsp;&nbsp;京东团购</option>
                              <option value="42-66">&nbsp;&nbsp;&nbsp;搭配购</option>
                              <option value="42-67">&nbsp;&nbsp;&nbsp;京东社区</option>
                              <option value="42-68">&nbsp;&nbsp;&nbsp;京东论坛</option>
                              <option value="42-69">&nbsp;&nbsp;&nbsp;评价/晒单</option>
                              <option value="42-70">&nbsp;&nbsp;&nbsp;在线客服</option>
                              <option value="42-71">&nbsp;&nbsp;&nbsp;夺宝岛</option>
                              <option value="42-72">&nbsp;&nbsp;&nbsp;京东官方活动</option>
                              <option value="42-74">&nbsp;&nbsp;&nbsp;商家自建活动</option>
                              <option value="42-75">&nbsp;&nbsp;&nbsp;频道页</option>
                              <option value="42-76">&nbsp;&nbsp;&nbsp;商品比较</option>
                              <option value="42-77">&nbsp;&nbsp;&nbsp;闪购</option>
                              <option value="42-78">&nbsp;&nbsp;&nbsp;会员俱乐部</option>
                              <option value="42-79">&nbsp;&nbsp;&nbsp;京东青春</option>
                              <option value="42-80">&nbsp;&nbsp;&nbsp;京东站内其它</option>
                              <option value="42-81">&nbsp;&nbsp;&nbsp;商品图片页</option>
                              <option value="42-83">&nbsp;&nbsp;&nbsp;凑单商品</option>
                              <option value="42-85">&nbsp;&nbsp;&nbsp;品牌页</option>
                              <option value="42-87">&nbsp;&nbsp;&nbsp;京东内部页面</option>
                              <option value="42-88">&nbsp;&nbsp;&nbsp;店铺页面</option>
                              <option value="42-100000">&nbsp;&nbsp;&nbsp;双12三免一活动</option>
                              <option value="42-420001">&nbsp;&nbsp;&nbsp;京东快报</option>
                              <option value="42-420002">&nbsp;&nbsp;&nbsp;商品详情</option>
                              <option value="42-420003">&nbsp;&nbsp;&nbsp;帮助中心页</option>
                              <option value="42-420004">&nbsp;&nbsp;&nbsp;京东钱包</option>
                              <option value="42-420005">&nbsp;&nbsp;&nbsp;京东内部工具</option>
                              <option value="42-420006">&nbsp;&nbsp;&nbsp;其它免费流量页</option>
                              <option value="42-4210004">&nbsp;&nbsp;&nbsp;超级大促:京喜圣诞</option>
                              <option value="43-43">京东付费流量</option>
                              <option value="43-11">&nbsp;&nbsp;&nbsp;京东联盟</option>
                              <option value="43-73">&nbsp;&nbsp;&nbsp;京东快车</option>
                              <option value="43-164">&nbsp;&nbsp;&nbsp;站内京东快车</option>
                              <option value="43-165">&nbsp;&nbsp;&nbsp;京挑客</option>
                              <option value="43-166">&nbsp;&nbsp;&nbsp;京东直投</option>
                              <option value="43-167">&nbsp;&nbsp;&nbsp;京选位展</option>
                              <option value="43-168">&nbsp;&nbsp;&nbsp;sem</option>
                              <option value="43-169">&nbsp;&nbsp;&nbsp;adx</option>
                              <option value="43-176">&nbsp;&nbsp;&nbsp;站外京东快车</option>
                              <option value="43-430001">&nbsp;&nbsp;&nbsp;京东快车</option>
                              <option value="43-430002">&nbsp;&nbsp;&nbsp;广告跳转</option>
                              <option value="44-44">京东站外</option>
                              <option value="44-147">&nbsp;&nbsp;&nbsp;搜索</option>
                              <option value="44-148">&nbsp;&nbsp;&nbsp;导行</option>
                              <option value="44-149">&nbsp;&nbsp;&nbsp;比价</option>
                              <option value="44-150">&nbsp;&nbsp;&nbsp;其它</option>
                              <option value="16618-16618">618京东综合活动</option>
                              <option value="16618-1661801">&nbsp;&nbsp;&nbsp;618综合会场</option>
                              <option value="16618-1661802">&nbsp;&nbsp;&nbsp;京东3c</option>
                              <option value="16618-1661803">&nbsp;&nbsp;&nbsp;服饰家居</option>
                              <option value="16618-1661804">&nbsp;&nbsp;&nbsp;消费品</option>
                              <option value="16618-1661805">&nbsp;&nbsp;&nbsp;京东家电</option>
                              <option value="16618-1661806">&nbsp;&nbsp;&nbsp;生鲜</option>
                          </select>
                          <span>访问页面:</span>
                          <select class="form-control" name="method" id="method" onchange="if(this.selectedOptions[0].value==2){window.urlid.style.display='inline-block';}else{window.urlid.style.display='none';}">
                              <option value="all">全部</option>
                              <option value="2">url</option>
                          </select>
                          <input class='form-control' type='text' value='' placeholder='请输入要查的url' name='url' style="display:none;" id='urlid'>
                          <button type="button" class="btn btn-default" onclick="search()">查询</button>
                          <div class="btn-group" role="group" aria-label="..." style="float:right;">
                              <button type="button" class="btn btn-default" onclick="summ1(1)">PC</button>
                              <button type="button" class="btn btn-default" onclick="summ1(2)">M端</button>
                              <button type="button" class="btn btn-default" onclick="summ1(2)">微信</button>
                              <button type="button" class="btn btn-default" onclick="summ1(2)">手Q</button>
                          </div>
                        </form>
                    </div>
                    <div id="p_table"></div>
                       
                                        <script>
                                            /*function showTbody(obj,souid1,souid2,url,method){
                                                //取数据
                                                Ajax('json',false).post("rate3_json",{souid1:souid1,souid2:souid2,url:url,method:method},function(data){
                                                    window.caller=data.detail;
                                                });
                                                var str='';
                                                var order=1;
                                                for(var i in window.caller.VisitorName.value){
                                                    str+="<tr>";
                                                    //if(typeof(window.caller.VisitorName.value[i])=="object"){
                                                        str+="<td>"+order+"</td>";//序号
                                                        str+="<td>"+window.caller.VisitTime.value[i]+"</td>";//访问时间
                                                        str+="<td>"+decodeURI(window.caller.VisitSource.value[i])+"</td>";//入店来源
                                                        str+="<td><a href=http://"+window.caller.VisitPageUrl.value[i]+" target='_blank'>"+window.caller.VisitPageTitle.value[i]+"</a></td>";//被访页面标题
                                                        str+="<td>"+window.caller.VisitorArea.value[i]+"</td>";//访客位置
                                                        str+="<td>"+window.caller.VisitorName.value[i]+"</td>";//访客名称
                                                        str+="<td>"+window.caller.VisitorPV.value[i]+"</td>";//访客浏览量
                                                        str+="<td id='td"+order+"'>"+order+"</td>";//日期
                                                        str+="<td><input type='button' value='保存' name='chk[]' onclick='dodata(this)' /></td>";//保存
                                                    //}
                                                    order++;
                                                    str+="</tr>";
                                                }
                                                window.tbodylist.innerHTML=str;
                                            }
                                            function search(){
                                                var restr=showTbody(window.tr_db,999999,999999,'all',1);
                                                metronic_table();
                                            }*/

                                            function getTable(obj,souid1,souid2,url,method){// 自外层对象    
                                                var o_div1=document.createElement('div');
                                                o_div1.className="portlet box green";
                                                o_div1.setAttribute('id','g1');
                                                var o_div1_1=document.createElement('div');
                                                o_div1_1.className="portlet-title";
                                                var o_div1_1_1=document.createElement('div');
                                                o_div1_1_1.className="caption";
                                                o_div1_1_1.innerHTML='<i class="fa fa-globe"></i>实时访客';
                                                o_div1_1.appendChild(o_div1_1_1);
                                                o_div1.appendChild(o_div1_1);

                                                var o_div1_2=document.createElement('div');
                                                o_div1_2.className="portlet-body";
                                                var o_div1_2_table=document.createElement('talbe');
                                                o_div1_2_table.className="table table-striped table-bordered table-hover";
                                                o_div1_2_table.setAttribute('id','sample_1');
                                                var o_div1_2_table_thead=document.createElement('thead');
                                                var o_div1_2_table_thead_tr=document.createElement('tr');
                                                var th_items=['序号','访问时间','入店来源','被访页面标题','访客位置','访客名称','访客浏览量','日期','保存'];
                                                for(var i in th_items){
                                                    var th_tds+="<td>"+th_items[i]+"</td>";
                                                }
                                                o_div1_2_table_thead_tr.innerHTML=th_tds;
                                                o_div1_2_table_thead.appendChild(o_div1_2_table_thead_tr);
                                                o_div1_2_table.appendChild(o_div1_2_table_thead);
                                                var o_div1_2_table_tbody=document.createElement('tbody');
                                                o_div1_2_table_tbody.setAttribute('id','tbodylist');

                                                //取数据
                                                Ajax('json',false).post("rate3_json",{souid1:souid1,souid2:souid2,url:url,method:method},function(data){
                                                    window.caller=data.detail;
                                                });
                                                var str='';
                                                var order=1;
                                                for(var i in window.caller.VisitorName.value){
                                                    str+="<tr>";
                                                    //if(typeof(window.caller.VisitorName.value[i])=="object"){
                                                        str+="<td>"+order+"</td>";//序号
                                                        str+="<td>"+window.caller.VisitTime.value[i]+"</td>";//访问时间
                                                        str+="<td>"+decodeURI(window.caller.VisitSource.value[i])+"</td>";//入店来源
                                                        str+="<td><a href=http://"+window.caller.VisitPageUrl.value[i]+" target='_blank'>"+window.caller.VisitPageTitle.value[i]+"</a></td>";//被访页面标题
                                                        str+="<td>"+window.caller.VisitorArea.value[i]+"</td>";//访客位置
                                                        str+="<td>"+window.caller.VisitorName.value[i]+"</td>";//访客名称
                                                        str+="<td>"+window.caller.VisitorPV.value[i]+"</td>";//访客浏览量
                                                        str+="<td id='td"+order+"'>"+order+"</td>";//日期
                                                        str+="<td><input type='button' value='保存' name='chk[]' onclick='dodata(this)' /></td>";//保存
                                                    //}
                                                    order++;
                                                    str+="</tr>";
                                                }
                                                o_div1_2_table_tbody.innerHTML=str;
                                                o_div1_2_table.appendChild(o_div1_2_table_tbody);
                                                o_div1_2.appendChild(o_div1_2_table);
                                                o_div1.appendChild(o_div1_2);
                                                obj.appendChild(o_div1);
                                            }
                                            getTable(window.p_table,999999,999999,'all',1);
                                            metronic_table();
                                        </script>
                                        <script>
                                            function dodata(obj){
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
                                                var items=new Array('num','visittime','source','title','position','visitname','vnum','date','save');//传值的键
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
                                                Ajax().post('<?php echo site_url("yjs/one")?>',{num:values['position'],visittime:values['visittime'],source:values['source'],title:values['title'],position:values['position'],visitname:values['visitname'],vnum:values['vnum'],date:values['date']},function(data){
                                                        alert(data);
                                                });
                                            }
                                        </script>
                                        <!--时间-->
                                        <script type="text/javascript">
                                            function startTime(objid){
                                                window.aaa=objid;
                                                var today=new Date()
                                                var years=today.getFullYear();
                                                var months=today.getMonth();
                                                var d=today.getDate()
                                                var h=today.getHours()
                                                var m=today.getMinutes()
                                                var s=today.getSeconds()
                                                // add a zero in front of numbers<10
                                                months=months+1
                                                months=checkTime(months)
                                                d=checkTime(d)
                                                m=checkTime(m)
                                                s=checkTime(s)
                                                var weekday=new Array(7)
                                                weekday[0]="星期日"
                                                weekday[1]="星期一"
                                                weekday[2]="星期二"
                                                weekday[3]="星期三"
                                                weekday[4]="星期四"
                                                weekday[5]="星期五"
                                                weekday[6]="星期六"
                                                var w=weekday[today.getDay()]
                                                //document.getElementById(objid).innerHTML=years+"年"+months+"月"+d+"日 "+w+" "+h+":"+m+":"+s;
                                                document.getElementById(objid).innerHTML=years+"-"+months+"-"+d+" "+h+":"+m+":"+s;
                                                t=setTimeout('startTime()',500)
                                            }
                                            function checkTime(i){
                                                if (i<10){
                                                    i="0" + i
                                                }
                                                return i
                                            }
                                            var i=1;
                                            while(true){
                                                var tdobj="td"+i;
                                                if(document.getElementById(tdobj)==null){
                                                    break;
                                                }
                                                startTime(tdobj);
                                                i++;
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
        <script src="<?=base_url();?>tpl/assets/pages/scripts/table-datatables-colreorder.min1.js" type="text/javascript"></script>
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


//重载js 函数
                                            function load_script(xyUrl, callback){
                                                var head = document.getElementsByTagName('head')[0];
                                                var script = document.createElement('script');
                                                script.type = 'text/javascript';
                                                script.src = xyUrl;
                                                //借鉴了jQuery的script跨域方法
                                                script.onload = script.onreadystatechange = function(){
                                                    if((!this.readyState || this.readyState === "loaded" || this.readyState === "complete")){
                                                        callback && callback();
                                                        // Handle memory leak in IE
                                                        script.onload = script.onreadystatechange = null;
                                                        if ( head && script.parentNode ) {
                                                            head.removeChild( script );
                                                        }
                                                    }
                                                };
                                                // Use insertBefore instead of appendChild  to circumvent an IE6 bug.
                                                head.insertBefore( script, head.firstChild );
                                            }