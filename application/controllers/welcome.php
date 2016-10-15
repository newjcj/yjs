<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
    public function index(){
		echo 555;
       $this->load->view('welcome_message'); 
    }
    public function test(){
        $this->load->view('member/index');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
