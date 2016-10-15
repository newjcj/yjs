<?php
class Test extends CI_Controller{
    public function index(){
        $str='abcdef';
        $str[2]='ffff';
        echo $str[2];
        echo "<br>".$str;
    }
}


