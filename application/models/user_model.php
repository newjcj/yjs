<?php
class User_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	//表名，匹配字段(后加_array则所有匹配的)，匹配参数,limit开始位置，offset偏移量    -----通用查询------
	public function get_list($table=FALSE,$where=FALSE,$uid=FALSE,$start=0,$num=FALSE){
		if($table!=FALSE){
			if($num!=FALSE){
				$query=$this->db
							->limit($num,$start)
							->get($table);
				return $query->result_array();
			}
			if($where==FALSE && $uid==FALSE){
			$query=$this->db->get($table);
			return $query->result_array();
			}
			if($where!=FALSE && $uid!=FALSE){
				if(preg_match('/_array/',$where)){
					$where=trim($where,'_array');
					$query=$this->db->get_where($table,array($where=>$uid));
					return $query->result_array($table);
				}else{
					$query=$this->db->get_where($table,array($where=>$uid));
					return $query->row_array($table);
				}
			}
			return FALSE;
		}
		return FALSE;
	}
    public function get_ulist($uid = FALSE){
        if($uid == FALSE){
            $query=$this->db->get('user');
            //$query=$this->db->query('select * from r_user');
            return $query->result_array();
        }
        $query = $this->db->get_where('user',array('uid'=>$uid));
        return $query->row_array();
    }
    public function get_glist($gid = FALSE,$start=10,$end=0){
		if($gid==FALSE){
			$query=$this->db
						->limit($start,$end)
						->get('goods');
            return $query->result_array();
		}
        if($gid == FALSE){
            $query=$this->db->get('goods');
            return $query->result_array();
        }
        $query=$this->db->get_where('goods',array('goods_id' => $gid));
        return $query->row_array();
    }
	public function get_rlist($rid = FALSE,$arr=0){
		if($rid == FALSE){
			
			$query = $this->db->get('record');
			return $query->result_array();
		}
		if($arr==1){
				$query = $this->db->get_where('record',array('uid'=>$rid));
				return $query->result_array();
			}
		$query=$this->db->get_where('record',array('uid' => $rid));
		return $query->row_array();
	}
	public function get_olist($rid=FALSE){
		if($rid==FALSE){
			$query=$this->db->get('order');
			return $query->result_array();
		}
		$query=$this->db->get_where('order',array('uid' => $rid));
		return $query->row_array();
	}
	//查询用户的权限列表(参数1：uid,参数2：goods_id用来匹配查询的商品id用来判断用户有没有该商品权限)
	public function get_authority($uid=FALSE,$goods_id=FALSE){
		$record=$this->get_list('record','uid_array',$uid);
		//$time=$this->get_list('record','expire_array',$uid);
		$st=FALSE;
		foreach($record as $item){
			if($item['goods_id']==$goods_id && $item['expire_time']>time()-60){
				$st=TRUE;
			}
		}
		if($st==FALSE){
			header("Content-Type:text/html;charset='utf-8'");
			echo "您还没有该应用的权限！";
			exit;
		}
	}
	
}
