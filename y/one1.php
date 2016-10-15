<?php
    class Test{
        public $one=300;
        public function get(){
            echo $this->one;
        }
    }
$aa=new Test();
echo $aa->one;
