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
        <title>实时访客</title>
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
        
        <?php $this->load->view('public/weebox1')?>
        <script src="<?php echo base_url();?>/public/js/ajax3.0.js"></script>
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
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('yjs/rate');?>" class="nav-link " onclick="jWait('',{TimeShown:20000,});">
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
                          <select class="form-control" name="method" id="method" onchange="isShowUrl(this)">
                              <option value="all">全部</option>
                              <option value="2">url</option>
                          </select>
                          <input class='form-control' type='text' value='' placeholder='请输入要查的url' name='url' style="display:none;" id='urlid'>
                          <button type="submit" class="btn btn-default" onclick="jWait('',{TimeShown:20000,});" >查询</button>
                          <div class="btn-group" role="group" aria-label="..." style="float:right;">
                              <button type="button" class="btn btn-default" onclick="summ1(1);jWait('',{TimeShown:20000,});">PC</button>
                              <button type="button" class="btn btn-default" onclick="summ1(2);jWait('',{TimeShown:20000,});">M端</button>
                              <button type="button" class="btn btn-default" onclick="summ1(3);jWait('',{TimeShown:20000,});">微信</button>
                              <button type="button" class="btn btn-default" onclick="summ1(4);jWait('',{TimeShown:20000,});">手Q</button>
                          </div>
                        </form>
                        <script>
                            var recate="<?php echo $cate?>";
                            var reurl="<?php echo $url?>";
                            function isShowUrl(obj){
                                if(obj.selectedOptions[0].value=='2'){
                                    window.urlid.style.display='inline-block';
                                    window.urlid.value='';
                                }else{
                                    window.urlid.style.display='none';
                                }
                            }
                            if(recate!=''){
                                for(var i in window.cate1.options){
                                    if(window.cate1[i].value==recate){
                                        window.cate1.options[i].selected=true;
                                    }
                                }
                            }
                            if(reurl!=''){
                                window.urlid.value=reurl;
                                window.urlid.style.display="inline-block";
                                for(var i in window.method.options ){
                                    if(window.method.options[i].value='2'){
                                        window.method.options[i].selected=true;
                                    }
                                }
                            }
                            if('<?php echo $url?>'==''){
                                window.urlid.style.display='none';
                            }
                            //method search
                            function summ1(num){
                                switch(num){
                                    case 1:
                                        window.location.href='<?php site_url("yjs/rate3")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&"+'method=<?php echo $this->input->get('method')?>&'+'url=<?php echo $this->input->get('url')?>&'+'method1=1';
                                        break;
                                    case 2:
                                        window.location.href='<?php site_url("yjs/rate3")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&"+'method=<?php echo $this->input->get('method')?>&'+'url=<?php echo $this->input->get('url')?>&'+'method1=2';
                                        break;
                                    case 3:
                                        window.location.href='<?php site_url("yjs/rate3")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&"+'method=<?php echo $this->input->get('method')?>&'+'url=<?php echo $this->input->get('url')?>&'+'method1=3';
                                        break;
                                    case 4:
                                        window.location.href='<?php site_url("yjs/rate3")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&"+'method=<?php echo $this->input->get('method')?>&'+'url=<?php echo $this->input->get('url')?>&'+'method1=4';
                                        break;
                                    default:
                                        window.location.href='<?php site_url("yjs/rate3")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&"+'method=<?php echo $this->input->get('method')?>&'+'url=<?php echo $this->input->get('url')?>&'+'method1=1';
                                }
                            }
                        </script>
                    </div>
                        <script type="text/javascript">  
                            $(function(){  
                                <?php echo C('user/test')?>
                                
                            })  
                                 
                        </script>  
                        <div class="portlet box green" data="cc" id="g1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>实时访客 </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span style="display:inline-block;line-height:38px;" id="showTime"></span>
                                        <div class="tools"> </div>
                                        
                                    </div>
                                    <div class="portlet-body">
                                        <div id="inputlist"></div>
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> 序号</th>
                                                    <th> 访问时间</th>
                                                    <th> 入店来源</th>
                                                    <th> 被访页面标题</th>
                                                    <th> 访客位置 </th>
                                                    <th> 访客名称 </th>
                                                    <th> 访客浏览量 </th>
                                                    <th> 日期 </th>
                                                    <th> 保存 </th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodylist">
                                                <?php foreach($data['VisitorName']['value'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <td><?php echo $key+1;?></td> <!--序号-->
                                                        <td> <?php echo $data['VisitTime']['value'][$key]?></td><!--访问时间-->                                                
                                                        <td> <?php echo urldecode($data['VisitSource']['value'][$key])?></td><!--入店来源-->                                                
                                                        <td> <?php echo $data['VisitPageTitle']['value'][$key]?></td><!--被访页面标题-->                                                
                                                        <td> <?php echo $data['VisitorArea']['value'][$key]?></td><!--访客位置-->                                                
                                                        <td> <?php echo $data['VisitorName']['value'][$key]?></td><!--访客名称-->                                                
                                                        <td> <?php echo $data['VisitorPV']['value'][$key]?></td><!--访客浏览量-->                                                
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td> <!--日期-->                                               
                                                        <td><input type="button" value="保存" name="r_getcontent_real_caller[]" onclick="r_getcontent_real_caller(this)"></td>  <!-- 保存 -->
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        <!--用js提交入库-->
                                        <?php $method1=$this->input->get('method1'); if($method!=''){$method1=$method1;}else{$method1='1';}?>
                                        <?php $source="source:1,";?>
                                        <?php echo A_D(array('num','v_time','src_big_cat','v_p_title','v_position','v_num','v_follow','time'),'datainto/r_getcontent_real_caller','r_getcontent_real_caller','r_getcontent_real_caller[]',$source)?>
                                        <!--时间-->
                                        <?php echo T('showTime')?>
                                    </div>
                        </div>
                        
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
