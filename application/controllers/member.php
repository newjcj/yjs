<?php
class Member extends MY_Controller{
    public function index(){
       $this->load->view('member/index');
    }
    public function top(){
		$this->load->view('member/top');
	}
	public function left(){
		$this->load->view('member/left');
	}
	public function right(){
		//$this->load->view('users/index');
		redirect('users/index');
	}
	public function bottom(){
		$this->load->view('member/bottom');
	}
	public function one(){
		$this->load->view('member/one');
	}
}
