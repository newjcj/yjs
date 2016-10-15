<?php
class Test_model extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    public function get_news($params=false){
        if($params===false){
            $link=  $this->db->get('domain');
            return $link->result_array();
        }
        $exec=  $this->db->get_where('domain',array('domain_id'=>$params));
        return $exec->row_array();
        
    }
    
}
