<?php
class Datainto extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','userdb');//加载自定义数据库操作模型
        //开启session
        session_start();
    }
    //单个商品查询到的记录信息   
    // pc搜索排名查询
    public function r_skugoods(){
        $time=$this->input->post('time');
        $sku=$this->input->post('sku');
        $price=$this->input->post('price');
        $price+=0;
        $assess=$this->input->post('assess');
        $title=$this->input->post('goodsname');
        $page=$this->input->post('page');
        $who=$this->input->post('who');
        //$href=$this->input->post('href');
        //$img=$this->input->post('img');
        $who=$this->input->post('who');
        $ranking=$this->input->post('ranking');
        $page=$this->input->post('page');
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'name'=>$title,
            'price'=>$price,
            'assess'=>$assess,
            'ranking'=>$ranking,
            'page'=>$page,
            'who'=>$who,
        );
        if($this->db->insert('r_skugoods',$data)){
            echo $this->db->insert_id();
        }
    }
    //类目查询
    public function r_getcontent_c(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        /*$time=$this->input->post('time');
        $sku=$this->input->post('sku');
        $price=$this->input->post('price');
        $price+=0;
        $assess=$this->input->post('assess');
        $title=$this->input->post('goodsname');
        $page=$this->input->post('page');
        $who=$this->input->post('who');*/
        //$href=$this->input->post('href');
        //$img=$this->input->post('img');
        /*$who=$this->input->post('who');
        $ranking=$this->input->post('ranking');
        $page=$this->input->post('page');*/
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'sku'=>$sku,//sku
            'title'=>$title,//
            'price'=>$price,//
            'assess'=>$assess,//assess 评价
            'ranking'=>$ranking,//
            'page'=>$page,//
            'who'=>$who,//
        );
        if($this->db->insert('r_getcontent_c',$data)){
            echo $this->db->insert_id();
        }
    }
    //app搜索排名
    public function r_getcontent_a(){
        $time=$this->input->post('time');
        $sku=$this->input->post('sku');
        $price=$this->input->post('price');
        $price+=0;
        $assess=$this->input->post('assess');
        $title=$this->input->post('goodsname');
        $page=$this->input->post('page');
        $who=$this->input->post('who');
        //$href=$this->input->post('href');
        //$img=$this->input->post('img');
        $who=$this->input->post('who');
        $ranking=$this->input->post('ranking');
        $page=$this->input->post('page');
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'name'=>$title,
            'price'=>$price,
            'assess'=>$assess,
            'ranking'=>$ranking,
            'page'=>$page,
            'who'=>$who,
        );
        if($this->db->insert('r_getcontent_a',$data)){
            echo $this->db->insert_id();
        }
    }
    //微信搜索排名
    public function r_getcontent_w(){
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'sku'=>$sku,//sku
            'name'=>$title,//name
            'price'=>$price,//price
            'assess'=>$assess,//assess 评价人数
            'ranking'=>$ranking,//ranking
            'page'=>$page,//page
            'who'=>$who,//who
        );
        if($this->db->insert('r_getcontent_w',$data)){
            echo $this->db->insert_id();
        }
    }
    //相关词查询
    public function r_inword(){
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            //'sku'=>$sku,
            'interfixword'=>$interfixword,//相关词
            'goods_num'=>$goods_num,//商品数
        );
        if($this->db->insert('r_inword',$data)){
            echo $this->db->insert_id();
        }
    }
    //京准通查询
    public function r_getcontent_j(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'title'=>$title,
            'ranking'=>$ranking,
            'shop_number'=>$shop_number,
            'href'=>$href,
        );
        if($this->db->insert('r_getcontent_j',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //搜索词销量
    public function r_getcontent_word(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'shop_number'=>$shop_number,
            'market_time'=>$market_time,
            'money15'=>$money15,
            'pop'=>$pop,
            'hot'=>$hot,
            'appraise'=>$appraise,
            'goods_weight'=>$goods_weight,
            'title_weight'=>$title_weight,
            'goods_name'=>$goods_name,
            'shop_name'=>$shop_name,
        );
        if($this->db->insert('r_getcontent_word',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //店铺销量
    public function r_getcontent_shop(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'shop_number'=>$shop_number,
            'shop_type'=>$shop_type,
            'market_time'=>$market_time,
            'money15'=>$money15,
            'pop'=>$pop,
            'hot'=>$hot,
            'appraise'=>$appraise,
            'goods_weight'=>$goods_weight,
            'title_weight'=>$title_weight,
            'goods_name'=>$goods_name,
            'shop_name'=>$shop_name,
        );
        if($this->db->insert('r_getcontent_shop',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌销量
    public function r_getcontent_brand(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'shop_number'=>$shop_number,
            'sho_type'=>$sho_type,
            'market_time'=>$market_time,
            'money15'=>$money15,
            'pop'=>$pop,
            'hot'=>$hot,
            'appraise'=>$appraise,
            'goods_weight'=>$goods_weight,
            'title_weight'=>$title_weight,
            'goods_name'=>$goods_name,
            'shop_name'=>$shop_name,
        );
        if($this->db->insert('r_getcontent_brand',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //商品详情
    public function r_getcontent_detail(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'shop_number'=>$shop_number,
            'brand_list'=>$brand_list,
            'market_time'=>$market_time,
            'shop_name'=>$shop_name,
            'price_app'=>$price_app,
            'same_list'=>$same_list,
            'belong_shop'=>$belong_shop,
            'sales_info'=>$sales_info,
            'preferential'=>$preferential,
            'belong_brand'=>$belong_brand,
            'price_mark'=>$price_mark,
            'price_pc'=>$price_pc,
            'access'=>$access,
            'middle_access'=>$middle_access,
            'shop_pic'=>$shop_pic,
            'seek'=>$seek,
            'attention'=>$attention,
            'goods_grade'=>$goods_grade,
            'color'=>$color,
        );
        if($this->db->insert('r_getcontent_detail',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //商品评价
    public function r_getcontent_assess(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'access_total'=>$access_total,
            'show_total'=>$show_total,
            'good'=>$good,
            'good_rate'=>$good_rate,
            'middle_good'=>$middle_good,
            'middle_rate'=>$middle_rate,
            'bad_good'=>$bad_good,
            'bad_rate'=>$bad_rate,
            'five'=>$five,
            'four'=>$four,
            'three'=>$three,
            'two'=>$two,
            'one'=>$one,
            'pic'=>$pic,
        );
        if($this->db->insert('r_getcontent_assess',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //店铺查询
    public function r_getcontent_shop_base1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'shop_name'=>$shop_name,
            'sale_shop'=>$sale_shop,
            'assess'=>$assess,
            'trade_compare'=>$trade_compare,
            'mass_linear'=>$mass_linear,
            'mass_compare'=>$mass_compare,
            'serve_linear'=>$serve_linear,
            'serve_compare'=>$serve_compare,
            'logistics_compare'=>$logistics_compare,
            'logistice_linear'=>$logistice_linear,
            'discus_compare'=>$discus_compare,
            'discus_linear'=>$discus_linear,
            'return_compare'=>$return_compare,
            'return_linear'=>$return_linear,
        );
        if($this->db->insert('r_getcontent_shop_base1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //店铺查询2
    public function r_getcontent_shop_base2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'price_app'=>$price_app,
            'access_total'=>$access_total,
            'good'=>$good,
            'middle_good'=>$middle_good,
            'bad_good'=>$bad_good,
        );
        if($this->db->insert('r_getcontent_shop_base2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌查询
    public function r_brand_search(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'page'=>$page,
            'title'=>$title,
            'sku'=>$sku,
            'price'=>$price,
            'access'=>$access,
            'shop_id'=>$shop_id,
            'shop_name'=>$shop_name,
        );
        if($this->db->insert('r_brand_search',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业整体分析
    public function r_getcontent_trade1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'search_index'=>$search_index,
            'cate_index'=>$cate_index,
            'price_one'=>$price_one,
            'cate_air'=>$cate_air,
            'strike_index'=>$strike_index,
        );
        if($this->db->insert('r_getcontent_trade1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //热销商家排行
    public function r_getcontent_trade2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'goods_name'=>$goods_name,
            'hot_index'=>$hot_index,
            'air_index'=>$air_index,
            'show_goods'=>$show_goods,
            'rise'=>$rise,
            'show_rise'=>$show_rise,
            'new_air'=>$new_air,
        );
        if($this->db->insert('r_getcontent_trade2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //热销商品排行
    public function r_getcontent_trade3(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'price'=>$price,
            'strike_index'=>$strike_index,
            'link_rate'=>$link_rate,
            'shop_sku'=>$shop_sku,
            'goods_strike'=>$goods_strike,
        );
        if($this->db->insert('r_getcontent_trade3',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //飙升商品排行
    public function r_getcontent_trade4(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'goods_name'=>$goods_name,
            'price'=>$price,
            'strike_index'=>$strike_index,
            'link_rate'=>$link_rate,
            'goods_strike'=>$goods_strike,
        );
        if($this->db->insert('r_getcontent_trade4',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //买家购买分析
    public function r_getcontent_trade5(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'pro_section'=>$pro_section,
            'pro_num'=>$pro_num,
            'pro_scale'=>$pro_scale,
            'pro_unit'=>$pro_unit,
            'num_unit'=>$num_unit,
            'unit_scale'=>$unit_scale,
            'frequency'=>$frequency,
            'num'=>$num,
            'pro_strike'=>$pro_strike,
            'period'=>$period,
            'tty'=>$tty,
        );
        if($this->db->insert('r_getcontent_trade5',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //买家购买特征分析
    public function r_getcontent_trade6(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'uv'=>$uv,
            'pro_uv'=>$pro_uv,
            'strike'=>$strike,
            'strike_pro'=>$strike_pro,
            'period'=>$period,
            'tty'=>$tty,
        );
        if($this->db->insert('r_getcontent_trade6',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //子行业排行榜单-》子行业
    public function r_getcontent_sister1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'strike_pro'=>$strike_pro,
            'strike_total_pro'=>$strike_total_pro,
        );
        if($this->db->insert('r_getcontent_sister1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //搜索点击指数变化趋势
    public function r_getcontent_sister2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
        );
        if($this->db->insert('',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业热词top
    public function r_getcontent_hword1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'h_words'=>$h_words,
            's_index'=>$s_index,
            's_air'=>$s_air,
            't_index'=>$t_index,
            't_rate'=>$t_rate,
            'strike_index'=>$strike_index,
            'change_pro'=>$change_pro,
            'cate3'=>$cate3,
            'related_w'=>$related_w,
            'h_w_detail'=>$h_w_detail,
        );
        if($this->db->insert('r_getcontent_hword1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业扫热词飙升榜单
    public function r_getcontent_hword2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'h_words'=>$h_words,
            'extent'=>$extent,
            'cate3'=>$cate3,
            'h_w_related'=>$h_w_related,
            'h_w_detail'=>$h_w_detail,
        );
        if($this->db->insert('',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌热销排行
    public function r_getcontent_brand_sister1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'banrd_id'=>$banrd_id,
            'h_index'=>$h_index,
            'a_index'=>$a_index,
            'detailed'=>$detailed,
        );
        if($this->db->insert('r_getcontent_brand_sister1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //飙升品牌排行
    public function r_getcontent_brand_sister2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'banrd_id'=>$banrd_id,
            'h_index'=>$h_index,
            'a_index'=>$a_index,
            'detailed'=>$detailed,
            'h_change'=>$h_change,
            'a_change'=>$a_change,
        );
        if($this->db->insert('r_getcontent_brand_sister2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌详情-》整体情况
    public function r_getcontent_brand_detail_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'h_index'=>$h_index,
            'a_index'=>$a_index,
            'p_one'=>$p_one,
            'change_rate'=>$change_rate,
        );
        if($this->db->insert('r_getcontent_brand_detail_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌详情-》品牌行业布
    public function r_getcontent_brand_detail_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'h_index'=>$h_index,
            'cate_deep'=>$cate_deep,
            'cate'=>$cate,
            'strike_pro'=>$strike_pro,
        );
        if($this->db->insert('r_getcontent_brand_detail_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //热销商家排行
    public function r_getcontent_brand_detail_3_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'h_index'=>$h_index,
            'shop_name'=>$shop_name,
            'shop_id'=>$shop_id,
            'air_index'=>$air_index,
            'h_top'=>$h_top,
        );
        if($this->db->insert('r_getcontent_brand_detail_3_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //热销商家排行 品牌详情-》热销商家商品
    public function r_getcontent_brand_detail_3_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'strike_index'=>$strike_index,
            'shop_name'=>$shop_name,
            'shop_id'=>$shop_id,
            'goods_name'=>$goods_name,
            'sku'=>$sku,
        );
        if($this->db->insert('r_getcontent_brand_detail_3_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌详情-》热销商品排行
    public function r_getcontent_brand_detail_4(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'strike_index'=>$strike_index,
            'shop_name'=>$shop_name,
            'price'=>$price,
            'goods_name'=>$goods_name,
            'sku'=>$sku,
            'goods_strike'=>$goods_strike,
        );
        if($this->db->insert('r_getcontent_brand_detail_4',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌详情-》买家购买分析
    public function r_getcontent_brand_detail_5(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'buy_frequency'=>$buy_frequency,
            'p_num'=>$p_num,
            'p_pro'=>$p_pro,
        );
        if($this->db->insert('r_getcontent_brand_detail_5',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //品牌详情-》买家特征分析
    public function r_getcontent_brand_detail_6(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'banrd'=>$banrd,
            'uv'=>$uv,
            'uv_pro'=>$uv_pro,
            'p_buy'=>$p_buy,
            'strike_pro'=>$strike_pro,
        );
        if($this->db->insert('r_getcontent_brand_detail_6',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //属性分析
    public function r_getcontent_attr(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'attribute'=>$attribute,
            'project'=>$project,
            'strike_index'=>$strike_index,
            'p_strike_index'=>$p_strike_index,
            'shop_num'=>$shop_num,
            'goods_num'=>$goods_num,
            'shop_ranking'=>$shop_ranking,
            'goods_ranking'=>$goods_ranking,
            'attribute_detail'=>$attribute_detail,
        );
        if($this->db->insert('r_getcontent_attr',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //属性详情-》属性值详情
    public function r_getcontent_attr_detail_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'goods_num'=>$goods_num,
            'strike_index'=>$strike_index,
            'p_strike_index'=>$p_strike_index,
            'shop_num'=>$shop_num,
        );
        if($this->db->insert('r_getcontent_attr_detail_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //属性详情-》热销店铺排行
    public function r_getcontent_attr_detail_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'shop_name'=>$shop_name,
            'strike_index'=>$strike_index,
            'p_strike_index'=>$p_strike_index,
            'shop_n'=>$shop_n,
        );
        if($this->db->insert('r_getcontent_attr_detail_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //属性详情-》热销商品排行
    public function r_getcontent_attr_detail_3(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'client'=>$client,
            'goods_name'=>$goods_name,
            'strike_index'=>$strike_index,
            'p_strike_index'=>$p_strike_index,
            'price'=>$price,
        );
        if($this->db->insert('r_getcontent_attr_detail_3',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //来源搜索词-》流量来源
    public function r_src_key_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'period'=>$period,
            'rate_src'=>$rate_src,
            'look_pro'=>$look_pro,
            'goods_l_n'=>$goods_l_n,
            'aver_look'=>$aver_look,
        );
        if($this->db->insert('r_src_key_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //来源搜索词-》热搜关键词
    public function r_src_key_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'period'=>$period,
            'h_s_key'=>$h_s_key,
        );
        if($this->db->insert('r_src_key_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //来源搜索词-》关联购买
    public function r_src_key_3(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'period'=>$period,
            'goods_name'=>$goods_name,
        );
        if($this->db->insert('r_src_key_3',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //类目关联热词
    public function r_cate_r_hot(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'h_s_key'=>$h_s_key,
            's_air'=>$s_air,
            's_index'=>$s_index,
            't_index'=>$t_index,
            't_rate'=>$t_rate,
            'strike_index'=>$strike_index,
            'c_rate'=>$c_rate,
        );
        if($this->db->insert('r_cate_r_hot',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业关键词-》行业热词top榜单
    public function r_getcontent_mate_hw_1_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'h_s_key'=>$h_s_key,
            's_air'=>$s_air,
            's_index'=>$s_index,
            't_index'=>$t_index,
            't_rate'=>$t_rate,
            'strike_index'=>$strike_index,
            'c_rate'=>$c_rate,
            'h_w_detail'=>$h_w_detail,
            'h_w_n'=>$h_w_n,
        );
        if($this->db->insert('r_getcontent_mate_hw_1_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业关键词-》行业热词飙升
    public function r_getcontent_mate_hw_1_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'interfix_w'=>$interfix_w,
            'h_w_detail'=>$h_w_detail,
            'h_w_n'=>$h_w_n,
            'soaring'=>$soaring,
        );
        if($this->db->insert('r_getcontent_mate_hw_1_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //行业关键词-》相关行业热词
    public function r_getcontent_mate_hw_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'interfix_w'=>$interfix_w,
            's_air'=>$s_air,
            's_index'=>$s_index,
            't_rate'=>$t_rate,
            'h_w_detail'=>$h_w_detail,
            'h_w_n'=>$h_w_n,
        );
        if($this->db->insert('r_getcontent_mate_hw_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //标题分析-》匹配热词
    public function r_getcontent_mate_hw1_1(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'goods_title'=>$goods_title,
            'h_w_name'=>$h_w_name,
            's_a'=>$s_a,
            's_index'=>$s_index,
            't_index'=>$t_index,
            't_ragte'=>$t_ragte,
            'strike_index'=>$strike_index,
            'rate_tra'=>$rate_tra,
            'interfix_w'=>$interfix_w,
            'h_w'=>$h_w,
        );
        if($this->db->insert('r_getcontent_mate_hw1_1',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //标题分析-》关联热词
    public function r_getcontent_mate_hw1_2(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'sku'=>$sku,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'cate3'=>$cate3,
            'period'=>$period,
            'goods_title'=>$goods_title,
            'h_w_name'=>$h_w_name,
            's_a'=>$s_a,
            's_index'=>$s_index,
            't_index'=>$t_index,
            't_ragte'=>$t_ragte,
            'h_w_detail'=>$h_w_detail,
        );
        if($this->db->insert('r_getcontent_mate_hw1_2',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //客户流失分析
    public function r_getcontent_client_run(){
        $data=array(
            'uid'=>$_SESSION['uid'],
            'time'=>$time,
            'client'=>$client,
            'total_v'=>$total_v,
            'spu'=>$spu,
            'period'=>$period,
            'direct'=>$direct,
            'indirect'=>$indirect,
            'nodirect'=>$nodirect,
            'other_direct'=>$other_direct,
            'nothing'=>$nothing,
            'goods_name'=>$goods_name,
            'sku'=>$sku,
            'under_shop'=>$under_shop,
            'jd_price'=>$jd_price,
            'buy_num'=>$buy_num,
        );
        if($this->db->insert('r_getcontent_client_run',$data)){
            echo '<font color="red">ok</font>';
        }
    }
    //经营概况  店铺整体经营概况
    public function r_getcontent_shop_general(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//---- 
            'time_section'=>$tiem_section,//时间段---
            'time'=>$time,//查询时间----
            'look_num'=>$look_num,//浏览量---
            'order_price'=>$order_price,//下单金额----
            //'unit_price'=>$unit_price,//
            //'shop_c_rate'=>$shop_c_rate,//店铺成交转化率
            //'turn_30'=>$turn_30,//访客数
            //'ground_spu'=>$ground_spu,//上架商品数量sku
            'v_num'=>$v_num,//访客数----
            'order_num'=>$order_num,//下单客户数-----
            //'f_p_rate'=>$f_p_rate,//先款付款率
            //'repeat_30'=>$repeat_30,//30日重复购买率
            //'ground_sku'=>$ground_sku,//上架商品数量sku
            //'goods_interest'=>$goods_interest,//商品关注量
            //'shop_interest'=>$shop_interest,//店铺关注量
            'order_total'=>$order_total,//下单单量------
            //'order_goods'=>$order_goods,//下单商品件数
        );
        if($this->db->insert('r_getcontent_shop_general',$data)){
            echo $this->db->insert_id();
        }
    }
    //pc经营状况   pc端经营概况
    public function r_pcmanage(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid
            'time'=>$time,//查询时间
            'time_section'=>$time_section,//时间段
            'look_num'=>$look_num,//浏览量
            'order_price'=>$order_price,//下单金额
            //'unit_price'=>$unit_price,//客单价
            //'shop_c_rate'=>$shop_c_rate,//店铺成交转化率
            //'turn_30'=>$turn_30,//30日客户回头率
            //'teturn_7'=>$teturn_7,//7日回访率
            //'repeat_30'=>$repeat_30,//30日重复购买率
            //'return_30'=>$return_30,//30日客户回头率
            //'v_p_num'=>$v_p_num,//访问次数
            'order_num'=>$order_num,//下单客户数
            'v_num'=>$v_num,//访客数
            'order_total'=>$order_total,//下单单量
            //'degree_ave'=>$degree_ave,//平均访问深度
            'order_goods_total'=>$order_goods_total,//下单商品件数
        );
        if($this->db->insert('r_pcmanage',$data)){
            echo $this->db->insert_id();
        }
    }
    //移动端经营概况-》移动端整体数据报表
    public function r_getcontent_shop_general_m_1(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'app_src'=>$app_src,//移动端来源
            'look_num'=>$look_num,//浏览量
            'v_num'=>$v_num,//访客数
            'order_price'=>$order_price,//下单金额
            'order_client'=>$order_client,//下单客户数
            'order_num'=>$order_num,//下单单量
            'order_g_num'=>$order_g_num,//下单商品件数
            'unit_price'=>$unit_price,//客单价
            'shop_strikp_pro'=>$shop_strikp_pro,//店铺成交转化率
        );
        if($this->db->insert('r_getcontent_shop_general_m_1',$data)){
            echo $this->db->insert_id();
        }
    }
    //移动端经营概况-》移动端时段分布报表  各个移动端来源的数据都存放这个表中
    public function r_getcontent_shop_general_m_2(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'time_part'=>$time_part,//时间段
            'look_num'=>$look_num,//浏览量
            'v_num'=>$v_num,//访客数
            'order_price'=>$order_price,//下单金额
            'order_client'=>$order_client,//下单客户数
            'order_num'=>$order_num,//下单单量
            'order_g_num'=>$order_g_num,//下单商品件数
            'source'=>$source//来源
        );
        if($this->db->insert('r_getcontent_shop_general_m_2',$data)){
            echo $this->db->insert_id();
        }
    }
    //实时概况
    public function r_getcontent_real(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'v_time'=>$v_time,//访问时间
            't_num'=>$t_num,//今日浏览量
            'tm_num'=>$tm_num,//昨日浏览量
            't_v_num'=>$t_v_num,//今日访问次数
            'tm_v_num'=>$tm_v_num,//昨是访问次数
            't_order_num'=>$t_order_num,//今日下单单量
            'tm_order_num'=>$tm_order_num,//昨日下单单量
            't_strike_num'=>$t_strike_num,//今日成交单量
            'tm_strike_num'=>$tm_strike_num,//昨日成交单量
            't_order_price'=>$t_order_price,//今日下单金额
            'tm_order_price'=>$tm_order_price,//昨日下单金额
            't_price'=>$t_price,//今日成交金额
            'tm_price'=>$tm_price,//昨日成交金额
            't_goods_num'=>$t_goods_num,//今日下单商品件数
            'tm_goods_num'=>$tm_goods_num,//昨日下单商品件数
            't_order_g_n'=>$t_order_g_n,//今日成交商品在件数
            'tm_order_g_n'=>$tm_order_g_n,//昨日成交商品件数
        );
        if($this->db->insert('r_getcontent_real',$data)){
            echo $this->db->insert_id();
        }
    }
    //实时访客
    public function r_getcontent_real_caller(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'v_time'=>$v_time,//访问时间
            'src_big_cat'=>$src_big_cat,//来源大类
            //'src_chil_cat'=>$src_chil_cat,//来源子类
            //'src_key'=>$src_key,//来源/关键词
            'v_p_title'=>$v_p_title,//被访页面标题
            //'v_herf'=>$v_herf,//访问链接
            'v_position'=>$v_position,//访客位置
            'v_num'=>$v_num,//访客名称
            'v_follow'=>$v_follow,//访客浏览量
            'source'=>$source1//来源
        );
        if($this->db->insert('r_getcontent_real_caller',$data)){
            echo $this->db->insert_id();
        }
    }
    //实时榜单
    public function r_getcontent_real_list(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id---
            'time'=>$time,//查询时间---
            'goods_name'=>$goods,//商品名称 ----
            'newly_time'=>$newly_time,//最近上架时间---
            'look_num'=>$look_num,//浏览量---
            //'v_num'=>$v_num,//访问次数
            'v_p_num'=>$v_p_num,//访客数---
            'order_goods_num'=>$order_goods_num,//下单商品件数---
            //'order_num'=>$order_num,//下单单量
            'order_price'=>$order_price,//下单金额----
            'order_p'=>$order_p,//下单客户数---
            'goods_change_rate'=>$goods_change_rate,//商品页成交转化率---
            //'sku'=>$sku,//sku
            'ranking'=>$ranking,//排名
            'terminal'=>$terminal,//访问来源
            'cate_trade'=>$cate_trade,//行业类目
            'cate_shop'=>$cate_shop,//店铺类目
        );
        if($this->db->insert('r_getcontent_real_list',$data)){
            echo $this->db->insert_id();
        }
    }
    //实时流量
    public function r_getcontent_real_rate_1(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'rank'=>$rank,//级别
            'src_look'=>$src_look,//流量来源
            'look_num'=>$look_num,//浏览量
            'look_pro'=>$look_pro,//浏览量占比
        );
        if($this->db->insert('r_getcontent_real_rate_1',$data)){
            echo $this->db->insert_id();
        }
    }
    //实时流量
    public function r_getcontent_real_rate_2(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'rank'=>$rank,//级别
            'rate_src'=>$rate_src,//流量来源
            'v_num'=>$v_num,//访客数
            'v_pro'=>$v_pro,//访客数占比 
        );
        if($this->db->insert('r_getcontent_real_rate_2',$data)){
            echo $this->db->insert_id();
        }
    }
    //商品统计
    public function r_getcontent_goods_count(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'client'=>$client,//终端类型
            'look_num'=>$look_num,//浏览量
            'v_p_num'=>$v_p_num,//访客数
            'v_num'=>$v_num,//访问次数
            'shop_follow'=>$shop_follow,//店铺关注量
            'goods_follow'=>$goods_follow,//商品关注量
            'order_price'=>$order_price,//下单金额
            'order_p'=>$order_p,//下单客户数
            'p_price'=>$p_price,//客单价
            'order_num'=>$order_num,//下单单量
            'order_goods_num'=>$order_goods_num,//下单商品数
            'shop_rate'=>$shop_rate,//店铺成交转化率
            'f_pay_rate'=>$f_pay_rate,//先款付款率
        );
        if($this->db->insert('r_getcontent_goods_count',$data)){
            echo $this->db->insert_id();
        }
    }
    //销售明细
    public function r_getcontent_detail_s(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'client'=>$client,//终端类型
            'goods_name'=>$goods_name,//商品名称
            'sku_or_spu'=>$sku_or_spu,//sku/spu
            'trend'=>$trend,//趋势分析
            'cate2_id'=>$cate2_id,//二级类目 id
            'cate3_id'=>$cate3_id,//三级类目id    
            'cate2_name'=>$cate2_name,//二级类目名称
            'cate3_name'=>$cate3_name,//三级类目名称
            'v_deep'=>$v_deep,//访问深度
            'cate_t_num'=>$cate_t_num,//类目点击次数
            'v_num'=>$v_num,//访问次数
            'order_goods_num'=>$order_goods_num,//下单商品数
            'page_stip_rate'=>$page_stip_rate,//页面跳出率
            'goods_rate'=>$goods_rate,//商品页成交转换率
            'goods_follow_num'=>$goods_follow_num,//商品关注 量
            'v_p_num'=>$v_p_num,//访客数
            'comment_num'=>$comment_num,//评论次数
            'good_num'=>$good_num,//好评数
            'uv_price'=>$uv_price,//uv价值
            'order_p_num'=>$order_p_num,//下单客户数
            's_t_num'=>$s_t_num,//热搜点击次数
            'ave_price'=>$ave_price,//平均价格
            'good_rate'=>$good_rate,//好评率
            'v_page_num'=>$v_page_num,//浏览量
            'order_total'=>$order_total,//下单单量 
            'nearly_time'=>$nearly_time,//最近上架时间
        );
        if($this->db->insert('r_getcontent_detail_s',$data)){
            echo $this->db->insert_id();
        }
    }
    //商品趋势分析
    public function r_getcontent_trend(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//查询时间
            'time'=>$time,//时间
            'client'=>$client,//终端类型
            'goods_name'=>$goods_name,//商品名称
            'sku_or_spu'=>$sku_or_spu,//sku/spu
            'goods_n'=>$goods_n,//货号
            'cate2_id'=>$cate2_id,//二级类目 id
            'cate2_name'=>$cate2_name,//二级类目名称
            'cate3_id'=>$cate3_id,//三级类目id
            'cate3_name'=>$cate3_name,//三级类目名称
            'nearly_time'=>$nearly_time,//最近上架时间
            'v_page_num'=>$v_page_num,//浏览量
            'v_num'=>$v_num,//访问次数
            'v_p_num'=>$v_p_num,//访客数
            'cate_t_num'=>$cate_t_num,//类目点击次数
            'v_deep'=>$v_deep,//访问深度
            's_t_num'=>$s_t_num,//搜索点击次数
            'page_stip_rate'=>$page_stip_rate,//页面跳出率
            'ave_stop_time'=>$ave_stop_time,//平均停留时间
            'goods_follow_num'=>$goods_follow_num,//商品关注 量
            'gomment_num'=>$gomment_num,//评论数
            'good_rate'=>$good_rate,//好评率
            'good_num'=>$good_num,//好评数
            'order_p_num'=>$order_p_num,//下单客户数
            'order_total'=>$order_total,//下单单量 
            'order_goods_num'=>$order_goods_num,//下单商品数
            'goods_rate'=>$goods_rate,//商品页成交转换率
            'order_price'=>$order_price,//下单金额
            'vu_price'=>$vu_price,//UV价值
            'ave_price'=>$ave_price,//平均价格
        );
        if($this->db->insert('r_getcontent_trend',$data)){
            echo $this->db->insert_id();
        }
    }
    //销量分析-》访问次数汇总
    public function r_getcontent_sales_analyse_1(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'time_period'=>$time_period,//时间周期
            'v_num'=>$v_num,//访问次数
            'v_total'=>$v_total,//访问量
            'v_p_num'=>$v_p_num,//访客数
            'order_num'=>$order_num,//下单件数 
            'order_price'=>$order_price,//下单金额
        );
        if($this->db->insert('r_getcontent_sales_analyse_1',$data)){
            echo $this->db->insert_id();
        }
    }
    //销量分析-》按下单件数汇总
    public function r_getcontent_sales_analyse_2(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'time_period'=>$time_period,//时间周期
            'order_num'=>$order_num,//下单件数 
            'ground_goods_num'=>$ground_goods_num,//上架商品数量
            'v_num'=>$v_num,//访问次数
            'v_total'=>$v_total,//访问量
            'v_p_num'=>$v_p_num,//访客数
            'order_price'=>$order_price,//下单金额
        );
        if($this->db->insert('r_getcontent_sales_analyse_2',$data)){
            echo $this->db->insert_id();
        }
    }
    //订单明细
    public function r_getcontent_order_detail(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'sku'=>$sku,//SKU
            'client'=>$client,//client
            'pay_way'=>$pay_way,//支付方式
            'order_id'=>$order_id,//订单id
            'price'=>$price,//商品价格
            'order_num'=>$order_num,//下单商品件数
            'favor'=>$favor,//优僡金额
            'transporation'=>$transporation,//运费
            'order_price'=>$order_price,//下单金额
            'order_total'=>$order_total,//下单单量
            'order_time'=>$order_time,//下单时间
            'pay_time'=>$pay_time,//付款时间
            'pay_type'=>$pay_type,//付款方式
        );
        if($this->db->insert('r_getcontent_order_detail',$data)){
            echo $this->db->insert_id();
        }
    }
    //流量概况
    public function r_getcontent_rate_general(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'cate'=>$cate,//分类
            'v_num'=>$v_num,//浏览量
            'pro'=>$pro,//占比 
            'quantum'=>$quantum,//时间段
            'q_v_num'=>$q_v_num,//浏览量
            'v_frequency'=>$v_frequency,//访问次数
            'v_p_num'=>$v_p_num,//访客数
        );
        if($this->db->insert('r_getcontent_rate_general',$data)){
            echo $this->db->insert_id();
        }
    }
    //小时流量分析
    public function r_getcontent_hour_analyse(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'v_p_num'=>$v_p_num,//v_p_num
            'v_num'=>$v_num,//v_num
            'ave_stop_time'=>$ave_stop_time,//ave_stop_time
        );
        if($this->db->insert('r_getcontent_hour_analyse',$data)){
            echo $this->db->insert_id();
        }
    }
    //按天流量分析
    public function r_getcontent_day_rate(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'v_num'=>$v_num,//浏览量
            'v_p_num'=>$v_p_num,//访客数
            'ave_v_deep'=>$ave_v_deep,//平均访问深度
            'stip_rate'=>$stip_rate,//跳失率
            'return_7'=>$return_7,//7日回访率
        );
        if($this->db->insert('r_getcontent_day_rate',$data)){
            echo $this->db->insert_id();
        }
    }
    //流量来源
    public function r_getcontent_rate_source(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'time_part'=>$time_part,//时间段
            's_type'=>$s_type,//查询类型
            'src'=>$src,//来源
            'arrive_num'=>$arrive_num,//到达页面浏览量
            'num'=>$num,//浏览量
            'num_pro'=>$num_pro,//浏览量占比
            'trend_analyse'=>$trend_analyse,//趋势分析
            'src_total'=>$src_total,//来源统计
            'key_analyse'=>$key_analyse,//关键词分析
        );
        if($this->db->insert('r_getcontent_rate_source',$data)){
            echo $this->db->insert_id();
        }
    }
    //访客来源
    public function r_getcontent_rate_visitor(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            's_type'=>$s_type,//查询类型
            'src'=>$src,//流量来源
            'v_p_num'=>$v_p_num,//访客数
            'v_num'=>$v_num,//访问次数
            'v_deep'=>$v_deep,//平均访问深度
            'stip_rate'=>$stip_rate,//跳失率
            'trend_analyse'=>$trend_analyse,//趋势分析
            'src_total'=>$src_total,//来源统计
            'key_analyse'=>$key_analyse,//关键词分析
        );
        if($this->db->insert('r_getcontent_rate_visitor',$data)){
            echo $this->db->insert_id();
        }
    }
    //来源成交-》关键词列表
    public function r_getcontent_resource_strike(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'time_part'=>$time_part,//时间段
            'src_ditch'=>$src_ditch,//来源渠道
            'src_ditch_trend'=>$src_ditch_trend,//来源成交趋势
            'src_url'=>$src_url,//来源成交分析url
            'order_num'=>$order_num,//列表
            'order_price'=>$order_price,//下单金额
            'order_total'=>$order_total,//下单单量
            'detail'=>$detail,//成效明细
        );
        if($this->db->insert('r_getcontent_resource_strike',$data)){
            echo $this->db->insert_id();
        }
    }
    //关键词分析-》商品列表
    public function r_getcontent_key_analyse_1(){
        //把post传入的键转为变量，值为键对应的值
        $arr=$this->input->post();
        $arr1=array();
        foreach($arr as $k=>$v){
            ${$k}=$v;
        }
        $data=array(
            'uid'=>$_SESSION['uid'],//uid 用户id
            'time'=>$time,//查询时间
            'sku'=>$sku,//sku
            'time_part'=>$time_part,//时间段
            'goods_page'=>$goods_page,//商品页
            't_num'=>$t_num,//点击量
            'order_num'=>$order_num,//直接下单单量
            'order_price'=>$order_price,//直接下单金额
            'rate'=>$rate,//转化率
            'spu'=>$spu,//spu
        );
        if($this->db->insert('r_getcontent_key_analyse_1',$data)){
            echo $this->db->insert_id();
        }
    }
}
