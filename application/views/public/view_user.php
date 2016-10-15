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
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <!-- <img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" /> -->
                                <span class="username username-hide-on-mobile"> <?php  echo $_SESSION['user']; echo '<font color="red">&nbsp;&nbsp;id:'.$_SESSION['uid'].'</font>';?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo site_url('user/index');?>">
                                        <i class="fa fa-user"></i> 账户管理</a>
                                </li>
                                <?php if(in_array('user',split('/',current_url()))){?>
                                <li>
                                    <a  id="into_data">
                                        <i class="fa fa-industry"></i> 进入数据查询</a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="<?php echo site_url('login/logout');?>">
                                        <i class="icon-key"></i> 退出</a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="<?php echo site_url('login/logout');?>" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <script>
            var thor="<?php echo $_SESSION['thor']?>";
            $(function(){
                $('#into_data').click(function(){
                    if(thor.length>0){
                        window.location.href="<?php echo site_url('yjs/rate')?>";
                    }else{
                        Ajax().post("<?php echo site_url('loginjd/index')?>",{},function(data){
                                //jLoginjd(data,{autoHide:true, TimeShown:20000, clickOverlay:false, LongTrip:100});
                                jLoginjd(data,{autoHide:false, clickOverlay:true, LongTrip:100});
                        });
                    }
                });
            });
        </script>
