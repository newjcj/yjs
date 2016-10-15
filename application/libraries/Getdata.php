<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CI_Getdata{
	//表名，匹配字段，匹配参数,limit开始位置，offset偏移量    -----通用查询------
	public function get_list($table=FALSE,$where=FALSE,$uid=FALSE,$start=0,$num=FALSE){
		$this->load->database();
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
			$query=$this->db->get_where($table,array($where,$uid));
			return $query->row_array($table);
			}
			return FALSE;
		}
		return FALSE;
	}
	public function test(){
		echo $this->uri->segment(2);
	}
}