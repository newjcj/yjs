<?php
class App extends CI_Controller{
	public function applist(){
		echo 111;
		$this->load->view('app/applist');
	}
}
