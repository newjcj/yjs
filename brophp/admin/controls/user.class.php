<?php
class User{
        function index(){
            $data=D("us1")->select();
            $this->assign("user",$data);
            $this->display();
        }
        function one(){

            $this->assign("one","this is one!");
            $this->display();
        }
       
        function ones(){
            D("us3")->one();    
            session_start();
            
        }
        function session(){
                session_start();
            echo session_id();
            echo "<br>".$_COOKIE['PHPSESSID'];
        }
        function add(){
            $this->display();
        }
        function insert(){
            p($_POST);
            if(D("us1")->insert()){
                $this->success("插入数据库成功！",3,"index");
            }else{
                $this->error("插入数据库失败！",3,"add");
            }
        }
        function mod(){
            $this->assign(D("us1")->find($_GET["id"]));
            $this->display();
        }

        function update(){
            p($_POST);
           // $data=D("us1");
            if(D("us1")->update($_POST)){
                $this->success("更新成功",1,"index");
            }else{
                $this->error("更新失败",2,"user/mod/id/{$_POST['id']}");
            }
         }
        function del(){
            p($_POST);
            if(D('us1')->delete($_GET['id'])){
                $this->redirect("index",2);
            }elseif(D('us1')->delete($_POST["id"])){
                $this->success("删除成功了",3,'index');
            }else{
                $this->error("删除失败",4,"index");
            
            }
            
            $this->display();
            
        }
        






}
