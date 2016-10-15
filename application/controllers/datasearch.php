<?php
class Datasearch extends CI_Controller{
    public function __construct(){
        parent::__construct();
        session_start();
    }
    public function index(){
        echo "index";
    }
    //单个商品查询到的记录信息
    public function r_skugoods(){
        $data=$this->db->select()
            ->from("r_skugoods")
            ->where('uid = ',$_SESSION['uid'])
            //->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //类目查询   类目排名监测
    public function r_getcontent_c(){
        $data=$this->db->select()
            ->from("r_getcontent_c")
            ->where('uid = ',$_SESSION['uid'])
            //->limit('3,0')
            ->get();
        $data=$data->result_array();
        $this->load->vars('data',$data);
        $this->load->view('datasearch/r_getcontent_c');
    }
    //搜索排名监测
    public function related_search_survey(){
        $arr=array();
        $data1=$this->db->select()//pc端搜索排名查询
            ->from("r_skugoods")
            ->where('uid = ',$_SESSION['uid'])
            //->limit('3,0')
            ->get();
            $arr[0]=$data1->result_array();
        $data2=$this->db->select()//app搜索排名
            ->from("r_getcontent_a")
            ->where('uid = ',$_SESSION['uid'])
            //->limit('3,0')
            ->get();
            $arr[1]=$data2->result_array();
        $data3=$this->db->select()//微信搜索排名
            ->from("r_getcontent_w")
            ->where('uid = ',$_SESSION['uid'])
            //->limit('3,0')
            ->get();
            $arr[2]=$data3->result_array();
        $this->load->vars('data',$arr);
        $this->load->view("datasearch/related_search_survey");
    }
    //app搜索排名
    public function r_getcontent_a(){
        $data=$this->db->select()
            ->from("r_getcontent_a")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //微信搜索排名
    public function r_getcontent_w(){
        $data=$this->db->select()
            ->from("r_getcontent_w")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //相关词查询
    public function r_inword(){
        $data=$this->db->r_inword()
            ->from("r_inword")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //京准通查询
    public function r_getcontent_j(){
        $data=$this->db->select()
            ->from("r_getcontent_j")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //店铺销量
    public function r_getcontent_shop(){
        $data=$this->db->select()
            ->from("r_getcontent_shop")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌销量
    public function r_getcontent_brand(){
        $data=$this->db->select()
            ->from("r_getcontent_brand")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //商品详情
    public function r_getcontent_detail(){
        $data=$this->db->select()
            ->from("r_getcontent_detail")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //商品评价
    public function r_getcontent_assess(){
        $data=$this->db->select()
            ->from("r_getcontent_assess")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //店铺查询1
    public function r_getcontent_shop_base1(){
        $data=$this->db->select()
            ->from("r_getcontent_shop_base1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //店铺查询2
    public function r_getcontent_shop_base2(){
        $data=$this->db->select()
            ->from("r_getcontent_shop_base2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌查询
    public function r_brand_search(){
        $data=$this->db->select()
            ->from("r_brand_search")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业整体分析
    public function r_getcontent_trade1(){
        $data=$this->db->select()
            ->from("r_getcontent_trade1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //热销商家排行
    public function r_getcontent_trade2(){
        $data=$this->db->select()
            ->from("r_getcontent_trade2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //热销商品排行
    public function r_getcontent_trade3(){
        $data=$this->db->select()
            ->from("r_getcontent_trade3")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //飙升商品排行
    public function r_getcontent_trade4(){
        $data=$this->db->select()
            ->from("r_getcontent_trade4")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //买家购买分析
    public function r_getcontent_trade5(){
        $data=$this->db->select()
            ->from("r_getcontent_trade5")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //买家购买特征分析
    public function r_getcontent_trade6(){
        $data=$this->db->select()
            ->from("r_getcontent_trade6")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //子行业排行榜单-》子行业
    public function r_getcontent_sister1(){
        $data=$this->db->select()
            ->from("r_getcontent_sister1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //搜索点击指数变化趋势
    public function r_getcontent_sister2(){
        $data=$this->db->select()
            ->from("r_getcontent_sister2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业热词top
    public function r_getcontent_hword1(){
        $data=$this->db->select()
            ->from("r_getcontent_hword1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业扫热词飙升榜单
    public function r_getcontent_hword2(){
        $data=$this->db->select()
            ->from("r_getcontent_hword2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌热销排行
    public function r_getcontent_brand_sister1(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_sister1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //飙升品牌排行
    public function r_getcontent_brand_sister2(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_sister2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌详情-》整体情况
    public function r_getcontent_brand_detail_1(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌详情-》品牌行业布
    public function r_getcontent_brand_detail_2(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //热销商家排行
    public function r_getcontent_brand_detail_3_1(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_3_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //热销商家排行 品牌详情-》热销商家商品
    public function r_getcontent_brand_detail_3_2(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_3_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌详情-》热销商品排行
    public function r_getcontent_brand_detail_4(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_4")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌详情-》买家购买分析
    public function r_getcontent_brand_detail_5(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_5")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //品牌详情-》买家特征分析
    public function r_getcontent_brand_detail_6(){
        $data=$this->db->select()
            ->from("r_getcontent_brand_detail_6")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //属性分析
    public function r_getcontent_attr(){
        $data=$this->db->select()
            ->from("r_getcontent_attr")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //属性详情-》属性值详情
    public function r_getcontent_attr_detail_1(){
        $data=$this->db->select()
            ->from("r_getcontent_attr_detail_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //属性详情-》热销店铺排行
    public function r_getcontent_attr_detail_2(){
        $data=$this->db->select()
            ->from("r_getcontent_c")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //属性详情-》热销商品排行
    public function r_getcontent_attr_detail_3(){
        $data=$this->db->select()
            ->from("r_getcontent_attr_detail_3")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //来源搜索词-》流量来源
    public function r_src_key_1(){
        $data=$this->db->select()
            ->from("r_src_key_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //来源搜索词-》热搜关键词
    public function r_src_key_2(){
        $data=$this->db->select()
            ->from("r_src_key_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //来源搜索词-》关联购买
    public function r_src_key_3(){
        $data=$this->db->select()
            ->from("r_src_key_3")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //类目关联热词
    public function r_cate_r_hot(){
        $data=$this->db->select()
            ->from("r_cate_r_hot")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业关键词-》行业热词top榜单
    public function r_getcontent_mate_hw_1_1(){
        $data=$this->db->select()
            ->from("r_getcontent_mate_hw_1_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业关键词-》行业热词飙升
    public function r_getcontent_mate_hw_1_2(){
        $data=$this->db->select()
            ->from("r_getcontent_mate_hw_1_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //行业关键词-》相关行业热词
    public function r_getcontent_mate_hw_2(){
        $data=$this->db->select()
            ->from("r_getcontent_mate_hw_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //标题分析-》匹配热词
    public function r_getcontent_mate_hw1_1(){
        $data=$this->db->select()
            ->from("r_getcontent_mate_hw1_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //标题分析-》关联热词
    public function r_getcontent_mate_hw1_2(){
        $data=$this->db->select()
            ->from("r_getcontent_mate_hw1_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //客户流失分析
    public function r_getcontent_client_run(){
        $data=$this->db->select()
            ->from("r_getcontent_client_run")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //经营概况
    public function r_getcontent_shop_general(){
        $data=$this->db->select()
            ->from("r_getcontent_shop_general")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //pc经营状况
    public function r_pcmanage(){
        $data=$this->db->select()
            ->from("r_pcmanage")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //移动端经营概况-》移动端整体数据报表
    public function r_getcontent_shop_general_m_1(){
        $data=$this->db->select()
            ->from("r_getcontent_shop_general_m_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //移动端经营概况-》移动端时段分布报表
    public function r_getcontent_shop_general_m_2(){
        $data=$this->db->select()
            ->from("r_getcontent_shop_general_m_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //实时概况
    public function r_getcontent_real(){
        $data=$this->db->select()
            ->from("r_getcontent_real")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //实时访客
    public function r_getContent_real_caller(){
        $data=$this->db->select()
            ->from("r_getContent_real_caller")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //实时榜单
    public function r_getcontent_real_list(){
        $data=$this->db->select()
            ->from("r_getcontent_real_list")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //实时流量
    public function r_getcontent_real_rate_1(){
        $data=$this->db->select()
            ->from("r_getcontent_real_rate_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //实时流量
    public function r_getcontent_real_rate_2(){
        $data=$this->db->select()
            ->from("r_getcontent_real_rate_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //商品统计
    public function r_getcontent_goods_count(){
        $data=$this->db->select()
            ->from("r_getcontent_goods_count")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //销售明细
    public function r_getcontent_detail_s(){
        $data=$this->db->select()
            ->from("r_getcontent_detail_s")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //商品趋势分析
    public function r_getcontent_trend(){
        $data=$this->db->select()
            ->from("r_getcontent_trend")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //销量分析-》访问次数汇总
    public function r_getcontent_sales_analyse_1(){
        $data=$this->db->select()
            ->from("r_getcontent_sales_analyse_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //销量分析-》按下单件数汇总
    public function r_getcontent_sales_analyse_2(){
        $data=$this->db->select()
            ->from("r_getcontent_sales_analyse_2")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //订单明细
    public function r_getcontent_order_detail(){
        $data=$this->db->select()
            ->from("r_getcontent_order_detail")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //流量概况
    public function r_getcontent_rate_general(){
        $data=$this->db->select()
            ->from("r_getcontent_rate_general")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //小时流量分析
    public function r_getcontent_hour_analyse(){
        $data=$this->db->select()
            ->from("r_getcontent_hour_analyse")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //按天流量分析
    public function r_getcontent_day_rate(){
        $data=$this->db->select()
            ->from("r_getcontent_day_rate")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //流量来源
    public function r_getcontent_rate_source(){
        $data=$this->db->select()
            ->from("r_getcontent_rate_source")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //访客来源
    public function r_getcontent_rate_visitor(){
        $data=$this->db->select()
            ->from("r_getcontent_rate_visitor")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //来源成交-》关键词列表
    public function r_getcontent_resource_strike(){
        $data=$this->db->select()
            ->from("r_getcontent_resource_strike")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
    //关键词分析-》商品列表
    public function r_getcontent_key_analyse_1(){
        $data=$this->db->select()
            ->from("r_getcontent_key_analyse_1")
            ->where('uid = ',$_SESSION['uid'])
            ->limit('3,0')
            ->get();
        P($data->result_array());
    }
}
