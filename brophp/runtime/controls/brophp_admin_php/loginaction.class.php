<?php
    class LoginAction extends Action {
        function index(){
            debug();
            $this->display();
        }
        function login(){
             $user=D('user')->field('id,name,one,two,three,four')->where(array('name'=>$_POST['name'],'password'=>md5($_POST['password'])))->find();
          
            //p($user);
            if($user){
                $_SESSION=$user;
                $_SESSION['isLogin']=1;
                $this->redirect('index/index');
            }else{
                $this->error('用户名或密码错误！',1,'index');
            }
        }
        function logout(){
            $username=$_SESSION['name'];
            $_SESSION=array();
            session_destroy();
            if(isset($_COOKIE[session_name])){
                setCookie(session_name,'',time()-3600,'/');
            }
            $this->success($username."再见");
        }


    }
