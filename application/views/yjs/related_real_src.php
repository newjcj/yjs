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
        <title>实时榜单</title>
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
        <link href="<?php echo base_url();?>/public/yjs/css/related_real_src.css" rel="stylesheet" type="text/css" />
        <style>
        </style>
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
                                <li class="nav-item ">
                                    <a href="<?php echo site_url('yjs/rate3');?>" class="nav-link ">
                                        <span class="title">实时访客</span>
                                    </a>
                                </li>
                                <li class="nav-item staret active open ">
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
                        <form class="form-inline" action="<?=site_url('yjs/related_real_src');?>" method="get" id="dateform">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3"></label>
                          </div>
                          <span>按行业类目:&nbsp;&nbsp;</span><input type="checkbox" checked id="ch_trade"/>&nbsp;&nbsp;&nbsp;
                          <div class="sel_div"><input type="text" value='<?php echo $trade?>' name="trade_class" id="trade"/></div>
                          <ul class="sel_ul" style="display:none">
                              <?php foreach($data[0] as $k=>$v){?>
                                <?php if(strlen(strstr($v['fullNameShow'],'-->'))=='0'){?>
                                    <?php if($v['value']=='999999'){?>
                                        <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=999999&cate2=999999&method=<?php echo $method?>&method1=1""><li onmoseover="this.style.background:#ccc;" onmouserout="this.style.background:#fff"><?php echo $v['fullNameShow']?></li></a>
                                    <?php }else{?>
                                        <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=<?php echo $v['value']?>&cate2=999999&method=<?php echo $method?>&method1=1" ><li id="p<?php echo $v['value']?>"><?php echo $v['fullNameShow']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;><span style="float:right;margin-right:20px;"></span>
                                        </li></a>
                                    <?php }?>
                                <?php }?>
                              <?php }?>
                          </ul>
                          <ul style="display:none" class="sel_ul_child">
                          <?php foreach($data[0] as $k=>$v){?>
                            <?php if(strlen(strstr($v['fullNameShow'],'-->'))=='0' && $v['value']!='999999'){?>
                                </ul>
                                <ul style="display:none" class="sel_ul_child" id="<?php echo $v['value']?>">
                            <?php }?>
                            <?php if(strlen(strstr($v['fullNameShow'],'-->'))!='0' && $v['value']!='999999'){?>
                                <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=<?php echo $v['parentValue']?>&cate2=<?php echo $v['value']?>&method=<?php echo $method?>&method1=1"><li><?php echo $v['fullNameShow']?></li></a>
                            <?php }?>
                          <?php }?>
                          </ul>
                          <script>
                              $(function(){
                                $('#trade').mouseover(function(){
                                    //$('.sel_ul').toggle();
                                });
                                $('.sel_ul').offset({left:$('.sel_div')[0].offsetLeft}).css({width:$('.sel_div')[0].offsetWidth});//设置相同宽度
                                $('.sel_div input').focus(function(){
                                    $('.sel_ul').show();
                                    //$('.sel_ul').css({visibility:"visible"});
                                }).blur(function(){
                                    $('.sel_ul').hide(800);
                                    //$('.sel_ul').css({visibility:"hidden"});
                                });
                                $('.sel_ul li').each(function(i){//分配遍历有子目录的目录
                                    $(this).mouseover(function(){
                                        var showid=$(this).attr('id').split('p')[1];
                                        var width=$(this)[0].offsetWidth;
                                        var height=$(this)[0].offsetHeight;
                                        $('#'+showid).offset({top:0,left:0});
                                        $('#'+showid).show(200);
                                        $('#'+showid).offset({top:$(this).offset().top,left:$(this).offset().left+width-3});
                                        $(this).css({background:"#ccc"});
                                    });
                                    $(this).mouseout(function(){
                                        var showid=$(this).attr('id').split('p')[1];
                                        var width=$(this)[0].offsetWidth;
                                        var height=$(this)[0].offsetHeight;
                                        $('#'+showid).css({display:'none'});
                                        $(this).css({background:"#fff"});
                                    });
                                    
                                });
                                $('.sel_ul_child').css({margin:0,padding:0})
                                $('.sel_ul_child').mouseover(function(){
                                    $(this).css({display:'block'});
                                });
                                $('.sel_ul_child li').mouseover(function(){
                                    $(this).css({background:'#ccc'});
                                });
                                $('.sel_ul_child').mouseout(function(){
                                     $(this).css({display:'none'});
                                });
                                $('.sel_ul_child li').mouseout(function(){
                                     $(this).css({background:'#fff'});
                                });
                              });
                          </script>
                          <!--11111111111111-->
                          <span>按店铺分类:&nbsp;&nbsp;</span><input type="checkbox" id="ch_shop"/>&nbsp;&nbsp;&nbsp;
                          <div class="sel_div1"><input type="text" value='<?php echo $shop?>' name="shop_class" id="shop"/></div>
                          <ul class="sel_ul1" style="display:none">
                              <?php foreach($data[1] as $k=>$v){?>
                                <?php if(strlen(strstr($v['fullNameShow'],'-->'))=='0'){?>
                                    <?php if($v['value']=='999999'){?>
                                        <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=999999&cate2=999999&method=<?php echo $method?>&method1=2"><li onmoseover="this.style.background:#ccc;" onmouserout="this.style.background:#fff"><?php echo $v['fullNameShow']?></li></a>
                                    <?php }else{?>
                                        <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=<?php echo $v['value']?>&cate2=999999&method=<?php echo $method?>&method1=2" ><li id="p<?php echo $v['value']?>"><?php echo $v['fullNameShow']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;><span style="float:right;margin-right:20px;"></span>
                                        </li></a>
                                    <?php }?>
                                <?php }?>
                              <?php }?>
                          </ul>
                          <ul style="display:none" class="sel_ul1_child">
                          <?php foreach($data[1] as $k=>$v){?>
                            <?php if(strlen(strstr($v['fullNameShow'],'-->'))=='0' && $v['value']!='999999'){?>
                                </ul>
                                <ul style="display:none" class="sel_ul1_child" id="<?php echo $v['value']?>">
                            <?php }?>
                            <?php if(strlen(strstr($v['fullNameShow'],'-->'))!='0' && $v['value']!='999999'){?>
                                <a href="<?php echo site_url('yjs/related_real_src')?>?cate1=<?php echo $v['parentValue']?>&cate2=<?php echo $v['value']?>&method=<?php echo $method?>&method1=2"><li><?php echo $v['fullNameShow']?></li></a>
                            <?php }?>
                          <?php }?>
                          </ul>
                          <script>
                              $(function(){
                                $('#shop').mouseover(function(){
                                    //$('.sel_ul').toggle();
                                });
                                $('.sel_ul1').offset({left:$('.sel_div1')[0].offsetLeft}).css({width:$('.sel_div1')[0].offsetWidth});//设置相同宽度
                                $('.sel_div1 input').focus(function(){
                                    $('.sel_ul1').show();
                                    //$('.sel_ul').css({visibility:"visible"});
                                }).blur(function(){
                                    $('.sel_ul1').hide(800);
                                    //$('.sel_ul').css({visibility:"hidden"});
                                });
                                $('.sel_ul1 li').each(function(i){//分配遍历有子目录的目录
                                    $(this).mouseover(function(){
                                        var showid=$(this).attr('id').split('p')[1];
                                        var width=$(this)[0].offsetWidth;
                                        var height=$(this)[0].offsetHeight;
                                        $('#'+showid).offset({top:0,left:0});
                                        $('#'+showid).show(200);
                                        $('#'+showid).offset({top:$(this).offset().top,left:$(this).offset().left+width-3});
                                        $(this).css({background:"#ccc"});
                                    });
                                    $(this).mouseout(function(){
                                        var showid=$(this).attr('id').split('p')[1];
                                        var width=$(this)[0].offsetWidth;
                                        var height=$(this)[0].offsetHeight;
                                        $('#'+showid).css({display:'none'});
                                        $(this).css({background:"#fff"});
                                    });
                                    
                                });
                                $('.sel_ul1_child').css({margin:0,padding:0})
                                $('.sel_ul1_child').mouseover(function(){
                                    $(this).css({display:'block'});
                                });
                                $('.sel_ul1_child li').mouseover(function(){
                                    $(this).css({background:'#ccc'});
                                });
                                $('.sel_ul1_child').mouseout(function(){
                                     $(this).css({display:'none'});
                                });
                                $('.sel_ul1_child li').mouseout(function(){
                                     $(this).css({background:'#fff'});
                                });
                              });
                              //设置搜索的类目 分类
                              if("<?php echo $method1?>"=='1'){
                                    $('#ch_trade').attr({checked:true});
                                    $('#ch_shop').attr({checked:false});
                              }else{
                                    $('#ch_trade').attr({checked:false});
                                    $('#ch_shop').attr({checked:true});
                              }
                              $(function(){
                                $('#ch_trade').change(function(){
                                    if(window.ch_trade.checked){
                                        window.ch_shop.removeAttribute('checked');
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=999999&cate2=999999"+'&method=1&method1=1';
                                    }else{
                                        window.ch_shop.setAttribute('checked',true);
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=999999&cate2=999999"+'&method=1&method1=2';
                                    }
                                });
                                $('#ch_shop').change(function(){
                                    if(window.ch_shop.checked){
                                        window.ch_trade.removeAttribute('checked');
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=999999&cate2=999999"+'&method=1&method1=2';
                                    }else{
                                        window.ch_trade.setAttribute('checked',true);
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=999999&cate2=999999"+'&method=1&method1=1';
                                    }
                                });
                              });
                          </script>
                          <??>
                          <div class="btn-group" role="group" aria-label="..." style="float:right;margin-right:100px;">
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
                        <script>
                            /*var recate="<?php echo $cate?>";
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
                            }*/
                            //method search
                            function summ1(num){
                                switch(num){
                                    case 1:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=1&method1=<?php echo $method1?>';
                                        break;
                                    case 2:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=2&method1=<?php echo $method1?>';
                                        break;
                                    case 3:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=3&method1=<?php echo $method1?>';
                                        break;
                                    case 4:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=4&method1=<?php echo $method1?>';
                                        break;
                                    case 5:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=5&method1=<?php echo $method1?>';
                                        break;
                                    case 6:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=6&method1=<?php echo $method1?>';
                                        break;
                                    case 7:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=7&method1=<?php echo $method1?>';
                                        break;
                                    default:
                                        window.location.href='<?php site_url("yjs/related_real_src")?>?'+"cate1=<?php echo $this->input->get('cate1')?>&cate2=<?php echo $this->input->get('cate2')?>"+'&method=1&method1=<?php echo $method1?>';
                                }
                            }
                        </script>
                    </div>
                        <script type="text/javascript">  
                            eval('<php echo $data1>');
                            alert(typeof(shopCategoryId_dropBox));
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
                                                    <th> 排名</th>
                                                    <th> 商品名称  </th>
                                                    <th> 最近上架时间  </th>
                                                    <th> 下单金额</th>
                                                    <th> 下单商品件数</th>
                                                    <th> 下单客户数 </th>
                                                    <th> 浏览量 </th>
                                                    <th> 访客数 </th>
                                                    <th> 转化率  </th>
                                                    <th> 日期 </th>
                                                    <th> 保存 </th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodylist">
                                                <?php foreach($data1['detail']['OrdProNum']['value'] as $key=>$value){?>
                                                    <tr id="tr_db">
                                                        <td><?php echo $key+1;?></td> <!--排名-->
                                                        <td><a href="http://item.jd.com/<?php echo $data1['sku'][$key]?>.html" target="_blank"><?php echo $data1['detail']['ProName']['value'][$key]?></a></td><!--商品名称-->                                                
                                                        <td> <?php $date_1=$data1['detail']['OnlDate']['value'][$key];echo date("Y-m-d H:i:s",rtrim($date_1,'000'));?></td><!--最近上架时间-->                                                
                                                        <td> <?php echo urldecode($data1['detail']['OrdAmt']['value'][$key])?></td><!--下单金额-->                                                
                                                        <td> <?php echo $data1['detail']['OrdCustNum']['value'][$key]?></td><!--下单商品件数-->                                                
                                                        <td> <?php echo $data1['detail']['OrdProNum']['value'][$key]?></td><!--下单客户数-->                                                
                                                        <td> <?php echo $data1['detail']['PV']['value'][$key]?></td><!--浏览量-->                                                
                                                        <td> <?php echo $data1['detail']['UV']['value'][$key]?></td><!--访客数-->                                                
                                                        <td> <?php echo $data1['detail']['CustRate']['value'][$key]?></td><!--转化率-->                                                
                                                        <td> <?php echo date("Y-m-d H:m:s",time())?></td> <!--日期-->                                               
                                                        <td><input type="button" value="保存" name="r_getcontent_real_list[]" onclick="r_getcontent_real_list(this)"></td>  <!-- 保存 -->
                                                    </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                        <!--用js提交入库-->
                                        <?php $method1=$this->input->get('method1'); if($method!=''){$method1=$method1;}else{$method1='1';}?>
                                        <?php $source="terminal:{$method},cate_trade:'.$trade.',cate_shop:'.$shop.',";?>
                                        <?php echo A_D(array('ranking','goods','newly_time','order_price','order_goods_num','order_p','look_num','v_p_num','goods_change_rate','time'),'datainto/r_getcontent_real_list','r_getcontent_real_list','r_getcontent_real_list[]',$source)?>
                                        <!--时间-->
                                        <?php echo T('showTime')?>
                                    </div>
                        </div>
                        
        <!-- END FOOTER -->
        <script src="<?php echo base_url();?>/public/yjs/js/related_real_src.js"></script>
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
