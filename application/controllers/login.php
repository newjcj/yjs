<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index(){
		$this->load->model('login_model','mlogin');
		$cap=$this->mlogin->verify();
		session_start();
		
		$_SESSION['verify']=$cap['word'];
		$this->load->vars('reg','0');
		$this->load->vars('verify',$cap);
        $this->load->view('login/index'); 
    }
	//验证登录用户
	public function check(){
		//表单验证
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('user', 'Username', 'required');
		// $this->form_validation->set_rules('password', 'Username', 'required');
		//var_dump($this->form_validation->run());
		session_start();
		$user=$this->input->post('user');
		//获取登录用户的id数组 
		$sql='select * from r_user where user=?';
		$sarr=array($user);
		$rel=$this->db->query($sql,$sarr);
		$userarr=$rel->row_array();
		$dbpass = $userarr['password'];
		
		$pass=md5($this->input->post('password'));
		//echo $dbpass."<br>--->".$pass;
		$captcha=$this->input->post('captcha');
		$sql='select user from r_user where user=? && password=?';
		$sqlarr=array($user,$pass);
		$rel=$this->db->query($sql,$sqlarr);
		$arr=$rel->result_array($rel);
		if($_SESSION['verify']==$captcha){
			if(!empty($arr) && $dbpass== $pass){
				//把用户存到session
				$_SESSION['user']=$user;
				$_SESSION['uid']=$userarr['uid'];
				//$_SESSION['email']=$email;
				//$this->load->view('member/index');
				echo "1";
				redirect('user/index');
			}else{
				//echo '用户名或密码错误！';
				echo "passwordError";
			}
		}else{
			echo 'verifyError';
			
		}
	}
	public function select(){
		//echo $this->uri->segment(2);
		//$this->load->database();
		//$sql="select * from r_user";
		//$result=$this->db->query('select * from r_user');
		$result=$this->db->get('r_user');
		$users=$this->db->affected_rows();
		echo "<pre>";
		var_dump($users);
		echo "</pre>";
	}
	public function logout(){
		
		
		$_SESSION=array();
		setCookie(session_name(),'',time()-1,'/');
		session_destroy();
		//$this->load->view('login/index');
		redirect('login/index');
	}
	public function verify(){
		$this->load->model('login_model','mlogin');
		$cap=$this->mlogin->verify();
		session_start();
		
		$_SESSION['verify']=$cap['word'];
		//$this->load->vars('verify',$cap);
		echo $cap['myimg'];
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
