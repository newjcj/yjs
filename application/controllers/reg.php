<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg extends CI_Controller{
	function __construct(){
		parent::__construct();
		session_start();
	}
	public function index(){
		// 加载验证码
		$this->load->model('login_model','mlogin');//mlogin做为加载模型的别名
		$cap=$this->mlogin->verify();
		$_SESSION['regword']=$cap['word'];
		$this->load->vars('cap',$cap);
		//ci表单验证
		$this->load->library("form_validation");
		$this->form_validation->set_rules('user','用户名:','trim|required|min_length[3]|max_length[12]|is_unique[user.user]');
		$this->form_validation->set_rules('password','密码:','trim|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('repassword','密码:','trim|required|min_length[6]|max_length[12]|matches[password]');
		$this->form_validation->set_rules('email','邮箱:','trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('tell','电话：','trim|required');
		$this->form_validation->set_rules('qq','qq：','trim|required');
		// $config = array(
			// array(
				// 'field' => 'user',
				// 'label' => 'Username',
				// 'rules' => 'required'
				// // 'errors' => array(
					// // 'required' => '用户名不能为空！',
				// // ),
			// ),
			// array(
				// 'field' => 'password',
				// 'label' => '密码',
				// 'rules' => 'required',
				// 'errors' => array(
					// 'required' => '密码不能为空',
				// ),
			// ),
			// array(
				// 'field' => 'email',
				// 'label' => 'emails',
				// 'rules' => 'required'
			// ),
			// array(
				// 'field' => 'tell',
				// 'label' => 'tells',
				// 'rules' => 'required'
			// ),
			// array(
				// 'field' => 'qq',
				// 'label' => 'tells',
				// 'rules' => 'required'
			// ),
		// );
		// $this->form_validation->set_rules($config);
		
		//获取传入的参数
		$user=$this->input->post('user');
		$password=$this->input->post('password');
		$repassword=$this->input->post('repassword');
		$email=$this->input->post('email');
		$tell=$this->input->post('tell');
		$qq=$this->input->post('qq');
		$verify=$this->input->post('verify');
		//P($verify);
		$arr=array(
			'user'=>$user,
			'password'=>md5($password),
			'email'=>$email,
			'tell'=>$tell,
			'qq'=>$qq,
			'user'=>$user,
		);
		//用户注册信息插入数据库
			if($this->form_validation->run()){
				/*if($_SESSION['verify']==$verify){*/
					if($this->db->insert('user',$arr)){
						$this->load->vars('reg',"0");
							echo "注册成功";
					redirect('login/index');
					}
				/*}else{
					exit('验证码错误！');
				}*/
			}else{
				$this->load->vars('reg','1');//传值给前台js标识注册不成功
				$this->load->view('login/index');
			}
		
	}
}
