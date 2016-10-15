<?php
class CatAction extends Common {
        function index(){
            debug();
            $data=D('cat')->field('id,concat(path,"-",id) as abspath,name')->order('abspath,id')->select();
            $this->assign('select',$data);
            $this->display();
        }
        function add(){
            debug();
            $data=D('cat')->selectForm('pid');
            $this->assign('select',$data);
            $this->display();
        }
        function insert(){
            $cat=D('cat');
            if($_POST['pid']==0){
                $_POST['path']=0;
            }else{
                $cid=$cat->find($_POST['pid']);
                $path=$cid['path'].'-'.$_POST['pid'];
                $_POST['path']=$path;
            }
            if($cat->insert()){
                $this->success('添加分类成功',1,'index');
            }else{
                $this->error('添加分类失败',1,'add');
            }
               p($_POST);
            
        }

        function mod(){
            debug();
            $catobj=D('cat');
            $cat=$catobj->find($_GET['id']);
            $this->assign($cat);
            $this->assign('select',$catobj->selectForm('pid',$cat['pid']));
            $this->display();
        }
        function update(){
             $cat=D('cat');
            //取出两个psth,新选择的path,当前的path
                //新选择的path
            $p=$cat->field('path')->find($_POST['pid']);
             $ppath=$p['path'];
                //当前的path
             $x=$cat->field('path')->find($_POST['id']);
             $xpath=$x['path'];
            // $ppath=$p['path'].'-'.$_POST['id'];
             //新插入的path
             if($_POST['pid']==0){
                     $_POST['path']=0;
              }else{
                 $_POST['path']=$ppath.'-'.$_POST['pid'];
              }
             //新分类，不能在自己和自己的子分类中
             p($_POST['id']);
             p($_POST['path']);
             if(in_array($_POST['id'],explode('-',$_POST['path']))){
                $this->error("{$_POST['name']}不能在自己或自己的子分类中",3,"cat/mod/id/{$_POST['id']}");
             }
             //得到两个想互替换的节点
             $srcpath=$xpath.'-'.$_POST['id'];
             $cpath=$_POST['path'].'-'.$_POST['id'];
             p($srcpath);
             p($cpath);
            //所有子分类一起更新
             $bb=$cat->where("path like '{$srcpath}%'")->update("path=replace(path,'{$srcpath}','{$cpath}')");
             p($bb);

            //p($_POST);
            
            if($cc=$cat->update()){
                $this->success('修改分类成功',2,'index');
            }else{
                p($cc);
                $this->error('修改分类失败',4,"cat/mod/id/{$_POST['id']}");
            }

        }
        function del(){
            $cat=D('cat');
            if($cat->total(array('pid'=>$_GET['id']))>0){
                $this->error('当前分类下有子类，不能删除！',2,'index');
            }
            if(D('goods')->total(array('cid'=>$_GET['id']))>0){
                $this->error('当前分类有商品，不能删除！',2,"index");
            }
            if($cat->where($_GET['id'])->delete()){
                $this->success('删除分类成功',1,'index');
            }else{
                $this->error('删除分类失败',1,"cat/mod/id/{$_GET['id']}");
            }
        }
    }
