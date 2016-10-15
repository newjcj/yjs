<?php
class User extends MY_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('User_model','userdb');
    }
    //会员信息
    public function index(){
    	$data=$this->userdb->get_list('user','uid_array',$_SESSION['uid']);
        $this->load->view('user/index',array(
        		'data'=>$data,
        	));
    }
    //会员信息
    /*public function memberinfo(){
        $this->load->view('user/memberinfo');
    }*/
    //修改用户信息
    public function ch_memberinfo(){
    	$ulist=$this->userdb->get_list('user');
		$this->load->vars('ulist',$ulist[$_SESSION['uid']-1]);
		$this->load->view('user/ch_memberinfo');
    }
    //执行修改
	public function update(){
		$user=$this->input->post('user');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$qq=$this->input->post('qq');
		$tell=$this->input->post('tell');
		//ci表单验证
		$this->load->library("form_validation");
		$this->form_validation->set_rules('user','用户名:','trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('password','密码:','trim|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('repassword','确定密码:','trim|required|min_length[6]|max_length[12]|matches[password]');
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
				$this->load->view('user/ch_memberinfo');
			}
	}
    //订单号
    public function order_id(){
    	$data=$this->userdb->get_list('order','uid_array',$_SESSION['uid']);
        $this->load->view('user/order_id',array(
        		'data'=>$data,
        	));
    }
    //处理商户定单号
	public function trade(){
		$goods_id=$this->input->get('subject');
		if($goods_name=$this->db->where("goods_id = {$goods_id}")->get('r_goods')->result_array()){
			$goods_name=$goods_name[0]['goods_name'];
		}else{
			$goods_name="没有查询到！";
		}
		$arr=array(
				'payid'=>$this->input->get('trade_no'),
				'uid'=>$_SESSION['uid'],
				'time'=>time(),
			);
		$re_goods=$this->db
		->where("goods_id = {$goods_id}")
		->get('r_goods')->result_array();
		$arr1=array(
				'order_time'=>time(),
				'expire_time'=>time()+$re_goods[0]['validity_time'],
				'goods_id'=>$goods_id,
				'goods_name'=>$goods_name,
				'uid'=>$_SESSION['uid'],
			);
		//入库  订单号表    购买记录表
		if($this->db->insert('r_order',$arr) && $this->db->insert('r_record',$arr1)){
			echo '支付成功！订单号为：'.$arr['payid'];
			echo date('H:i:s',$arr1['order_time']);
		}
	}
    //用户菜单
    public function user_menu(){
    	$uid=$_SESSION['uid'];
		//表名，    匹配字段(后加_array则所有匹配的,默认返回搜索结果的第一行记录)，    匹配参数,    limit开始位置，    offset偏移量    -----通用查询------
		if($record=$this->userdb->get_list('record','uid_array',$_SESSION['uid'])){
			$arr=array();
			foreach($record as $item){
				$time=time() - $item['order_time'];
				if($time <= $item['expire_time']){
					$arr[]=$item['goods_id'];
				}
			}
			$query=$this->db->where_in('goods_id',$arr)->get('goods');
			$data=$query->result_array();
			//从购买记录表里 通过会员id查询到商品数组
			$goods=$this->db->where("uid = {$_SESSION['uid']}")->get('r_record')->result_array();
			//通过商品数组匹配给用户菜单的过期时间
			foreach($goods as $item){
				foreach($data as $key=>$value){
					if($item['goods_id']==$value['goods_id']){
						$data[$key]['expire_time']=$item['expire_time'];//组合入有效期
						$data[$key]['order_time']=$item['order_time'];//购买时间
					}
				}
			}
		}else{
			$data='';
		}
        $this->load->view('user/user_menu',array(
        		'data'=>$data,
        	));
    }
    //产品
    public function goods(){
    	$query=$this->db->query('select count(*) c from r_goods');
		$count=$query->row_array();
		//加载分页类
		$this->load->library('pagination');
		$config['base_url'] = base_url().'users/goods/';
		$config['total_rows'] = $count['c'];
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		//表名，匹配字段，匹配参数,limit开始位置，offset偏移量
		$data=$this->userdb->get_list('goods',0,0,$this->uri->segment(3),$config['per_page']);
		//$glist=$this->userdb->get_glist(0,$config['per_page'],$this->uri->segment(3));//查询到所有商品，返回数组,第一个参数为假代表不限制查询多少
		//$glist=$this->userdb->get_glist(0,$config['per_page'],0);//查询到所有商品，返回数组
		$this->pagination->initialize($config); 
		$link = $this->pagination->create_links();
        $this->load->view('user/goods',array(
        		'data'=>$data,
        		'link'=>$link,
        	));
    }
    //购买记录
	public function buy_notes(){
		$data=$this->userdb->get_list('record','uid_array',$_SESSION['uid']);
		$this->load->view('user/buy_notes',array(
				'data'=>$data,
			));
		//echo $this->db->last_query();输出最后执行的一条sql语句 
	}
	//测试用
	public function get(){
		/*P($_SESSION);
		$re=$this->db
		->where("uid = 1")
		->get('r_order')->result_array();
		P($re);
		echo strtotime(date("Y-m-d H:i:s"));*/
		$this->load->view('user/get');

	}
	public function test(){
		//echo $this->input->get('aa');exit;
		$this->load->view('user/test');
	}
}
