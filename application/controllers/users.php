<?php
class Users extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model','userdb');
	}
    public function index(){
		//$this->load->model('User_model');
		//从数据库查询users的全部记录数组，获一条记录（如果传uid）
		//$userarr=$this->userdb->get_ulist(2);
		//从数据库查询users的全部记录数组，获一条记录（如果传uid）
		//$userarr=$this->userdb->get_glist(1);
		//从数据库查询record的全部记录数组，获一条记录（如果传rid）
		//$userarr=$this->userdb->get_rlist(1);
		
		//$uarr=$this->userdb->get_ulist($_SESSION['uid']);
		//P($_SESSION);
		$rlist=$this->userdb->get_rlist();//不传参则查询全部，传一个参数uid则查询一条用户的记录，第二个参数也传1则查询一个用户的所有记录
		if($rlist==FALSE){
			$rlist='';
		}
		$glist=$this->userdb->get_glist();
		$ulist=$this->userdb->get_ulist($_SESSION['uid']);
		$this->load->vars(array('rlist'=>$rlist,'glist'=>$glist,'ulist'=>$ulist));
		$this->load->view('users/index');
	}
	//会员信息
	public function userinfo(){
		$ulist=$this->userdb->get_list('user');
		$this->load->vars('ulist',$ulist);
		$this->load->view('users/userinfo');
	}
	//订单信息
	public function order(){
		$olist=$this->userdb->get_olist();
		$this->load->vars('olist',$olist);
		$this->load->view('users/order');
	}
	//产品信息
	public function goods(){
		//分页
		//查询到总数
		
		$query=$this->db->query('select count(*) c from r_goods');
		$count=$query->row_array();
		//加载分页类
		$this->load->library('pagination');
		$config['base_url'] = base_url().'users/goods/';
		$config['total_rows'] = $count['c'];
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		//表名，匹配字段，匹配参数,limit开始位置，offset偏移量
		$glist=$this->userdb->get_list('goods',0,0,$this->uri->segment(3),$config['per_page']);
		//$glist=$this->userdb->get_glist(0,$config['per_page'],$this->uri->segment(3));//查询到所有商品，返回数组,第一个参数为假代表不限制查询多少
		//$glist=$this->userdb->get_glist(0,$config['per_page'],0);//查询到所有商品，返回数组
		$this->pagination->initialize($config); 
		$link = $this->pagination->create_links();
		$this->load->vars('glist',$glist);
		$this->load->vars('link',$link);
		$this->load->view('users/goods');
	}
	//购买记录
	public function record(){
		$rlist=$this->userdb->get_list('record');
		$this->load->vars('rlist',$rlist);
		$this->load->view('users/record');
		echo $this->db->last_query();
	}
	//用户菜单
	public function menu(){
		// $this->load->vars(array('ms'=>'<font color="red">失败</font>','url'=>'login/index'));
		// $this->load->view('message');
		$uid=$_SESSION['uid'];
		//表名，    匹配字段(后加_array则所有匹配的,默认返回搜索结果的第一行记录)，    匹配参数,    limit开始位置，    offset偏移量    -----通用查询------
		$record=$this->userdb->get_list('record','uid_array',1);
		$arr=array(1);
		foreach($record as $item){
			$time=time() - $item['order_time'];
			if($time <= $item['expire_time']){
				$arr[]=$item['goods_id'];
			}
		}
		$query=$this->db->where_in('goods_id',$arr)->get('goods');
		$glist=$query->result_array();
		// P($glist);
		
		$this->load->vars('glist',$glist);
		$this->load->view('users/menu');
	}
	//用户菜单
	public function cuserinfo(){
		$user=$this->input->post('user');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$qq=$this->input->post('qq');
		$tell=$this->input->post('tell');
		//ci表单验证
		$this->load->library("form_validation");
		$this->form_validation->set_rules('user','用户名:','trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('password','密码:','trim|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('repassword','密码:','trim|required|min_length[6]|max_length[12]|matches[password]');
		$this->form_validation->set_rules('email','邮箱:','trim|required|valid_email');
		$this->form_validation->set_rules('tell','电话：','trim|required');
		$this->form_validation->set_rules('qq','qq：','trim|required');
		$arr=array(
			'user'=>$user,
			'password'=>md5($password),
			'email'=>$email,
			'tell'=>$tell,
			'qq'=>$qq,
			//'user'=>$user,
		);
		$where=array(
			'uid'=>$_SESSION['uid']
		);
		//用户注册信息插入数据库
			if($this->form_validation->run()){
				
					if($this->db->update('user',$arr,$where)){
							echo "修改成功";
						 $_SESSION[]=array();
						 if(isset($_COOKIE[session_name()])){
							 setCookie($_COOKIE[session_name()],'',time()-1,'/');
						 }
						 session_destroy();
						 $this->load->vars(array('ms'=>'<font color="green">修改成功!请重新登录</font>','url'=>'login/index'));
						 $this->load->view('message');
					}
				
			}else{
				$ulist=$this->userdb->get_list('user','uid',$_SESSION['uid']);
				$this->load->vars('ulist',$ulist);
				$this->load->view('users/cuserinfo');
			}
		
		
	}
	//修改个人信息
	public function update(){
		$user=$this->input->post('user');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$qq=$this->input->post('qq');
		$tell=$this->input->post('tell');
		echo $tell;
	}
	public function test(){
		$str="http://www.qq.com";
		$arr=explode('.',$str);
		echo $arr[count($arr)-1];
	}
	//处理商户定单号
	public function trade(){
		$arr=array();
		$arr['trade_no']=$_GET['trade_no'];
		$arr['user']=$_SESSION['user'];
	}
	
}
