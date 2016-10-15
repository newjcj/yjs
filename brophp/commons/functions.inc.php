<?php
	//全局可以使用的通用函数声明在这个文件中.
function upload(){
    $up=new FileUpload();
    $up->set('thumb',array('width'=>700,'height'=>700));
    $up->set('watermark',array('water'=>'./public/images/my.jpg','position'=>3));
    if($up->upload('uppic')){
        $fname=$up->getFileName();
        $img=new Image();
        $img->thumb($fname,100,100,'sm_');
        return array(1,$up->getFileName());
    }else{
        return array(0,$up->getErrorMsg());
    }
}
function delpic($filename){
    $fname="./public/uploads/".$filename;
    $fnamesm="./public/uploads/sm_".$filename;
    if(file_exists($fname)){
        unlink($fname);
    }
     if(file_exists($fnamesm)){
        unlink($fnamesm);
    }
}
