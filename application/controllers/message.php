<?php
class Message extends MY_Controller{
    public function index(){
		//P($_GET);
		echo 111;
		//echo $this->uri->segment(1);
        $this->load->view('message');
    }

}
