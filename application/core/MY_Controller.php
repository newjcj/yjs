<?php
class MY_Controller extends CI_Controller{
    public function __construct(){
        //echo 'mycontroller';
        parent::__construct();
        session_start();
        if(!isset($_SESSION['user']) || ($_SESSION['user']=='')){
           redirect('login/index');
        }
        //parent::__construct();
       
       
    }
}
