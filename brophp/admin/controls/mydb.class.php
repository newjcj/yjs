<?php
    class mydb{
         function index(){
            $data = D("us1")->where()->select(array(4,6));
            
            $this->assign("mydata",$data);
            p($data);
          

            $this->display();
        
        }
    }
