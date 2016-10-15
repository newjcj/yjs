<?php
class Yjs extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','userdb');
        session_start();
        //加载自定义类panjson获取数据  @data()获取数据数据
        $params1=array(
                'thor'=>$_SESSION['thor'],
                'rurl'=>'',
                'zz'=>'',
                'method'=>'get',
                'fields'=>''//可以空
            );
        $this->load->library('panjson',$params1);//初始化加载自己的类panjson
        //加载京东api类
        if(!empty($_SESSION['token_em'])){
            $attr=array(
           //     'token'=>$_SESSION['token_em'],
                'access_token'=>$_SESSION['token_em'],
                'app_key'=>'5C89FB56CEB21A85EB6A8A0043304F10',
                'app_secret'=>'b81e7718c3ea4c4791a4da59e14088b1',
                'timestamp'=>date("Y-m-d H:i:s",time()-3),
                'v'=>'2.0',
            );
        }else{
            $attr=array(
           //     'token'=>$_SESSION['token_em'],
                //'access_token'=>$_SESSION['token_em'],
                'app_key'=>'5C89FB56CEB21A85EB6A8A0043304F10',
                'app_secret'=>'b81e7718c3ea4c4791a4da59e14088b1',
                'timestamp'=>date("Y-m-d H:i:s",time()-3),
                'v'=>'2.0',
            );
        }
        $this->load->library('jdapi',$attr);
        //加载jd抢搜索类
        $this->load->library('search');

    }
    public function index(){
        $data=$this->search->spuTosku(array(1096484862,1151715189,1197710737,1197724773));echo $data;exit;
        $data=$this->search->getContent_real_data('6182','13215',1);P($data);exit;
        $data=$this->search->getContent_real_condition();;exit;
        /*$arr=array(492788,1297518,2317265,853085,2142561);
        $data=$this->search->getPrice_c($arr);echo $data;exit;*/
        //$arr=array(10114503124,10448206086,10513405535,1574168656,10572356017,10128070248);
        $arr=array(492788,1297518,2317265,853085,2142561);
        $data=$this->search->getAccess_c($arr);echo $data;exit;
        $data=$this->search->pageContent('http://list.jd.com/list.html?cat=9987,653,655',1,1);echo $data;exit;
        $data=$this->search->getContent_brand_detail_1('830','','133787',7,1);P($data);exit;
        $data=$this->search->getContent_real_caller('999999','999999','all',1);P($data);exit;
        $data=$this->search->getContent_attr_hgoods('12093','85142','538584',1,7,"d:BargainIndex desc");P($data);exit;
        $data2=$this->search->getContent_shop_general_app("2016-08-24");P($data2);exit;
        $data=$this->search->getContent_shop_general_pc("2016-08-24");P($data);exit;
        $data1=$this->search->getContent_time_feature('794','798',7,2);P($data1);exit;
        $data=$this->search->getContent_rword('5026','',7,1);exit;
        $data=$this->search->getContent_hword('5026','',7,1);exit;
        $data=$this->search->getContent_mate_key_detail('国表','情侣手表',7,1);P($data);echo $data['SearchPopularity']['TimeID']['value'][2];exit;
        $data=$this->search->getContent_mate_hw('1861098',7,1);P($data);exit;
        
        $data=$this->search->getContent_attr_detail('12091','85549','541062',1,7);exit;
        $data=$this->search->getContent_attr('12091','85540',7,1,"d:BargainIndex desc",20);P($data);exit;
        $data=$this->search->getContent_trade_buy('5026','999999',7,1);exit;
        $data=$this->search->getContent_trade_h_related('10430067186',7,1);exit;
        /*$data=$this->search->getContent_related('牛肉');exit;
        $data=$this->search->getContent_key_goods('','-390033960');exit;
        $data=$this->search->getContent_resource_strike('');exit;*/

        /*$data=$this->search->getContent_visitor_data('');exit;
        $data=$this->search->getContent_rate_data('');exit;
        $data=$this->search->getContent_rate_source('');exit;
        $data=$this->search->getContent_day_rate_contrast('');exit;
        $data=$this->search->getContent_day_rate('');exit;
        $data=$this->search->getContent_hour_analyse_contrast('');exit;
        $data=$this->search->getContent_hour_analyse('2016-07-11');exit;
        $data=$this->search->getContent_rate_general('');exit;
        $data=$this->search->getContent_order_detail('');exit;
        $data=$this->search->getContent_sales_analyse('');exit;
        $data=$this->search->getContent_trend('2016-07-20',999999,999999,999999,'',999999,'',3,"true",10023622506);exit;//参数    日期    类目2      类目 3    indu类目1  indu类目2  shop类目1   shop类目2  行业分类     店铺分类
        $data=$this->search->getContent_detail_s('2016-07-20',999999,999999,999999,'',999999,'',2,"true");exit;//参数    日期    类目2      类目 3    indu类目1  indu类目2  shop类目1   shop类目2  行业分类     店铺分类
        //echo $this->search->dtime;exit;
        $data=$this->search->getContent_goods_count(20169922,1);exit;
        $data=$this->search->getContent_real_num();exit;
        $data=$this->search->getContent_real_rate();exit;
        $data=$this->search->getContent_real_list('999999','999999','7',1);exit;
        $data=$this->search->getContent_real_caller('999999','999999');exit;
        $data=$this->search->getContent_real_2(1);exit;
        $data=$this->search->getContent_shop_general('7');exit;
        $data=$this->search->getContent_client_run('10106700334',7,2);exit;
        $data=$this->search->get_spu('10106700334',7,2);exit;
        $data=$this->search->getContent_mate_hw('10128868491',7,1);exit;
        $data=$this->search->get_mate_hw_title_key('10128868491',7,1);exit;
        $data=$this->search->getContent_attr_hgoods('12091','85549','541062',2,7,"d:BargainIndex desc");exit;
        //$data=$this->search->getContent_attr_detail('12091','85549','541062',1,7);exit;
        $data=$this->search->getContent_attr_detail_1('12091','85549','541062',1,7,"_row_2 asc");exit;
        $data=$this->search->getContent_attr('12091','85540',7,1,"d:BargainIndex desc",20);exit;
        $data=$this->search->getContent_brand_detail_6('5026','','4925',7,2);exit;
        $data=$this->search->getContent_brand_detail_5('5026','','4925',7,2);exit;
        $data=$this->search->getContent_brand_detail_4('5026','','4925',7,2);exit;
        $data=$this->search->getContent_brand_detail_3('5026','','4925',7,5);exit;
        $data=$this->search->getContent_brand_detail_2('4925',7,1);exit;
        $data=$this->search->getContent_brand_detail_1('5026','','4925',7,1);exit;
        $data=$this->search->getContent_brand_sister('5026','',7,1);exit;
        $data=$this->search->getContent_rword('5026','',7,1);exit;
        $data=$this->search->getContent_hword('5026','',7,1);exit;
        $data=$this->search->getContent_sister('5026',7,1);exit;
        $data=$this->search->getContent_trade_feature('5026','999999',7,1);exit;
        $data=$this->search->getContent_trade_buy('5026','999999',7,1);exit;
        $data=$this->search->getContent_trade_h_k('10204875346',7,1,2);exit;
        $data=$this->search->getContent_trade_rise('13297',7,1,2);exit;
        $data=$this->search->getContent_trade_h_related('10430067186',7,1);exit;
        $data=$this->search->getContent_trade_h_k('10430067186',7,1);exit;
        $data=$this->search->getHotGoods_trade('13297',7,1);exit;
        $data=$this->search->getDetail_trade('34755',7,1);exit;
        $data=$this->search->getContent_trade_h('13297',7,1);exit;
        $data=$this->search->getContent_trade('13297','13298',3,1);exit;
        $data=$this->search->getContent_shop_base('17369',1,1,3);exit;
        $data=$this->search->getContent_assess('2565154',1,2);echo $data;exit;
        $data=$this->search->getContent_brand('三只松鼠',1,2);P($data);exit;
        $data=$this->search->getContent_shop('东来顺自营旗舰店',1,2);P($data);exit;
        $data=$this->search->getContent_word('牛肉',1);P($data);exit;
        $data=$this->search->getContent_j('牛肉',1,1,2,1733331563);P($data);exit;
        $data=$this->search->getContent_w('牛肉',2,1,3,2213992);exit;
        $data=$this->search->getContent_a('牛肉',5,1,2866171);P($data);exit;//app端搜索
        $data=$this->search->getContent_a("牛肉",5);P($data);exit;//关键词   页数   sku*/
        //$data=$this->search->getContent_c("http://list.jd.com/list.html?cat=9987,653,655",1,1,'0',3,2025574);P($data);exit;
        $data=$this->search->getContent_p('老鸭',6,1,3,10479094983);P($data);exit;
        //$this->userdb->get_authority(1,5);//用户使用商品的权限管理
        P($_SESSION);
        //获取浏览量，访客数，
        $rurl='https://pop.jd.com/shopAnalysis/getProStaticResult.action';
        $zz='';//$zz='resultData[\s\S]*?PV[\s\S]*?([\d]+)[\s\S]*?UV[\s\S]*?(\d+)';
        $fields=array('filter.date'=>'2016-06-29','filter.isMergeSKU'=>true);//post方式所传递的fields
        $data=$this->panjson->data($rurl,$zz,'post',$fields);//返回匹配到的数据
        //echo $data."<br><br>";

        //获取浏览量，访客数（站外，京东付费，京东免费，直接访问）
        $rurl='https://pop.jd.com/advancedDataModel/getViewFlowResult.action';
        $zz='';//$zz='ArrivePagePV[\s\S]*?\[([\d,]*)\]';
        $fields=array('filter.startDate'=>'2016-06-29','filter.endDate'=>'2016-06-29');//post方式所传递的fields
        $data=$this->panjson->data($rurl,$zz,'post',$fields);//返回匹配到的数据
        echo stripslashes($data); //去掉转义符
    }
    //获取类目
    public function getCate(){
        //用户授权京东
        if(!isset($_SESSION['token_em']) || $_SESSION['token_em']==''){
            redirect('loginjd/empower');
        }
        //访问京东api返回json数据，分配给视图
        $cateid=$this->input->post('cateid');
        if(isset($cateid)){
            $sysarr=array(//api接口
                //'method'=>'jingdong.dsp.kc.usertag.get',//整个类目数
                'method'=>'jingdong.category.read.findByPId'//子类目列表
                );
            $myarr=array(//应用参数
                'parentCid'=>$cateid,
                );
            $data=$this->jdapi->getJson($sysarr,$myarr);//api接口数组   应用参数数组
            echo $data;exit;//$data=json_decode($data,1);
        }
    }
    public function getCate1(){
        $data=$this->search->getBrandList('9987','830','862');
        //$data=json_decode($data,1);
        //P($data);exit;
        die($data);
    }
    //获取品牌
    public function getBrand(){
        $brandid=$this->input->post('brandid');
        $cate1=$this->input->post('cate1');//
        $cate2=$this->input->post('cate2');//
        $cate3=$this->input->post('cate3');//
        $data=$this->search->getBrandList($cate1,$cate2,$cate3);
        echo $data;
    }
    //获取属性
    public function getAttribute(){
        //$attrid=$this->input->post('attrid');
        $cate3=$this->input->post('cate3');//
        if(isset($cate3)){
            $sysarr=array(//api接口
                'method'=>'jingdong.category.read.findAttrsByCategoryId'//
                );
            $myarr=array(//应用参数
                'cid'=>$cate3,
                );
            $data=$this->jdapi->getJson($sysarr,$myarr);//api接口数组   应用参数数组
            echo $data;exit;
            //$data=json_decode($data,1);P($data);
        }
    }
    //获取属性值
    public function getAttributeList(){
        $attr=$this->input->post('attr');
        //$attr=1001028342;
        if(isset($attr)){
            $sysarr=array(//api接口
                'method'=>'jingdong.category.read.findValuesByAttrIdJos',//
                );
            $myarr=array(//应用参数
                'categoryAttrId'=>$attr,
                );
            $data=$this->jdapi->getJson($sysarr,$myarr);//api接口数组   应用参数数组
            echo $data;exit;
            //$data=json_decode($data,1);P($data);
        }
    }
    //店铺流量概况->店铺经概况
    public function rate(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //分配时间
        if($this->input->get('sdate') && strtotime($this->input->get('sdate'))<=time()-3600*24){
            $date=$this->input->get('sdate');
        }else{
            $date=date("Y-m-d",time()-3600*24);
        }
        $dates=array("date1"=>$date);
        $date1=json_encode($dates);
        $data=$this->search->getContent_shop_general($date);//  日期
        $data1=$this->search->getContent_shop_general_pc($date);//  pc
        $data2=$this->search->getContent_shop_general_app($date);//  app
        $this->load->vars('data',$data);
        $this->load->vars('data1',$data1);
        $this->load->vars('data2',$data2);
        $this->load->vars('date1',$date1);//时间传递到view
        $this->load->view('yjs/rate');
    }
    public function show_rate(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //分配时间
        if($this->input->get('sdate') && strtotime($this->input->post('sdate'))<=time()-3600*24){
            $date=$this->input->post('sdate');
        }else{
            $date=date("Y-m-d",time()-3600*24);
        }
        $method='';
        $method=$this->input->post('method');
        $dates=array("date1"=>$date);
        $date1=json_encode($dates);
        $data2=$this->search->getContent_shop_general_app($date);//  日期
        $this->load->vars('data2',$data2);
        $this->load->vars('method',$method);
        $this->load->vars('date1',$date1);//时间传递到view
        $this->load->vars('method',$method);//来源
        $this->load->view('yjs/show_rate');
    }
    //店铺流量概况
    public function rate2(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //分配时间
        if($this->input->get('sdate') && strtotime($this->input->get('sdate'))<=time()-3600*24){
            $date=$this->input->get('sdate');
        }else{
            $date=date("Y-m-d",time()-3600*24);
        }
        echo $this->input->post('num');
        $dates=array("date1"=>$date);
        $date1=json_encode($dates);
        $data1=$this->search->getContent_real_1(1);//实时流量
        $this->load->view('yjs/rate2',array(
                'date1'=>$date1,//分配时间
                'data1'=>$data1,
            ));
    }
    //店铺流量概况
    public function rate2_1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //分配时间
        if($this->input->get('sdate') && strtotime($this->input->get('sdate'))<=time()-3600*24){
            $date=$this->input->get('sdate');
        }else{
            $date=date("Y-m-d",time()-3600*24);
        }
        $method = $this->input->post('method');
        $dates=array("date1"=>$date);
        $date1=json_encode($dates);
        $data1=$this->search->getContent_real_1($method);//实时流量
        $data1=json_encode($data1);
        echo $data1;
    }
    //实时访客
    public function rate3(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //分配时间
        if($this->input->get('sdate') && strtotime($this->input->get('sdate'))<=time()-3600*24){
            $date=$this->input->get('sdate');
        }else{
            $date=date("Y-m-d",time()-3600*24);
        }
        $cate=$this->input->get('cate1');
        $method1=$this->input->get('method1');
        $method1==''? $method1=1:$method1=$method1;
        $method=$this->input->get('method');
        if($method!='all'){
            $method=$this->input->get('url');
        }
        @list($cate1,$cate2)=split('-',$cate,2);
        $url=$this->input->get('url');
        $dates=array("date1"=>$date);
        $date1=json_encode($dates);
        $data=$this->search->getContent_real_caller($cate1,$cate2,$vurl="all",$method1);//流量来源类目1    流量来源类目2    访问的页面的url(默认all)    访问设备来源 
        //echo $method;exit;
        //$data=$this->search->getContent_real_caller(0,68,$method,1);//实时访客
        $this->load->vars('date1',$date1);//时间传递到view
        $this->load->view('yjs/rate3',array(
                'data'=>$data,
                'cate'=>$cate,
                'url'=>$url,
            ));
    }
    //实时访客
    public function rate3_json(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $dates=array("date1"=>$date);
        $souid1=$this->input->post('souid1');
        $souid2=$this->input->post('souid2');
        $url=$this->input->post('url');
        $method=$this->input->post('method');
        $data=$this->search->getContent_real_caller($souid1,$souid2,$url,$method);//流量来源类目1    流量来源类目2    访问的页面的url(默认all)    访问设备来源 
        //$data=$this->search->getContent_real_caller('999999','999999','all',1);//实时访客
        echo $data;exit;
    }
    //实时流量来源
    public function related_real_src(){
        $method1=$this->input->get('method1');
        if($method1==''){
            $method1='1';
        }
        $cate1=$this->input->get('cate1');
        if($cate1==''){
            $cate1='999999';
        }
        $cate2=$this->input->get('cate2');
        if($cate2==''){
            $cate2='999999';
        }
        $method=$this->input->get('method');
        if($method==''){
            $method='1';
        }
        $data=$this->search->getContent_real_condition();
        //取得查询的trade,shop
        //P($data);
        foreach($data[0] as $k=>$v){
            if($v['value']==$cate2){
                $trade=$v['fullNameShow'];
                break;
            }else{
                $trade='';
            }
        }
        foreach($data[1] as $k=>$v){
            if($v['value']==$cate2){
            $shop=$v['fullNameShow'];
            break;
            }else{
                $shop='';
            }
        }
        $data1=$this->search->getContent_real_data($cate1,$cate2,$method,'',$method1);
        //获取sku
        $skus=$this->search->spuTosku($data1['detail']['ProNum']['value']);
        $data1['sku']=$skus['SKUIDS']['value'];
        //$data1=$this->search->getContent_real_data(6182,13215,1);
        $this->load->view('yjs/related_real_src',array(
            'data'=>$data,
            'cate1'=>$cate1,
            'cate2'=>$cate2,
            'data1'=>$data1,
            'trade'=>$trade,
            'method'=>$method,
            'shop'=>$shop,
            'method1'=>$method1,
        ));
    }
    //引流词分析
    public function related(){
        if($this->input->get('key')){
            $key=$this->input->get('key');
        }else{
            $key='';
        }
        $data=$this->search->getContent_related($key);//获取查询的数据
        if(!$data || !isset($data[1])){
            $data=array();
            $item='';
        }else{
            $item='';
            foreach($data as $key=>$value){
                if($key==0){
                    continue;
                }
                $item.="{value:{$value['otherAttr']['tipNumber']}, name:'{$value['text']}'},";
            }
            $item=rtrim($item,',');
            //echo $item;exit;
        }
        $this->load->vars('data',$data);
        $this->load->vars('item',$item);
        $this->load->view('yjs/related');
    }
    public function related_shop(){
        $rurl='http://search.jd.com/Search?keyword=sd&enc=utf-8';
        //$rurl = 'https://s.taobao.com/search?q=sd&imgfile=&commend=all&ssid=s5-e&search_type=item&sourceId=tb.index&spm=a21bo.50862.201856-taobao-item.1&ie=utf8&initiative_id=tbindexz_20160704';
        $zz='';
        $data=$this->panjson->data($rurl,$zz,'get');
        //$this->load->view('yjs/related_shop');
        //preg_match('/data-s[\s\S]{1000}/',$data,$arr);
        //P($arr);
        echo "暂不能访问";
    }
    //pc端搜索排名查询
    public function related_ranking(){
        //$data=$this->search->getContent_p('牛肉干',1,1,3,10479094983);
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $page=$this->input->get('page');//单页查询第几页
        $num=$this->input->get('num');//多页查询前几页
        $sku=$this->input->get('sku');//指定的sku
        $data=$this->search->getcontent_p($key,$method,$page,$num,$sku);
        $this->load->view('yjs/related_ranking',array(
                'data'=>$data
            ));
    }
    //京东授权
    public function related_ranking1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //用户授权京东
        if(!isset($_SESSION['token_em']) || $_SESSION['token_em']==''){
            redirect('loginjd/empower');
        }
        //访问京东api返回json数据，分配给视图
        $sysarr=array(//api接口
            'method'=>'jingdong.ware.search'
            //'method'=>'jingdong.ware.search'
            );
        $myarr=array(//应用参数
            'key'=>'sd',
            'filt_type'=>'',
            'area_ids'=>'',
            'sort_type'=>'',
            'page'=>'',
            );
        $apijson=$this->jdapi->getJson($sysarr,$myarr);//api接口数组   应用参数数组
        //$apiurl=addslashes($apiurl);
        //echo $apijson;exit;
        $arr=json_decode($apijson,true);
        P($_SESSION);exit;
        $paragraph=$arr['jingdong_ware_search_responce']['Paragraph'];
        $warename=array();//$warename(搜索的商品名称)
        $wareid=array();//$warename(搜索的商品uid)
        $price=array();//$price(搜索的商品价格)
        for($i=0;$i<count($paragraph);$i++){
            $warename[$i]=$paragraph[$i]['Content']['warename'];
            $wareid[$i]=$paragraph[$i]['wareid'];
        }
        //P($wareid);exit;
        //获取搜索商品的价格
        for($i=0;$i<count($wareid);$i++){
            $sys=array('method'=>'jingdong.ware.price.get');
            $my=array('sku_id'=>"J_".$wareid[$i]);
            $wjson=json_decode($this->jdapi->getJson($sys,$my),true);
            $price[$i]=$wjson['jingdong_ware_price_get_responce']['price_changes'][0]['price'];
            //$price[$i]=$wjson['jingdong_ware_price_get_responce']['price_changes']['price'];
        }
        P($price);exit;//$warename(搜索的商品名称)
        //P($arr['jingdong_ware_search_responce']['Paragraph']['0']['Content']['warename']);exit;
        $arr=array(
            'api'=>$apijson,
            );
        //$this->load->vars('api',$apiurl);
        $this->load->view('yjs/related_ranking',$arr);
    }
    //pc类目排名
    public function related_cate_pc(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //用户授权京东
        /*if(!isset($_SESSION['token_em']) || $_SESSION['token_em']==''){
            redirect('loginjd/empower');
        }*/
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $page=$this->input->get('page');//单页查询第几页
        $num=$this->input->get('num');//多页查询前几页
        $sku=$this->input->get('sku');//指定的sku
        $priceok=$this->input->get('priceok');//指定的sku
        $cate1=$this->input->get('cate1');
        $cate2=$this->input->get('cate2');//单页查询第几页
        $cate3=$this->input->get('cate3');//单页查询第几页
        //$data=$this->search->getcontent_c($cate1,$cate2,$cate3,$method,$page,1,$num,$sku);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        $data=$this->search->getcontent_c(9987,653,655,$method,$page,1,$num,$sku);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        //$data=$this->search->getcontent_c("http://list.jd.com/list.html?cat=9987,653,655",1,1,'1',2,2025574);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        //$data=$this->search->getcontent_c($cate1,$cate2,$cate3,1,1,'1',2,2025574);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        //P($data);exit;
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }
        $this->load->view('yjs/related_cate_pc',array(
                'data'=>$data
            ));
    }
    //移动app搜索排名
    public function related_cate_app(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $page=$this->input->get('page');//单页查询第几页
        $num=$this->input->get('num');//多页查询前几页
        $sku=$this->input->get('sku');//指定的sku
        $priceok=$this->input->get('priceok');//指定的sku
        //$data=$this->search->getcontent_c($key,$method,$page,1,$num,$sku);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        $data=$this->search->getcontent_a($key,$num,$method,$sku);//关键词   页数   搜索模式   sku 2866171
        //P($data);exit;
        $this->load->view('yjs/related_cate_app',array(
                'data'=>$data
            ));
    }
    //微信端搜索排名
    public function related_cate_w(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $page=$this->input->get('page');//单页查询第几页
        $num=$this->input->get('num');//多页查询前几页
        $sku=$this->input->get('sku');//指定的sku
        //$priceok=$this->input->get('priceok');//指定的sku
        //$data=$this->search->getcontent_c($key,$method,$page,1,$num,$sku);// 参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        $data=$this->search->getcontent_w($key,$method,$page,$num,$sku);// 参数   1.查询词  2.查询模式    3.页数   4.总页数   5.sku
        //P($data);exit;
        $this->load->view('yjs/related_cate_w',array(
                'data'=>$data
            ));
    }
    //排名监测->类目排名监测
    public function related_cate_survey(){
        $this->load->view('yjs/related_cate_survey');
    }
    //排名监测->搜索排名监测
    public function related_search_survey(){
        $this->load->view('yjs/related_search_survey');
    }
    //易金商行业分析----------------------------------------------------------------------------
    //行业分析
    public function related_trade(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');
        $cate2=$this->input->get('cate2');//单页查询第几页
        $cate3=$this->input->get('cate3');//单页查询第几页
        $date=$this->input->get('date');//指定的sku
        $data=$this->search->getcontent_trade($cate2,$cate3,$method,$date);//参数  1.类目2  2.类目3   4.搜索模式  5.日期
        //P($data);exit;
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }
        $this->load->view('yjs/related_trade',array(
                'data'=>$data,
                'date1'=>$date1
            ));
    }
    //行业整体分析-》热销商家排行
    public function related_hot_shop_ranking(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION['uid']);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        //$cate3=$this->input->get('cate3');//单页查询第几页
        $date=$this->input->get('date');//指定的sku
        //$data=$this->search->getContent_trade_h($cat2,$date,$method=1,$method_1=1);// 参数 1.二级类目   2.日期  3.搜索模式   4.报表类别
        $data=$this->search->getContent_trade_h($cate2,$date,$method,1);
        $data1=$this->search->getContent_trade_h($cate2,$date,$method,2);
        $data2=$this->search->getContent_trade_h($cate2,$date,$method,3);
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }
        if($this->input->post('shopid')!=""){
            $shop_id=$this->input->post('shopid');
            $method_p=$this->input->post('method');
            $date_p=$this->input->post('date');
            $detail=$this->search->getDetail_trade($shop_id,$date_p,$method_p);//店铺id   日期    搜索模式
            //$detail=$this->search->getDetail_trade(124803,15,1);//店铺id   日期    搜索模式
            $detail=json_encode($detail);
            echo $detail;exit;

        }
        
        $rarr=array();
        $rarr[]=$data;
        $rarr[]=$data1;
        $rarr[]=$data2;
        //P($detail);exit;
        $this->load->view('yjs/related_hot_shop_ranking',array(
                'data'=>$rarr,
                //'detail'=>$aa,
            ));
     }
    //行业整体分析-》热销商品排名
    public function related_hot_goods_ranking(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        //$cate3=$this->input->get('cate3');//单页查询第几页
        $date=$this->input->get('date');//指定的sku
        $data=$this->search->getHotGoods_trade($cate2,$date,$method);// 参数  类目2   日期   搜索模式  
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }  
        $this->load->view('yjs/related_hot_goods_ranking',array(
                'data'=>$data,
            ));
    }
    //搜索关键词 关联购买
    public function related_hot_goods_ranking_1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $method=$this->input->post('method');
        $date=$this->input->post('date');
        $sku=$this->input->post('prosku');
        //$data=$this->search->getContent_trade_h_k($sku,$date,$method);//sku    日期    模式  
        $data=$this->search->getContent_trade_h_k('10399420103',7,1);//sku    日期    模式  
        $data1=$this->search->getContent_trade_h_related('10399420103',7,1);//sku    日期    模式  
        //$data=$this->search->getContent_trade_h_related($sku,$date,$method);//sku    日期    模式  
        $this->load->view('yjs/related_hot_goods_ranking_1',array(
                'data'=>$data,
                'data'=>$data1,
            )); 
    }
    //行业整体分析-》飙升商品排行 
    public function related_rise_goods_ranking(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        //$cate3=$this->input->get('cate3');//单页查询第几页
        $date=$this->input->get('date');//指定的sku
        //$data=$this->search->getContent_trade_rise($cat2,$date,$method);//类目2   日期   模式    
        $data=$this->search->getContent_trade_rise($cate2,$date,$method);//类目2   日期   模式  
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }    
        $this->load->view('yjs/related_rise_goods_ranking',array(
                'data'=>$data,
            ));
        echo $this->input->post('prosku');
    }
    //行业整体分析-》买家购买分析
    public function related_bull_analyse(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//指定的sku
        $data=$this->search->getContent_trade_buy($cate2,$cate3,$date,$method);//参数   1.类目2   2.类目3    3.日期    4.搜索模式
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        } 
        $this->load->view('yjs/related_bull_analyse',array(
                'data'=>$data,
            ));
    }
    //行业整体分析-》买家特征分析
    public function related_bull_pro_analyse(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//指定的sku
        //$data=$this->search->getContent_trade_feature($cat2,$cat3,$date,$method);// 参数   1.类目二   2.类目三   3.日期    4.搜索模式
        $data=$this->search->getContent_trade_feature($cate2,$cate3,$date,$method);// 参数   1.类目二   2.类目三   3.日期    4.搜索模式
        $data1=$this->search->getContent_time_feature($cate2,$cate3,$date,$method);// 地域分布
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        } 
        $this->load->view('yjs/related_bull_pro_analyse',array(
                'data'=>$data,
                'data1'=>$data1,
            ));
    }
    //品牌排行-》品牌分析
    public function related_barnd_detail(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        //用户授权京东
        if(!isset($_SESSION['token_em']) || $_SESSION['token_em']==''){
            redirect('loginjd/empower');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $cate3=='1' ? $cate3='' : $cate3=$cate3;
        $date=$this->input->get('date');//指定的sku
        //$data=$this->search->getContent_brand_sister($cat2,$cat3='',$date,$method);//类目2  类目3   日期    模式 
        //获取品牌热销排行数据   '9987','830','862'
        $data=$this->search->getContent_brand_hort_sister($cate2,$cate3,$date,$method);//类目2  类目3   日期    模式 
        //获取品牌飙升排行数据
        $data1=$this->search->getContent_brand_sister($cate2,$cate3,$date,$method);//类目2  类目3   日期    模式 
        //$data1=$this->search->getContent_brand_sister('830','862',$date,$method);//类目2  类目3   日期    模式 
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        } 
        $this->load->view('yjs/related_barnd_detail',array(
            'data'=>$data,
            'data1'=>$data1,
        ));
    }
    public function one(){
        /*echo $this->input->get('brand');
        echo $this->input->get('cate1');
        echo $this->input->get('cate2');
        echo $this->input->get('cate3');
        echo $this->input->get('date');
        echo $this->input->get('method');*/
        echo $this->input->post('brand_num');
        echo $this->input->post('num');
        echo 33;
    }
    //品牌排行-》品牌详情
    public function related_barnd_detail_1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $brand=$this->input->get('brand');//品牌名称 
        //$cate3=$this->input->get('cate3');//单页查询第几页
        $date=$this->input->get('date');//指定的sku
        //整体情况
        //$data1=$this->search->getContent_brand_detail_1($cat2,$cat3,$brandid,$date,$method);//参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $data1=$this->search->getContent_brand_detail_1($cate2,'',$brand,$date,$method);//参数  1.类目二    2.类目三    品牌id   日期     5.模式
        //品牌行业分布
        //$data2=$this->search->getContent_brand_detail_2($brandid,$date,$method){ //参数  品牌id   日期    模式
        $data2=$this->search->getContent_brand_detail_2($brand,$date,$method);//参数  品牌id   日期    模式
            //热卖商家排行
        //$data3=$this->search->getContent_brand_detail_3($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $data3=$this->search->getContent_brand_detail_3($cate2,'',$brand,$date,$method);//参数  1.类目二    2.类目三    品牌id  日期     5.模式
            //热卖商品排行
        //$data4=$this->search->getContent_brand_detail_4($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $data4=$this->search->getContent_brand_detail_4($cate2,'',$brand,$date,$method);//参数  1.类目二    2.类目三  品牌id  日期      5.模式
            //买家购买分析
        //$data5=$this->search->getContent_brand_detail_5($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $data5=$this->search->getContent_brand_detail_5($cate2,'',$brand,$date,$method);//参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
            //买家特征分析
        //$data6=$this->search->getContent_brand_detail_6($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $data6=$this->search->getContent_brand_detail_6($cate2,'',$brand,$date,$method);//参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        } 
        if($brand){
            $this->load->vars('brand',$brand);
        } 
        $this->load->view('yjs/related_barnd_detail_1',array(
                'data1'=>$data1,
                'data2'=>$data2,
                'data3'=>$data3,
                'data4'=>$data4,
                'data5'=>$data5,
                'data6'=>$data6,
                'brand'=>$brand,
            ));
    }
    //属性分析-属性分析
    public function related_attr_detail(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $attr=$this->input->get('attr');//属性id
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//时间
        //$data=$this->search->getContent_brand_sister($cat2,$cat3='',$date,$method);//类目2  类目3   日期    模式 
        $data=$this->search->getContent_attr($cate3,$attr,$date,$method,"d:BargainIndex desc",20);//参数    类目3    属性id   日期   模式      zbtype    limit 
        //$data=$this->search->getContent_attr('13674','122325',$date,$method,"d:BargainIndex desc",20);//    类目3    属性id   日期   模式      zbtype    limit 
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }
        $this->load->view('yjs/related_attr_detail',array(
                'data'=>$data,
                'attr'=>$attr,
            ));
    }
    //属性分析-属性详情
    public function related_attr_detail_1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $attr1=$this->input->get('attr');//属性id
        $attr2=$this->input->get('attrlist');//属性值id
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//时间
        $data=$this->search->getContent_attr_detail($cate3,$attr1,$attr2,$method,$date);// 参数    类目3    属性1    属性2    模式    日期   
        //$data=$this->search->getContent_attr_detail('12091','85549','541062',1,7);// 参数    类目3    属性1    属性2    模式    日期  
        //热销店铺排行 
        $data1=$this->search->getContent_attr_hshop($cate3,$attr1,$attr2,$method,$date,"d:BargainIndex desc");//  参数    类目3    属性1   属性2    模式   日期    sortby
        //$data1=$this->search->getContent_attr_hshop('12091','85549','541062',2,7,"d:BargainIndex desc");//  参数    类目3    属性1   属性2    模式   日期    sortby
        //热销商品排行
        $data2=$this->search->getContent_attr_hgoods($cate3,$attr1,$attr2,$method,$date,"d:BargainIndex desc");//  参数    类目3    属性1   属性2    模式   日期    sortby
        //$data2=$this->search->getContent_attr_hgoods('12093','85142','538584',1,7,"d:BargainIndex desc");//  参数    类目3    属性1   属性2    模式   日期    sortby
        //设置类目
        if($cate1){
            $this->load->vars('cate1',$cate1);
        }
        if($cate2){
            $this->load->vars('cate2',$cate2);
        }
        if($cate3){
            $this->load->vars('cate3',$cate3);
        }
        $this->load->view('yjs/related_attr_detail_1',array(
                'data'=>$data,
                'data1'=>$data1,
                'data2'=>$data2,
                'attr'=>$attr1,
                'attrlist'=>$attr2,
            ));
    }
    //易金商热词榜--------------------------------------------------------------
    //类目关联热词查询
    public function related_cate_host_word(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//指定的sku
        $data=$this->search->getContent_hword($cate2,$cate3,$date,$method);//类目2  类目3   日期    模式 
        //$data=$this->search->getContent_hword('5026','',7,1);//类目2  类目3   日期    模式 
        $data1=$this->search->getContent_rword($cate2,$cate3,$date,$method);//行业热词飙升榜单
        //$data1=$this->search->getContent_rword('5026','',7,1);//行业热词飙升榜单
        $this->load->view('yjs/related_cate_host_word',array(
                'data'=>$data,
                'data1'=>$data1,
                'cate1'=>$cate1,
                'cate2'=>$cate2,
                'cate3'=>$cate3,
            ));
    }
    //商品标题分析
    public function related_goods_title_analyse(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->get('key');
        $method=$this->input->get('method');//查询模式
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//时间
        $sku=$this->input->get('sku');//sku
        //获取标题分析关键词,所属类目2，3 商品名
        $data2=$this->search->get_mate_hw_title_key($sku,$date,$method);//sku  日期   搜索模式
        //$data2=$this->search->get_mate_hw_title_key('10128868491',7,1);//sku  日期   搜索模式
        $data1=$this->search->getContent_mate_hw($sku,$date,$method);//sku   日期   搜索模式
        //$data1=$this->search->getContent_mate_hw('10128868491',7,1);//sku   日期   搜索模式
        $data3='{"title":{"text":"u5173u952eu8bcdu5206u6790"},"tooltip":{"trigger":"axis"},"legend":{"data":["u641cu7d22u4ebau6c14","u641cu7d22u6307u6570","u70b9u51fbu6307u6570"]},"grid":{"left":"3%","right":"4%","bottom":"3%","containLabel":true},"toolbox":{"feature":{"saveAsImage":[]}},"xAxis":{"type":"category","boundaryGap":false,"data":["20160819","20160820","20160821","20160822","20160823","20160824","20160825"]},"yAxis":{"type":"value"},"series":[{"name":"u641cu7d22u4ebau6c14","type":"line","stack":"u603bu91cf","data":[406920,430063,433167,394047,286323,354595,336501]},{"name":"u641cu7d22u6307u6570","type":"line","stack":"u603bu91cf","data":[405307,467615,495485,457306,324672,407258,386765]},{"name":"u70b9u51fbu6307u6570","type":"line","stack":"u603bu91cf","data":[464700,571321,459511,450223,401514,450472,444696]}]}';
        $this->load->view('yjs/related_goods_title_analyse',array(
                'data1'=>$data1,
                'data2'=>$data2,
                'data3'=>$data3,
                'cate1'=>$cate1,
                'cate2'=>$cate2,
                'cate3'=>$cate3,
            ));
    }
    //关键词分析
    public function related_goods_title_analyse_1(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->post('key');
        $cateName=$this->input->post('cateName');
        $date=$this->input->post('date');
        $method=$this->input->post('method');

        //$data=$this->search->getUrl_mate_key_detail($key,$cat2,$cat3,$date,$method);
        $data=$this->search->getEcharts_mate_key_detail('国表','情侣手表',7,1,'关键词分析');
        $data=json_encode($data);
        //echo $data;exit;
        echo substr($data,1,-1);exit;
        //$cc='{"title":{"text":"u5173u952eu8bcdu5206u6790"},"tooltip":{"trigger":"axis"},"legend":{"data":["u641cu7d22u4ebau6c14","u641cu7d22u6307u6570","u70b9u51fbu6307u6570"]},"grid":{"left":"3%","right":"4%","bottom":"3%","containLabel":true},"toolbox":{"feature":{"saveAsImage":[]}},"xAxis":{"type":"category","boundaryGap":false,"data":["20160819","20160820","20160821","20160822","20160823","20160824","20160825"]},"yAxis":{"type":"value"},"series":[{"name":"u641cu7d22u4ebau6c14","type":"line","stack":"u603bu91cf","data":[406920,430063,433167,394047,286323,354595,336501]},{"name":"u641cu7d22u6307u6570","type":"line","stack":"u603bu91cf","data":[405307,467615,495485,457306,324672,407258,386765]},{"name":"u70b9u51fbu6307u6570","type":"line","stack":"u603bu91cf","data":[464700,571321,459511,450223,401514,450472,444696]}]}';
        //echo $cc;
        //$this->load->view('yjs/related_goods_title_analyse_1',array(
               // 'data'=>$data,
           // ));
    }
    //关联行业热词
    public function related_trade_hot_word(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->post('key');
        $cateName=$this->input->post('cateName');
        $date=$this->input->post('date');
        $method=$this->input->post('method');
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//时间
        //$data=$this->search->get_mate_trade_hw($key,$cate2,$cate3,$date,$method);// 参数    关键词    类目2     类目3    日期    模式 
        $data=$this->search->get_mate_trade_hw('情侣手表',5026,13674,7,1);// 参数    关键词    类目2     类目3    日期    模式 
        $this->load->view('yjs/related_trade_hot_word',array(
                'data'=>$data,
                'cate1'=>$cate1,
                'cate2'=>$cate2,
                'cate3'=>$cate3,
            ));
    }
    //热词详情
    public function related_hot_word_detail(){
        $this->userdb->get_authority($_SESSION['uid'],$_SESSION[uid]);//用户使用商品的权限管理
        //验证是否登录京东
        if(!isset($_SESSION['thor'] ) || $_SESSION['thor'] == ''){
            redirect('loginjd/index');
        }
        $key=$this->input->post('key');
        $cateName=$this->input->post('cateName');
        $date=$this->input->post('date');
        $method=$this->input->post('method');

        $key=$this->input->get('key');
        $cate1=$this->input->get('cate1');//
        $cate2=$this->input->get('cate2');//
        $cate3=$this->input->get('cate3');//
        $date=$this->input->get('date');//时间
        $data=$this->search->getContent_mate_key_detail($key,$cate2,$cate3,$date,$method);//注意需要跟据cat3的名字  找出cat2,cat3  编号 
        //$data=$this->search->getContent_mate_key_detail('情侣手表一对学生',5026,13674,7,1);// 参数    关键词    类目2     类目3    日期    模式 
        $this->load->view('yjs/related_hot_word_detail',array(
                'data'=>$data,
                'cate1'=>$cate1,
                'cate2'=>$cate2,
                'cate3'=>$cate3,
            ));
    }
    public function test(){
        echo strlen(strstr('aaa->','->'));
        //$this->load->view('yjs/test');
    }
}
