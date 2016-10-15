<?php
class Login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function verify(){
        $this->load->helper('captcha');
        $vals = array(
			'word'      => rand(1000,5000),
			'img_path'  => './public/img/captcha/',
			'img_url'   => base_url().'public/img/captcha/',
			//'font_path' => './path/to/fonts/texb.ttf',
			'img_width' => '100',
			//'img_height'    => 30,
			'expiration'=> 60,
			//'word_length'   => 4,
			//'font_size' => 16,
			//'img_id'    => 'Imageid',
			//'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

			// White background and border, black text and red grid
			// 'colors'    => array(
				 'background' => array(50, 197, 210),
				 'border' => array(50, 197, 210),
				 'text' => array(0, 0, 0),
				 'grid' => array(50, 197, 210)
			// )
		 );
		//创建验证码
		$cap = create_captcha($vals);
		return $cap;
    }
}
