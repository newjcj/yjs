<?php
	class Pul{
		public function index(){
			
			$date=Form::date('time');
			$this->assign('c',Form::editor('one'));
			$this->assign('time',$date);
			$this->display();
		}
	}