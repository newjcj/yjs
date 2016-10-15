<?php
	class Index {
        function index(){
            debug();
		    $this->display();
        }		
        function top(){
            debug();
           // p($_SESSION);
            $this->display();  
        }
        function left(){
            debug();
            $this->display();
        }
        function right(){
            debug();
            $this->display();   
        }
	}
