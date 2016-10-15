<?php
	class Common extends Action {
		function init(){
            if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin']===1)){
                $this->redirect('login/index');         
            }
        
/*
        if($_GET['m']=="cat" && $_SESSION['two']!=1){
            $this->error('您没有权限访问此操作',2,'index/index');
        }
 */
        }
    }


