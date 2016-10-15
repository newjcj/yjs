<?php
    class Add{
        function index(){
            debug();
            $data=D('us1');
            //创建分布对象
            $page=new Page($data->total(),7,'',false);
            $users=$data->limit($page->limit)->select();
            $this->assign('users',$users);
            $this->assign('page',$page->fpage());
            $this->display();
            
        }
        function code(){
            echo new Vcode();
        }
        function add(){
            $this->display();
            $this->assign('cod',p($_SESSION['code']));
        }
        function install(){
            $us1=D('us1');
            if($us1->insert($_POST,0,1)){
                $this->success('插入数据成功',1,'index');
            }else{
                $this->error($us1->getMsg(),2,'add');
            }
        }
        


    }
