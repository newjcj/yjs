<?php
    class Mess{
        function index(){
            
            $this->display();
        }
        function save(){
            $msg=$_POST['username']."在<font color='blue'>".date("Y-m-d H:i:s",time())."</font>说：".$_POST['content']."<br>";
            $ftext="./public/mess.txt";
            $text=fopen($ftext,a);
            fwrite($text,$msg);
            fclose($text);
        }

        function view(){
            debug();
            echo file_get_contents('./public/mess.txt');
           // echo "随机数：".$_GET['rand'];
            //$this->display();
        }
        //清空留言
        function del(){
            debug();
            if(!empty($_POST['sub'])){
                if(unlink("./public/mess.txt")){
                    $this->success('清理成功！',1,"index");
                }else{
                    $this->error('已清理',1,"index");
                }

            }
            $this->display();
        }
    }
        
