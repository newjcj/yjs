<!DOCTYPE php>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
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
<php lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>易金商登录</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url();?>tpl/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url();?>tpl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url();?>tpl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url();?>tpl/assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <!-- <a href="#">
                <img src="<?=base_url();?>tpl/assets/pages/img/logo-big.png" alt="" /> 
            </a> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo site_url('login/check');?>" method="post" name="loginfrm">
                <h3 class="form-title font-green">易金商登录</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>请输入用户名和密码</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support php5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">用户名</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名" name="user" value="xiao"/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">密码</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="密码" name="password" value="xiao"/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">验证码</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="验证码" name="captcha" style="width:170px;height: 32px;"/>
                    <img style="position:relative;top:-32px;left:180px;;" id="vimg" onclick="chimg()" src="111"/>
                </div>
                <div class="form-actions" id="ajaxinfo" style="color:red;"></div>
                <div class="form-actions">
                    <button type="button" id="sub_btn" class="btn green uppercase">登录</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />记住用户名
                        <span></span>
                    </label>
                    <a href="javascript:;" id="forget-password" class="forget-password">忘记密码?</a>
                </div>
                <script>
                    var focu=document.getElementsByName('user')[0];
                    window.onload=getfoc(focu);
                    function getfoc(focu){
                        focu.focus();
                    }
                </script>
                
                <div class="login-options">
                    <h4>其它登录方式</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                        </li>
                        <li>
                            <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
                        </li>
                    </ul>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">注册一个新账号</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.php" method="post">
                <h3 class="font-green">忘记密码?</h3>
                <p>输入您的邮箱地址用来找回密码</p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">返回</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">提交</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="<?php echo site_url('reg/index');?>" method="post">
                <h3 class="font-green">注册</h3>
                <p class="hint">请输入您的个人信息</p>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">用户名：</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="用户名(3到12个字符)" name="user" value="<?php echo set_value('user');?>" /><?php echo form_error('user','<span style="color:red">','</span>');?><br> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">密码：</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="password" placeholder="密码(6到12个字符)" name="password" /><?php echo form_error('password','<span style="color:red">','</span>');?><br> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">确认密码：</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="确认密码" name="repassword" /> <?php echo form_error('repassword','<span style="color:red">','</span>');?><br></div>
                <div class="form-group">
                    <!--ie8, ie9 does not support php5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">邮箱：</label>
                    <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" /> <?php echo form_error('email','<span style="color:red">','</span>');?><br></div>
                <div class="form-group">
                    <!--ie8, ie9 does not support php5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">手机号：</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="手机号" name="tell" /> <?php echo form_error('tell','<span style="color:red">','</span>');?><br></div>
                <div class="form-group">
                    <!--ie8, ie9 does not support php5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">qq：</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="qq号" name="qq" /> <?php echo form_error('qq','<span style="color:red">','</span>');?><br>
				</div>
                <!-- <div class="form-group margin-top-20 margin-bottom-20">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div> -->
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline" onclick="javascript:var reg='0';">返回</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">注册</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright">武汉联合启商网络科技有限公司</div>
        <!--[if lt IE 9]>
<script src="<?=base_url();?>tpl/assets/global/plugins/respond.min.js"></script>
<script src="<?=base_url();?>tpl/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
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
        <script src="<?=base_url();?>tpl/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>tpl/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url();?>tpl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url();?>tpl/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>public/js/ajax3.0.js"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <!--用ajax获取验证码图片-->
                <script>
                    var imgobj=document.getElementById('vimg');
                    function chimg(){
	                    Ajax().get('<?php echo site_url('login/verify');?>',function(data){
	                        var imgsrc=data;
	                        //alert(imgsrc);
	                        imgobj.src=imgsrc;
	                    });
                    }
                    chimg();
                    //AJax登录验证
                    var sub_btn=document.getElementById('sub_btn');
                    var userobj=document.getElementsByName('user')[0];
                    var passwordobj=document.getElementsByName('password')[0];
                    var captchaobj=document.getElementsByName('captcha')[0];
                    var ajaxinfo=document.getElementById('ajaxinfo');
                    sub_btn.onclick=function(){
                        Ajax().post('<?php echo site_url("login/check");?>',{'user':userobj.value,'password':passwordobj.value,'captcha':captchaobj.value},function(data){
                            if(data.match(/verifyError/)){
                                ajaxinfo.innerHTML="验证码错误";
                                chimg();
                                captchaobj.value='';
                            }else if(data.match(/passwordError/)){
                                ajaxinfo.innerHTML="用户名或密码错误";
                                chimg();
                                captchaobj.value='';
                            }else{
                                window.location="<?=base_url()?>member/index";
                            }
                            
                        });
                    }
                    $(function(){
                        var reg="<?php echo $reg;?>";
                        if(reg!=0){
                            $('#register-btn').click();
                        }
                    });
                </script>
    </body>

</php>
