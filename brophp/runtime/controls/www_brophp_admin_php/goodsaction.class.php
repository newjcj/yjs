<?php
class GoodsAction extends Common {
        function index(){
            debug();
            $this->assign('select',D('cat')->selectForm('cid'));
            $this->display();
         
        }
        //搜索商品
        function ser(){
            debug();
            $this->assign('select',D('cat')->selectForm('cid'));
            p(time());
            $this->display();
        }
        //Ajax请求
        function gmes(){
            //查询
            debug();
            $where=array();
            $arr=!empty($_POST) ? $_POST : $_GET;
            $message='';
          if(!empty($arr['cid']) && $_POST['cid']!=0){
              $where['cid']=$arr['cid'];
              $message.="/cid/{$arr['cid']}";
           }
          if(!empty($arr['name'])){
              $where['name']="%".$arr['name']."%";
              $message.="/name/{$arr['name']}";
             }
         if(!empty($arr['minprice'])){
             $where['price >']=$arr['minprice'];
             $message.="/minprice/{$arr['minprice']}";
             }
          if(!empty($arr['maxprice'])){
             $where['price <']=$arr['maxprice'];
              $message.="/maxprice/{$arr['maxprice']}";
             }
           //  p($_POST);
             //p($_GET);
        
            $goods=D('goods');
            $pag=new AjaxPage($goods->total($where),3,$message);
            $this->assign('page',$pag->fpage());
            $this->assign('pag',$pag->page);
            $data=$goods->limit($pag->limit)->select($where);
            $this->assign('good',$data);
            $this->display();
        }

        //添加商品的界面
        function add(){
            
           $this->assign('select',D('cat')->selectForm());
            
          //  p(D('cat')->selectForm());
            $this->display();
            
        }
        //加入数据库
        function insert(){
            $goods=D('goods');
            $_POST['ptime']=time();
        
            $up=upload();
            if($up[0]){
                $_POST['pic']=$up[1];
            }else{
                $this->error($up[1],3,'add');
            }
            if($goods->insert($_POST,1,1)){
               
                $this->success('添加商品成功',1,"goods/index");
            }else{
                  if($up[0]){
                    delpic($up[1]);
                  }
                  p($up[1]);
                $this->error($goods->getMsg(),2,"add");
              
            }
        }
        //修改的界面
        function mod(){
            $data=D('goods')->find($_GET['id']);
            $this->assign('select',D('cat')->selectForm('cid',$data['cid']));
            $this->assign($data);
         
            $this->display();
        }
        //向数据库中修改
        function update(){
            $goods=D('goods');
           
             $up=upload();
                if($_FILES['uppic']['error']==0){
                   
                 if($up[0]){
                     $_POST['pic']=$up[1];
                    
                 }else{
                    $this->error($up[1],1,'add');
                }
                delpic($_GET['img']);
                
            }
            if($goods->update($_POST,1,1)){
                 
                $this->success('修改成功',1,"goods/mod/id/{$_POST['id']}");
            }else{
                if($up[0]){
                    delpic($_POST['pic']);
                }
                $this->error('修改失败',2,"goods/mod/id/{$_POST['id']}");
            }
        }
        //删除
        function del(){
            $goods=D('goods');
            $id=!empty($_POST['id']) ? $_POST['id'] : $_GET['id'];
             $del=$goods->field('pic')->where($id)->select();
            if($goods->where($id)->delete()){
               
                foreach($del as $dels){
                    delpic($dels['pic']);
                }
                $this->redirect('index',"page/{$_GET['page']}");
            }else{
                $this->error('删除失败',2,'mod');
            }
           
           
              
                
            
        }
    }
