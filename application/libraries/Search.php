<?   
//此类完成在京东搜索商品 列出结果 可以有6种搜索模式   可以指定sku 输出单个sku的搜索记录
class Search extends Panjson{
    //private $CI->load->helper('url');
    private $priceok=false;
    public $dtime = "";
    public function __construct($primary=''){
        $arr=array(
            "thor"=>$_SESSION['thor']
        );
        parent::__construct($arr);
        if(!empty($primary)){
            foreach($primary as $key=>$value){
                $this->$key=$value;
            }
        }
        $this->dtime=date("Y-m-d",time()-3600*24);
        $this->ddtime=date("Ymd",time()-3600*24);
    }
    //易金商
    //店铺流量概况
    public function getContent_rate_general_new(){
        return 2;
    }
    //搜索排名 返回查询的数据----------------------------------------------------------------------------------------------------------------------------
    public function getContent_p($key='',$method=1,$page='',$pagenum='',$sku=''){//参数含义  关键字   查询模式  单页查询第几页  多页查询前几页  指定的sku
        if($pagenum == '' && $sku == ''){
            //匹配出商品部分
            $con=$this->getContent_page($key,$page,$method);
            $rarr=$this->deal($con);
            return $rarr;
        }else{
            $data=$this->getContent_pagenum($key,$pagenum,$sku,$method);
            $i=0;
            $rarr=array();
            foreach($data as $key=>$value){
                $rarr[$i]=$this->deal($value);
                $rarr[$i]['page_n']=ceil(($i+1)/2);
                $i++;
            }
            if($sku!=''){
                //匹配出$sku的 商品在第几页，第几名
                $page='';
                $ranking='';
                $skugoods=array();
                foreach($rarr as $key=>$value){
                    $page=$key;
                    foreach($value['sku'] as $k=>$v){
                        if($sku==$v){
                             $ranking=$page*30+$k+1;

                             $skugoods['sku']=$v;
                             $skugoods['goodsname']=$rarr[$key]['goodsname'][$k];
                             $skugoods['price']=$rarr[$key]['price'][$k];
                             $skugoods['href']=$rarr[$key]['href'][$k];
                             $skugoods['assess']=$rarr[$key]['assess'][$k];
                             $skugoods['who']=$rarr[$key]['who'][$k];
                             $skugoods['img']=$rarr[$key]['img'][$k];
                             break 2;
                        }
                    }
                }
                $rarr['ranking']=$ranking;
                $rarr['page']=ceil($ranking/30);
                $rarr['skugoods']=$skugoods;
            }
            return $rarr;
        }
    }
    //得到单页面的搜索结果
    public function getContent_page($key,$page,$method=1){
        $surl=$this->getMethod($key,$page,$method);
        $zz='';
        $data=parent::data($surl,$zz);
        return $data;
    }
    //得到总页数的结果
    public function getContent_pagenum($key,$pagenum,$sku,$method){
        $surl=$this->getMethod($key,$pagenum,$method);
        $pagenum>=200 ? $pagenum=200 : $pagenum=$pagenum;//限制最大搜索页数
        $rhtml=array();
        for($i=0;$i<$pagenum;$i++){
            $surl=$this->getMethod($key,$i,$method);
            $zz='';
            $data=parent::data($surl,$zz);
            $rhtml[$i]=$data;
        }
        return $rhtml;
    }
    //处理循环匹配的数据 返回数组数据
    private function deal($con){
        $returnarr=array();
        preg_match('/\<ul class="gl-warp clearfix" data-tpl="1"\>[\s\S]*?\<\/ul\>/',$con,$con_ul);
            preg_match_all('/\<li[\s\S]*?\/li\>/',$con_ul[0],$con_li);//匹配出所有的商品li部分
            foreach($con_li[0] as $key=>$value){
                    preg_match('/\<li data-sku="(\d*?)"/',$value,$sku);
                    $returnarr['sku'][$key]=$sku[1];
                    preg_match('/\<a target="_blank" title="(.*?)"/',$value,$goodsname);
                    $returnarr['goodsname'][$key]=$goodsname[1];
                    if(preg_match('/\<a target="_blank" title="(.*?)"/',$value,$goodsname)!=''){
                        //preg_match('/\<a target="_blank" title="(.*?)"/',$value,$goodsname);
                        preg_match('/data-price="(.*?)"\>/',$value,$price);
                    }else{
                        preg_match('/<strong>([\s\S]*?)</strong>/',$value,$goodsname);
                        preg_match('/data-price="(.*?)"\>/',$value,$price);
                    }
                    $returnarr['price'][$key]=$price[1];
                    preg_match('/href="(.*?)"/',$value,$href);
                    $returnarr['href'][$key]=$href[1];
                    if(preg_match('/data-lazy-img="(.*?)"/',$value,$img)==''){
                        preg_match('/src="(.*?)"/',$value,$img);
                        $returnarr['img'][$key]=$img[1];
                    }else{
                        //preg_match('/data-lazy-img="(.*?)"/',$value,$img);
                        $returnarr['img'][$key]=$img[1];
                    }
                    //preg_match('/p-commit[\s\S]*?\>(\d*?)\<\/a/',$value,$assess);
                    preg_match('/已有<a[\s\S]*?>([\s\S]*?)<\/a/',$value,$assess);
                    $returnarr['assess'][$key]=$assess[1];
                    //preg_match('/em class="u-jd"\>(.*?)\</',$value,$who);
                    preg_match('/span class="p-promo-flag">([\s\S]*?)<\/span/',$value,$who);
                    $returnarr['who'][$key]=$who[1];
                }
                return $returnarr;
    }
    //处理不同的搜索条件
    private function getMethod($key,$page,$method){
        $url='';
        switch($method){
            case 1:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=0&page={$page}";//综合查询  默认的
                break;
            case 2:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=1&page={$page}";//按价格高到底
                break;
            case 3:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=2&page={$page}";//按价格底到高
                break;
            case 4:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=3&page={$page}";//按销量
                break;
            case 5:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=4&page={$page}";//按评价数
                break;
            case 6:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=5&page={$page}";//按新品
                break;
            default:
                $url="http://search.jd.com/search?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&default_sort=1&psort=0&page={$page}";//综合查询  默认的
        }
        return $url;
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //搜索类目下的商品排名情况
    public function getcontent_c($cate1,$cate2,$cate3,$method=1,$page=1,$priceok='0',$pagenum='',$sku=''){  //参数  1,url  2,搜索模式   3，第几页   4，是否查询价格  5.查询总页数  6.sku
        $url="http://list.jd.com/list.html?cat={$cate1},{$cate2},{$cate3}";
       $this->priceok=$priceok;//是否查询price  标识 
        if($pagenum == '' && $sku == ''){
            $data=$this->pageContent($url,$method,$page);
            $rdata=$rdata=$this->dealCat($data);
            return $rdata;
        }else{
            $data=$this->pagenumContent($url,$method,$pagenum,$sku);
            return $data;
        }
    }
    //单页的搜索
    public function pageContent($url,$method,$page){
        $url=$this->getCatMethod($url,$page,$method);
        $zz='';
        $data=parent::data($url,$zz);
        preg_match('/\<ul class="gl-warp clearfix "\>([\s\S]*?)\<div class="clr"/',$data,$con_ul);
        return $con_ul[1];
        //return $data;
    }
    //多页的搜索
    private function pagenumContent($url,$method,$pagenum,$sku){
        $rpagenum=array();
        $pagenum>=200 ? $pagenum=200 : $pagenum=$pagenum;//限制最大搜索页数
        for($i=0;$i<$pagenum;$i++){
            $data=$this->pageContent($url,$method,$i);
            $rpagenum[$i]=$this->dealCat($data);
            $rpagenum[$i]['page_n']=ceil(($i+1)/2);
        }
        $rarr=$rpagenum;
         if($sku!=''){
                //匹配出$sku的 商品在第几页，第几名
                $page='';
                $ranking='';
                $skugoods=array();
                foreach($rarr as $key=>$value){
                    $page=$key;
                    foreach($value['sku'] as $k=>$v){
                        if($sku==$v){
                             $ranking=$page*30+$k+1;

                             $skugoods['sku']=$v;
                             $skugoods['name']=$rarr[$key]['name'][$k];
                             $skugoods['price']=$rarr[$key]['price'][$k];
                             $skugoods['href']=$rarr[$key]['href'][$k];
                             $skugoods['assess']=$rarr[$key]['assess'][$k];
                             $skugoods['shop_name']=$rarr[$key]['shop_name'][$k];
                             $skugoods['img']=$rarr[$key]['img'][$k];
                             break 2;
                        }
                    }
                }
                $rarr['ranking']=$ranking;
                $rarr['page']=ceil($ranking/30);
                $rarr['skugoods']=$skugoods;
            }
            return $rarr;
    }
    //获取评价人数
    public function getAccess_c($sku){
        //$url="http://club.jd.com/comment/productCommentSummaries.action?my=pinglun&referenceIds=10106700329&callback=jQuery5675576&_=1473423783391";
        $str='';
        foreach($sku as $v){
            $str.=$v.',';
        }
        $url="http://club.jd.com/comment/productCommentSummaries.action?my=pinglun&referenceIds={$str}&callback=jQuery5675576&_=1473423783391";
        //$url="http://club.jd.com/comment/productCommentSummaries.action?my=pinglun&referenceIds=492788&callback=jQuery5675576&_=1473423783391";
        $zz='';
        $data=parent::data($url,$zz,'get');
        $data=iconv('GBK','UTF-8',$data);
        preg_match('/\(([\s\S]*?)\)/',$data,$re);
        $data=json_decode($re[1],1);
        //P($data);
        $data=$data['CommentsCount'];//['CommentCountStr'];
        //单独组合access
        $access_arr=array();
        foreach($data as $k=>$v){
            $access_arr[$k]=$v['CommentCountStr'];
        }
        //P($access_arr);
        return $access_arr;
    }
    //获取价格
    public function getPrice_c($sku){
        //$url="http://p.3.cn/prices/mgets?callback=jQuery7955670&type=1&area=1_72_2799_0&skuIds=J_3475418&pdbp=0&pdtk=&pdpin=jd_13297950501&pduid=2134020536&_=1473477997154";
        $str='';
        foreach($sku as $v){
            $str.='J_'.$v.',';
        }
        $url="http://p.3.cn/prices/mgets?callback=jQuery7955670&type=1&area=1_72_2799_0&skuIds={$str}&pdbp=0&pdtk=&pdpin=jd_13297950501&pduid=2134020536&_=1473477997154";
        //$url="http://club.jd.com/comment/productCommentSummaries.action?my=pinglun&referenceIds=492788&callback=jQuery5675576&_=1473423783391";
        $zz='';
        $data=parent::data($url,$zz,'get');
        $data=iconv('GBK','UTF-8',$data);
        preg_match('/\(([\s\S]*?)\)/',$data,$re);
        $data=json_decode($re[1],1);
        //$data=$data['CommentsCount'];//['CommentCountStr'];
        //单独组合access
        $access_arr=array();
        foreach($data as $k=>$v){
            $access_arr[$k]=$v['p'];
        }
        //P($access_arr);
        return $access_arr;
    }
     //处理循环匹配的数据 返回数组数据
    private function dealCat($con){
        $returnarr=array();
        $arr_access=array();
            preg_match_all('/li class="gl-item"([\s\S]*?)class="p-stock/',$con,$con_li);//return $con_li[0];
            if($this->priceok!='0'){
                foreach($con_li[0] as $key=>$value){
                    preg_match('/data-sku="(\d*?)"/',$value,$sku);
                    $returnarr['sku'][$key]=$sku[1];
                    preg_match('/class="loading-style[\s\S]*?="\/\/([\s\S]*?)"/',$value,$img);
                    $returnarr['img'][$key]=$img[1];
                    preg_match('/\<div class="p-img" \>[\s\S]*?\<a target="_blank" href="\/\/([\s\S]*?)"/',$value,$href);
                    $returnarr['href'][$key]=$href[1];
                    preg_match('/p-name[\s\S]*?em\>([\s\S]*?)\</',$value,$name);
                    $returnarr['name'][$key]=$name[1];
                    //preg_match('/已有<a target="_blank[\s\S]*?\>(\d*?)\<\/a\>人评价/',$value,$assess);
                    //$returnarr['assess'][$key]=$assess[1];
                    preg_match('/data-shop_name="([\s\S]*?)"/',$value,$shop_name);
                    $returnarr['shop_name'][$key]=$shop_name[1];
                    //$returnarr['price'][$key]=$this->catPrice($sku[1]);//取价格
                }
            }else{
                foreach($con_li[0] as $key=>$value){
                    preg_match('/data-sku="(\d*?)"/',$value,$sku);
                    $returnarr['sku'][$key]=$sku[1];
                    preg_match('/class="loading-style[\s\S]*?="\/\/([\s\S]*?)"/',$value,$img);
                    $returnarr['img'][$key]=$img[1];
                    preg_match('/\<div class="p-img" \>[\s\S]*?\<a target="_blank" href="\/\/([\s\S]*?)"/',$value,$href);
                    $returnarr['href'][$key]=$href[1];
                    preg_match('/p-name[\s\S]*?em\>([\s\S]*?)\</',$value,$name);
                    $returnarr['name'][$key]=$name[1];
                    //preg_match('/已有<a target="_blank[\s\S]*?\>(\d*?)\<\/a\>人评价/',$value,$assess);
                    //$returnarr['assess'][$key]=$assess[1];
                    preg_match('/data-shop_name="([\s\S]*?)"/',$value,$shop_name);
                    $returnarr['shop_name'][$key]=$shop_name[1];
                    //$returnarr['price'][$key]=$this->catPrice($sku[1]);
                }
            }
            //用sku匹配出评价人数
            $access_arr=array();
            $arrss=$returnarr['sku'];
            $access_arr=$this->getAccess_c($arrss);//得到access_arr数组
            //组合进$returnarr;
            $returnarr['assess']=$access_arr;//评价数据数组
            //用sku匹配出评价人数
            $price_arr=array();
            $arrss=$returnarr['sku'];
            $price_arr=$this->getPrice_c($arrss);//得到access_arr数组
            //组合进$returnarr;
            $returnarr['price']=$price_arr;//评价数据数组
            return $returnarr;
    }
    //排序的选择
    private function getCatMethod($url_t,$page,$method){
        preg_match("/cat=(.*?)$/",$url_t,$nurl);
        $nurl=$nurl[1];
        $url='';
        switch($method){
            case 1:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}";//综合查询  默认的
                break;
            case 2:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}&sort=sort_totalsales15_desc&JL=4_2_0";//  销量
                break;
            case 3:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}&sort=sort_dredisprice_asc&JL=4_3_0";//    价格
                break;
            case 4:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}&sort=sort_commentcount_desc&JL=4_5_0";//  评论数
                break;
            case 5:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}&sort=sort_winsdate_desc&JL=4_6_0";//      上架时间
                break;
            default:
                $url="http://list.jd.com/list.html?cat={$nurl}&page={$page}";//综合查询  默认的
        }
        return $url;
    }
    //查询jd  api提供的数
    public function getAPI_price($sku){
        $sku="J_".$sku;
        //加载京东api类
        $attr=array(
            //     'token'=>$_SESSION['token_em'],
            //'access_token'=>'',
            'app_key'=>'5C89FB56CEB21A85EB6A8A0043304F10',
            'app_secret'=>'b81e7718c3ea4c4791a4da59e14088b1',
            'timestamp'=>date("Y-m-d H:i:s",time()-3),
            'v'=>'2.0',
        );
        $jdapi=new Jdapi($attr);
        //访问京东api返回json数据，分配给视图
        $sysarr=array(//api接口
            'method'=>'jingdong.ware.price.get'
            );
        $myarr=array(//应用参数
            'sku_id'=>$sku,
            );
        $apijson=$jdapi->getJson($sysarr,$myarr);
        $arr=json_decode($apijson,true);
        //return $apijson;
        return $arr['jingdong_ware_price_get_responce']['price_changes'][0]['price'];
    }
    //查询价格
    public function catPrice($sku){
        $url="http://p.3.cn/prices/mgets?skuids=J_{$sku}";
        //$url="http://p.3.cn/prices/mgets?skuids=J_2473905";
        $zz='';
        $price=parent::data($url,$zz);
        $price=json_decode($price,true);
        if(isset($price[0]['p'])){
            return $price[0]['p']."元";
        }else{
            return "0元";
        }
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//app端查询
 //搜索类目下的商品排名情况
    public function getcontent_a($key='',$pagenum=1,$method=1,$sku=''){    //关键词   页数   搜索模式   sku
            $data1=$this->getPageNum($key,$method,$pagenum,$sku);
            $data=$this->dealApp($data1);
            $rarr=$data;
            if($sku!=''){
                    //匹配出$sku的 商品在第几页，第几名
                    $page='';
                    $ranking='';
                    $skugoods=array();
                    foreach($rarr as $key=>$value){
                        $page=$key;
                        foreach($value['sku'] as $k=>$v){
                            if($sku==$v){
                                 $ranking=$page*5+$k+1;

                                 $skugoods['sku']=$v;
                                 $skugoods['name']=$rarr[$key]['name'][$k];
                                 $skugoods['price']=$rarr[$key]['price'][$k];
                                 $skugoods['href']=$rarr[$key]['href'][$k];
                                 $skugoods['assess']=$rarr[$key]['assess'][$k];
                                 //$skugoods['shop_name']=$rarr[$key]['shop_name'][$k];
                                 //$skugoods['img']=$rarr[$key]['img'][$k];
                                 break 2;
                            }
                        }
                    }
                    $rarr['ranking']=$ranking;
                    $rarr['page']=ceil($ranking/5);
                    $rarr['skugoods']=$skugoods;
                }
            return $rarr;
    }
    //得到一页的数据
    public function getPageOne($key='',$method=1,$page=1){
        $url=$this->getUrl($key,$method,$page);
        $zz='';
        $data=parent::data($url,$zz);
        return $data;
    }
    //得到多页的数据
    public function getPageNum($key,$method=1,$pagenum,$sku){
        $page_arr=array();
        for($i=0;$i<$pagenum;$i++){
            $page_arr[$i]=stripslashes($this->getPageOne($key,$method,$i));//去掉单页数据的转义 赋给数组
        }
        return $page_arr;
    }
    //处理数据
    public function dealApp($data){
        $preg_arr=array();
        $i=0;
        foreach($data as $key=>$value){
            preg_match_all('/wname":"([\s\S]*?)"/',$value,$name);//name
            $preg_arr[$i]['name']=$name[1];
            preg_match_all('/jdPrice":"([\s\S]*?)"/',$value,$price);//price
            @$preg_arr[$i]['price']=$price[1];
            preg_match_all('/good":"([\s\S]*?)"/',$value,$good);//goods 好评率good":"96%"   
            $preg_arr[$i]['good']=$good[1];
            preg_match_all('/wareId":"(\d*?)"/',$value,$sku);//sku
            $preg_arr[$i]['sku']=$sku[1];
            preg_match_all('/totalCount":"(\d*?)"/',$value,$assess);//评价数
            $preg_arr[$i]['assess']=$assess[1];
            $preg_arr[$i]['href']=$this->getHref($sku[1]);//商品链接
            $i++;
        }
        return $preg_arr;
    }
    //搜索模式 返回对应的url
    private function getUrl($key='',$method=1,$page=1){
        $url='';
        switch($method){
            case 1:
                $url="http://m.jd.com/ware/searchList.action?_format_=json&page={$page}&keyword={$key}";  //默认
                break;
            case 2:
                $url="http://m.jd.com/ware/searchList.action?_format_=json&sort=1&page={$page}&keyword={$key}"; //按销量
                break;
            default:
                $url="http://m.jd.com/ware/searchList.action?_format_=json&page={$page}&keyword={$key}"; //默认

        }
        return $url;
    }
    //得到商品链接
    private function getHref($sku){
        $arr=array();
        foreach($sku as $k=>$v){
            $sku=$v;
            $arr[$k]="http://item.jd.com/{$sku}.html";
        }
        return $arr;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //搜索微信端商品
    public function getcontent_w($key='',$method=1,$page=1,$pagenum='',$sku=''){ // 参数   1.查询词  2.查询模式    3.页数   4.总页数   5.sku
        if($pagenum == '' && $sku == ''){
            $data=$this->deal_w($key,$method,$page);
            return $data;
        }else{
            $data_arr=array();
            for($i=0;$i<$pagenum;$i++){
                $data=$this->deal_w($key,$method,$i+1);
                $data_arr[$i]=$data;
            }
            $rarr=$data_arr;
            if($sku!=''){
                //匹配出$sku的 商品在第几页，第几名
                $page='';
                $ranking='';
                $skugoods=array();
                foreach($rarr as $key=>$value){
                    $page=$key;
                    foreach($value['sku'] as $k=>$v){
                        if($sku==$v){
                             $ranking=$page*30+$k+1;

                             $skugoods['sku']=$v;
                             $skugoods['name']=$rarr[$key]['name'][$k];
                             $skugoods['price']=$rarr[$key]['price'][$k];
                             $skugoods['href']=$rarr[$key]['href'][$k];
                             $skugoods['assess']=$rarr[$key]['assess'][$k];
                             $skugoods['who']=$rarr[$key]['who'][$k];
                             //$skugoods['img']=$rarr[$key]['img'][$k];
                             break 2;
                        }
                    }
                }
                $rarr['ranking']=$ranking;
                $rarr['page']=ceil($ranking/30);
                $rarr['skugoods']=$skugoods;
            }
            return $rarr;
        }
    }
    //搜索单页数据
    public function getPageOne_w($key,$method,$page){
        $url=$this->getUrl_w($key,$page,$method);
        $zz='';
        $data=parent::data($url,$zz);
        preg_match('/\<ul class="gl-warp clearfix" data-tpl="1"\>([\s\S]*?)\<\/ul\>/',$data,$arr_ul);
        preg_match_all('/\<li([\s\S]*?)\<\/li\>/',$arr_ul[0],$arr_li);
        return $arr_li[1];
    }
    //搜索多页数据
    public function getPageNum_w($key,$method,$pagenum){
        $data_arr=array();
        for($i=0;$i<$pagenum;$i++){
            $data_arr[$i]=$this->getPageOne($key,$i,$method);
        }
        return $data_arr;
    }
    //处理搜索数据
    private function deal_w($key,$method,$page){
        $arr_data=array();
        $data=$this->getPageOne_w($key,$method,$page);
        foreach($data as $key=>$value){
            preg_match('/<a target="_blank" title="([\s\S]*?)"/',$value,$name); //匹配名字
            $arr_data['name'][$key]=$name[1];
            preg_match('/data-price="([\s\S]*?)"/',$value,$price); //匹配价格
            $arr_data['price'][$key]=$price[1];
            preg_match('/data-sku="(\d*?)"/',$value,$sku); //sku
            $arr_data['sku'][$key]=$sku[1];
            preg_match('/已有[\s\S]*?\>([\s\S]*?)\</',$value,$assess); //评价数
            $arr_data['assess'][$key]=$assess[1];
            preg_match('/class="u-jd"\>([\s\S]*?)\<\/em/',$value,$who); //是否京东自营
            $arr_data['who'][$key]=$who[1];
            //获取商品链接
            if(!empty($sku[1])){
                $arr_data['href'][$key]="http://item.jd.com/{$sku[1]}.html";
            }else{
                $arr_data['href'][$key]="";
            }
        }
        return $arr_data;
    }
    //搜索模式，返回对应的url
    private function getUrl_w($key,$page,$method){
        $url='';
        switch($method){
            case 1:
                $url="http://search.jd.com/s_new.php?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&sttr=1&page={$page}&click=0"; //默认搜索
                break;
            case 2:
                $url="http://search.jd.com/s_new.php?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&sttr=1&psort=3&page={$page}&click=0"; //按销量搜索
                break;
            case 3:
                $url="http://search.jd.com/s_new.php?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&sttr=1&psort=5&page={$page}&click=0";  //按新品搜索
                break;
            default:
                $url="http://search.jd.com/s_new.php?keyword={$key}&enc=utf-8&qrst=1&rt=1&stop=1&vt=2&sttr=1&page={$page}&click=0"; //默认搜索
        }
        return $url;
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //相关词查询
    public function getContent_related($key){
        $url="http://m.jd.com/ware/searchSuggestion.action?keyword={$key}&_format_=json";
        $zz='';
        $data=parent::data($url,$zz);
        //$data=stripslashes($data);
        $data=json_decode($data,true);
        $data=json_decode($data['searchTipList'],1);
        return $data;
    } 
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //京准通搜索查询
    public function getContent_j($key='',$method=1,$page=1,$pagenum='',$sku=''){  //参数  1.搜索词   2.搜索模式   3.搜索页   4.总共搜索的页数  5.搜索的sku
        $data=$this->deal_j($key,$page,$method);
        //$data=$this->getPageOne_j($key,$page,$method);
        if($pagenum!=''){
            $data_arr=array();
            for($i=0;$i<$pagenum;$i++){
                $data_arr[$i]=$this->deal_j($key,$i,$method);
            }
            $rarr=$data_arr;
        }
        
        if($pagenum!='' && $sku!=''){
                //匹配出$sku的 商品在第几页，第几名
                $page='';
                $ranking='';
                $skugoods=array();
                foreach($rarr as $key=>$value){
                    $page=$key;
                    foreach($value['sku'] as $k=>$v){
                        if($sku==$v){
                            $method == 1 ? $ranking=$page*19+$k+1 : $ranking=$page*5+$k+1;

                             $skugoods['sku']=$v;
                             $skugoods['name']=$rarr[$key]['name'][$k];
                             $skugoods['price']=$rarr[$key]['price'][$k];
                             $skugoods['href']=$rarr[$key]['href'][$k];
                            // $skugoods['assess']=$rarr[$key]['assess'][$k];
                             $skugoods['popurl']=$rarr[$key]['popurl'][$k];
                             //$skugoods['img']=$rarr[$key]['img'][$k];
                             break 2;
                        }
                    }
                }
                $rarr['ranking']=$ranking;
                $method == 1 ? $rarr['page']=ceil($ranking/19) : $rarr['page']=ceil($ranking/5);
                $rarr['skugoods']=$skugoods;
                $data=$rarr;
            }
        return $data;
    }
    //得到单页数据
    private function getPageOne_j($key,$page,$method){
        $url=$this->getUrl_j($key,$page,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        return $data;
    }
    //得到多页数据
    private function getPageNum_j(){
        
    }
    //处理数据
    private function deal_j($key,$page,$method){
        $data=$this->getPageOne_j($key,$page,$method);
        $data_arr=array();
        foreach($data as $key=>$value){
            foreach($value as $k=>$v){
                $data_arr['price'][$k]=$v['sku_price'];//价格
                $data_arr['name'][$k]=$v['ad_title'];//商品名
                $data_arr['sku'][$k]=$v['sku_id'];//SKU
                $data_arr['href'][$k]="http://item.jd.com/{$data_arr['sku'][$k]}.html";//商品链接
                $data_arr['popurl'][$k]=$v['click_url'];//推广链接
            }
        }
        //return $data;
        return $data_arr;
    }
    //得到不用搜索模式的url
    private function getUrl_j($key,$page,$method){
        $url='';
        switch($method){
            case 1:
                $url="http://x.jd.com/Search?ad_ids=291:19&ad_type=7&area=1&enc=utf-8&keyword={$key}&xtest=new_search&page={$page}&1_=1469176627";  //左侧推广
                break;
            case 2:
                $url="http://x.jd.com/Search?ad_ids=292:5&ad_type=7&area=1&enc=utf-8&keyword={$key}&xtest=new_search&page={$page}&1_=1469176835"; //底部推广
                break;
            default:
                $url="http://x.jd.com/Search?ad_ids=291:19&ad_type=7&area=1&enc=utf-8&keyword={$key}&xtest=new_search&page={$page}&1_=1469176627";
        }
        return $url;
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //搜索词 销量
    public function getContent_word($key='',$method=1,$pagenum=''){
        if($pagenum==''){
            $data=$this->getPageOne_word($key,$method);
            return $data;
        }else{
            $data=$this->getPageNum_word($key,$method,$pagenum);
            return $data;
        }
    }
    //返回可以查询到的总条数 和 可以读取的页数
    public function getPage_word_t($key,$method){
        $url=$this->getUrl_word($key,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $arr=array();
        preg_match('/PageCount":"([\s\S]*?)"/',$data,$pagecount);
        $arr['pagecount']=$pagecount[1];
        preg_match('/RealCount":"([\s\S]*?)"/',$data,$realcount);
        $arr['realcount']=$realcount[1];
        return $arr;//返回可以查询到的总条数 和 可以读取的页数
    }
    //得到单页数据
    private function getPageOne_word($key,$method,$page=1){
        $url=$this->getUrl_word($key,$method,$page=1);
        $zz='';
        $data=parent::data($url,$zz);
        $data=ltrim($data,"jdSearchFilterCb(");
        $data=substr($data,0,strlen($data)-3);
        $data=json_decode($data,true);
        $data=$data['data']['searchm']['Paragraph'];
        $rarr=array();
        foreach($data as $k=>$v){
            $rarr['textweight'][$k]=$v['TextWeight'];//标题权重
            $rarr['weight'][$k]=$v['showlog_json']['weight'];//权重
            $rarr['sku'][$k]=$v['showlog_json']['wareid'];//sku
            $rarr['averagescore'][$k]=$v['averagescore'];//评分
            $rarr['commentcount'][$k]=$v['commentcount'];//评价数
            $rarr[''][$k]=$v['Content']['warename'];//name
            $rarr['hotscore'][$k]=$v['hotscore'];//热卖分
            $rarr['good'][$k]=$v['good'];//好评率
            $rarr['pop_hot_score'][$k]=$v['pop_hot_score'];//pop得分
            $rarr['redissale'][$k]=$v['redissale'];//3天销量
            $rarr['redissale15'][$k]=$v['redissale15'];//15天销量
            $rarr['totalsales15'][$k]=$v['totalsales15'];//15天销售金额
            $rarr['price'][$k]=$v['showlog_json']['dprice'];//价格
            $rarr['vender_id'][$k]=$v['vender_id'];//店铺编号
            $rarr['href'][$k]="http://item.jd.com/{$v['showlog_json']['wareid']}.html";//href
            $rarr['shop_href'][$k]="http://mall.jd.com/index-{$v['vender_id']}.html";//店铺链接
        }
        return $rarr;
    }
    //得到多页数据
    private function getPageNum_word($key,$method,$pagenum){
        $rarr=array();
        for($i=0;$i<$pagenum;$i++){
            $rarr[$i]=$this->getPageOne_word($key,$method,$i);
        }
        return $rarr;
    }
    private function getUrl_word_t($key,$method){
        $url='';
        switch($method){
            case 1:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=1&callback=jdSearchFilterCb&page=1&pagesize=20&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no"; //默认的搜索方式
                break;
            case 2:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=1&callback=jdSearchFilterCb&page=1&pagesize=20&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&sort_type=sort_totalsales15_desc";//销量排序
                break;
            default:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=1&callback=jdSearchFilterCb&page=1&pagesize=20&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no"; //默认的搜索方式
        }
        return $url;
    }
    private function getUrl_word($key,$method=1,$page=1){
        $url='';
        switch($method){
            case 1:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no"; //默认的搜索方式
                break;
            case 2:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&sort_type=sort_totalsales15_desc";//销量排序
                break;
            default:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=1&callback=jdSearchFilterCb&page=1&pagesize=20&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no"; //默认的搜索方式
        }
        return $url;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //东来顺自营旗舰店
    //店铺销量
    //返回多页查询的全部信息
    public function getContent_shop($shop_name='',$method=1,$pagenum=''){
        if($pagenum>1){
            $rarr=array();
            for($i=0;$i<$pagenum;$i++){
                $rarr[$i] = $data=$this->getPageNum_shop($shop_name,$method,$i);
            }
            return $rarr;
        }
        $data=$this->getPageNum_shop($shop_name,$method,1);
        return $data;
    }
    //返回查询到的商品的全部信息
    public function getPageNum_shop($shop_name='',$method,$pagenum){
        $data=$this->getPageOne_shop($shop_name,$method,$pagenum);
        $data=ltrim($data,"jdSearchFilterCb(");
        $data=substr($data,0,strlen($data)-3);
        $data=json_decode($data,true);
        $data=$data['data']['searchm']['Paragraph'];
        $rarr=array();
        foreach($data as $k=>$v){
            $rarr['name'][$k]=$v['Content']['warename'];//产品名称
            $rarr['textweight'][$k]=$v['TextWeight'];//标题权重 
            $rarr['weight'][$k]=$v['Weight'];//产品权重
            $rarr['averagescore'][$k]=$v['averagescore'];//平均分
            $rarr['commentcount'][$k]=$v['commentcount'];//评价数
            $rarr['good'][$k]=$v['good'];//好评率
            $rarr['hotscore'][$k]=$v['hotscore'];//热卖分
            $rarr['pop_hot_score'][$k]=$v['pop_hot_score'];//pop得分
            $rarr['redissale'][$k]=$v['redissale'];//3天销量
            $rarr['redissale15'][$k]=$v['redissale15'];//15天销量
            $rarr['totalsales15'][$k]=$v['totalsales15'];//15天销售金额
            $rarr['sku'][$k]=$v['wareid'];//sku
            $rarr['price'][$k]=$v['showlog_json']['dprice'];//价格
            $rarr['shop_id'][$k]=$v['shop_id'];//shop_id
            $rarr['href'][$k]="http://item.jd.com/{$v['wareid']}.html";//href
            $rarr['shop_href'][$k]="http://mall.jd.com/index-{$v['shop_id']}.html";//店铺链接
        }
        return $rarr;
    }
    //查询到的单页信息
    private function getPageOne_shop($shop_name,$method,$page){
        $url=$this->getUrl_shop($shop_name,$method,$page=1);
        $zz='';
        $data=parent::data($url,$zz);
        return $data;
    }
    //返回类目信息处理后的数组
    public function getCatPage_shop($shop_name){
        $url="http://wq.jd.com/search/search?key={$shop_name}&datatype=2&callback=jdSearchFilterCb&page=1&pagesize=1&&brand_col=yes&new_brand_val=yes";
        $zz='';
        $data=parent::data($url,$zz);
        $data=ltrim($data,"jdSearchFilterCb(");
        $data=substr($data,0,strlen($data)-3);
        $data=json_decode($data,true);
        $data=$data['data']['searchm'];
        //$data=$data['data']['searchm']['Paragraph'];
        $rarr=array();
        $i=0;
        foreach($data['ObjCollection']['catid'] as $Key=>$value){
            $rarr['cname'][$i]=$value['Name'];//分类名
            $rarr['cid'][$i]=$value['Classification'];//分类id
            $i++;
        }
        foreach($data['Paragraph'] as $k=>$v){
            $rarr['warename'][$k]=$v['Content']['warename'];//品牌
        }
        return $rarr;
    }
    //返回查询到的有页数和条数的json数据
    private function getNum_shop($shop_name,$cid){
        $url="http://wq.jd.com/search/search?key={$shop_name}&datatype=2&callback=jdSearchFilterCb&page=1&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&filt_type=catid,L{$cid}M{$cid};";
        $zz='';
        $data=parent::data($url,$zz);
        $data=ltrim($data,"jdSearchFilterCb(");
        $data=substr($data,0,strlen($data)-3);
        return $data;
    }
    //处理页数和条数的json 数据 返回只有页数和条数的数组
    public function getPageContent_shop($shop_name=''){
        $cid=$this->getCatPage_shop($shop_name);
        $cid=$cid['cid'][1];
        $data=$this->getNum_shop($shop_name,$cid);
        $data=json_decode($data,true);
        $data=$data['data']['searchm']['Head']['Summary'];
        $rarr=array();
        $rarr['num']=$data['OrgSkuCount'];
        $rarr['pagenum']=$data['Page']['PageCount'];
        return $rarr;//返回 查询到的条数 和 页数
    }
    //不模式下的搜索的url
    private function getUrl_shop($shop_name,$method,$page){
        $url='';
        switch($method){
            case 1:
                $url="http://wq.jd.com/search/search?key={$shop_name}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&filt_type=catid,L13582M13582;";
                break;
            case 2:
                $url="http://wq.jd.com/search/search?key={$shop_name}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&sort_type=sort_totalsales15_desc&filt_type=catid,L13582M13582;";
                break;
            default:
                $url="http://wq.jd.com/search/search?key={$shop_name}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&filt_type=catid,L13582M13582;";
        }
        return $url;
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //品牌销量查询
    public function getContent_brand($key,$method=1,$pagenum=1){//参数  1.关键字  2.搜索模式    3.页数
        $data=$this->getContentPageNum_brand($key,$method,$pagenum);
        return $data;
    }
    //获取可以读取的条数
    public function getPageNum_brand($key){
        $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page=1&pagesize=1&ext_attr=no&brand_col=yes&price_col=no&color_col=no&size_col=no&ext_attr_sort=no&merge_sku=yes&multi_suppliers=yes&new_brand_val=yes";
        $zz='';
        $data=parent::data($url,$zz);
        $data=$this->getOnlyJson($data,true);
        $arr=array();
        $arr['brand_name']=$data['data']['searchm']['ObjB_TextCollection']['brand']['value'];//可以读取的品牌
        $arr['content_num']=$data['data']['searchm']['Head']['Summary']['Page']['PageCount'];//可以读取的条数
        //preg_match('/[\s\S]*/',$arr['brand_name'],$name);
        //$arr['brand_name']=$name[0];
        return $arr;//返回可以读取的条数; 页数为条数/80
    }
    //查询品牌的销量相关信息 单页
    public function getContentPageOne_brand($key,$method,$page=1){
        $url=$this->getUrl_brand($key,$method,$page);
        $zz='';
        $data=parent::data($url,$zz);
        $data=$this->getOnlyJson($data,true);
        $data=$data['data']['searchm']['Paragraph'];
        $rarr=array();
        foreach($data as $k=>$v){
            $rarr['name'][$k]=$v['Content']['warename'];//产品名称
            $rarr['textweight'][$k]=$v['TextWeight'];//标题权重 
            $rarr['weight'][$k]=$v['Weight'];//产品权重
            $rarr['averagescore'][$k]=$v['averagescore'];//平均分
            $rarr['commentcount'][$k]=$v['commentcount'];//评价数
            $rarr['good'][$k]=$v['good'];//好评率
            $rarr['hotscore'][$k]=$v['hotscore'];//热卖分
            $rarr['pop_hot_score'][$k]=$v['pop_hot_score'];//pop得分
            $rarr['redissale'][$k]=$v['redissale'];//3天销量
            $rarr['redissale15'][$k]=$v['redissale15'];//15天销量
            $rarr['totalsales15'][$k]=$v['totalsales15'];//15天销售金额
            $rarr['sku'][$k]=$v['wareid'];//sku
            $rarr['price'][$k]=$v['showlog_json']['dprice'];//价格
            $rarr['shop_id'][$k]=$v['shop_id'];//shop_id
            $rarr['href'][$k]="http://item.jd.com/{$v['wareid']}.html";//href
            $rarr['shop_href'][$k]="http://mall.jd.com/index-{$v['shop_id']}.html";//店铺链接
        }
        return $rarr;
    }
    //查询品牌的销量相关信息 多页
    public function getContentPageNum_brand($key,$method,$pagenum){
        $data=array();
        for($i=0;$i<$pagenum;$i++){
            $data[$i]=$this->getContentPageOne_brand($key,$method,$i);
        }
        return $data;
    }
    //获取不用搜索模式的url
    private function getUrl_brand($key,$method,$page=1){
        $brname=$this->getPageNum_brand($key);
        $brname=$brname['brand_name'];
        $url='';
        $key=urlencode($key);
        $brname=urlencode($brname);
        switch($method){
            case 1:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&expression_key=brand,,{$brname}";//默认的搜索模式
                break;
            case 2:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&sort_type=sort_totalsales15_desc&expression_key=brand,,{$brname}";//按销量排序
                break;
            default:
                $url="http://wq.jd.com/search/search?key={$key}&datatype=2&callback=jdSearchFilterCb&page={$page}&pagesize=200&merge_sku=yes&multi_suppliers=yes&qp_disable=no&new_brand_val=yes&brand_col=no&expression_key=brand,,{$brname}";//默认的搜索模式
        }
        return $url;
    }
    //去掉json格式的两头多出的字符
    private function getOnlyJson($data,$method=false){
        $data=ltrim($data,"jdSearchFilterCb(");
        $data=substr($data,0,strlen($data)-3);
        if($method==true){
            return json_decode($data,true);
        }else{
            return $data;
        }
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //基本信息
    //商品详情
    public function getContent_detail(){
        
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //商品评价
    public function getContent_assess($sku,$method,$pagenum=1){//参数 1.sku    2.模式    3.页数
        $data=$this->getPageNum_assess($sku,$method,$pagenum);
        P($data);
    }
    //取一页数据
    public function getPageOne_assess($sku,$method,$page=1){
        $url=$this->getUrl_assess($method,$sku,$page);
        $zz='';
        $data=parent::data($url,$zz);
        $data=stripslashes($data);
        $data=iconv('gbk','utf-8',$data);
        $data=json_decode($data,true);
        $rarr=array();
        foreach($data['comments'] as $k=>$v){
            $rarr['content'][$k]=$v['content'];//评价内容
            $rarr['creationTime'][$k]=$v['creationTime'];//评价时间
            $rarr['userRegisterTime'][$k]=$v['userRegisterTime'];//注册时间
            $rarr['referenceTime'][$k]=$v['referenceTime'];//购买时间
            $rarr['nickname'][$k]=$v['nickname'];//昵称
            $rarr['userLevelName'][$k]=$v['userLevelName'];//会员类型
            $rarr['userClientShow'][$k]=$v['userClientShow'];//终端
            $rarr['userProvince'][$k]=$v['userProvince'];//地区
            $rarr['productColor'][$k]=$v['productColor'];//颜色
            $rarr['productSize'][$k]=$v['productSize'];//尺寸
            $rarr['isMobile'][$k]=$v['isMobile'];//是否移动端
            $rarr['days'][$k]=$v['days'];//天数
        }
        $rarr['commentCount']=$data['productCommentSummary']['commentCount'];//评价总数
        $rarr['showCount']=$data['productCommentSummary']['showCount'];//显示总数
        $rarr['goodCount']=$data['productCommentSummary']['goodCount'];//好评数
        $rarr['goodRateShow']=$data['productCommentSummary']['goodRateShow'];//好评率
        $rarr['generalCount']=$data['productCommentSummary']['generalCount'];//中评数
        $rarr['generalRateShow']=$data['productCommentSummary']['generalRateShow'];//中评率
        $rarr['poorCount']=$data['productCommentSummary']['poorCount'];//差评数
        $rarr['poorRateShow']=$data['productCommentSummary']['poorRateShow'];//差评率
        $rarr['score5Count']=$data['productCommentSummary']['score5Count'];//5星数
        $rarr['score4Count']=$data['productCommentSummary']['score4Count'];//4星数
        $rarr['score3Count']=$data['productCommentSummary']['score3Count'];//3星数
        $rarr['score2Count']=$data['productCommentSummary']['score2Count'];//2星数
        $rarr['score1Count']=$data['productCommentSummary']['score1Count'];//1星数
        $rarr['imageListCount']=$data['imageListCount'];//图片数
        //P($rarr);
        return $rarr;

    }
    //取多页数据
    public function getPageNum_assess($sku,$method,$pagenum){
        $data=array();
        for($i=0;$i<$pagenum;$i++){
            $data[$i]=$this->getPageOne_assess($sku,$method,$i);
        }
        return $data;
    }
    //不同搜索模式，不同url
    private function getUrl_assess($method,$sku,$page){
        $url='';
        switch($method){
            case 1:
                $url="http://club.jd.com/productpage/p-{$sku}-s-0-t-0-p-{$page}.html";//默认模式 全部
                break;
            case 2:
                $url="http://club.jd.com/productpage/p-{$sku}-s-1-t-0-p-{$page}.html";//好评
                break;
            case 3:
                $url="http://club.jd.com/productpage/p-{$sku}-s-2-t-0-p-{$page}.html";//中评
                break;
            case 4:
                $url="http://club.jd.com/productpage/p-{$sku}-s-3-t-0-p-{$page}.html";//差评
                break;
            default:
                $url="http://club.jd.com/productpage/p-{$sku}-s-0-t-0-p-{$page}.html";//全部
        }
        return $url;
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //基本信息-》店铺查询 
    public function getContent_shop_base($shop_id='',$method=1,$page=1,$pagenum=''){  //参数  1.shopid   2.搜索模式  3.查询的哪一页   4.查询的总页数
        if($pagenum==''){
            $data=$this->getPageOne_shop_base($shop_id,$method,$page);
            P($data);
        }else{
            $data=$this->getPageNum_shop_base($shop_id,$method,$pagenum);
            P($data);
        }
    }
    //获取一页数据
    public function getPageOne_shop_base($shop_id,$method,$page=1){
        $url=$this->getUrl_shop_base($shop_id,$method,$page);
        $zz='';
        $data=parent::data($url,$zz);
        $data=$this->getpreg_shop('/\<ul class="small-block-grid-2"\>([\s\S]*?)\<\/ul\>/',$data,1);
        $data=$this->getpregall_shop('/\<li\>([\s\S]*?)\<\/li\>/',$data,1);
        $rarr=array();
        foreach($data as $k=>$v){
            $rarr['name'][$k]=$this->getpreg_shop('/class="p-info"\>([\s\S]*?)\<\/div/',$v,1);
            $rarr['sku'][$k]=$this->getpreg_shop('/jdprice="(\d*?)"/',$v,1);
            $assess=$this->getAssess($rarr['sku'][$k]);
            $rarr['assess_total'][$k]=$assess['assess_total'];//评价总数
            $rarr['assess_good'][$k]=$assess['assess_good'];//好评
            $rarr['assess_middle'][$k]=$assess['assess_middle'];//中评
            $rarr['assess_bad'][$k]=$assess['assess_bad'];//差评
        }
        return $rarr;
    }
    //获取多页数据
    public function getPageNum_shop_base($shop_id,$method,$pagenum){
        $goodsnum=$this->getPageInfo_shop_base($shop_id);
        $pagenum<=ceil($goodsnum['goods_num']/10) ? $pagenum=$pagenum : $pagenum=ceil($goodsnum['goods_num']);
        $rarr=array();
        for($i=0;$i<$pagenum;$i++){
            $rarr[$i]=$this->getPageOne_shop_base($shop_id,$method,$i);
        }
        return $rarr;
    }
    //通过sku取得商品的相关评价数
    public function getAssess($sku){
        $url="http://item.m.jd.com/Comments/{$sku}.html";
        $zz="";
        $data=parent::data($url,$zz);
        $rarr=array();
        $rarr['assess_good']=$this->getpreg_shop('/scoreCount5" value="([\s\S]*?)"/',$data,1);
        $rarr['assess_middle']=$this->getpreg_shop('/scoreCount3" value="([\s\S]*?)"/',$data,1);
        $rarr['assess_bad']=$this->getpreg_shop('/scoreCount1" value="([\s\S]*?)"/',$data,1);
        $rarr['assess_total']=$rarr['assess_good']+$rarr['assess_middle']+$rarr['assess_bad'];
        return $rarr;
    }
    //获取不同搜索模式的url
    private function getUrl_shop_base($shop_id,$method,$page){
        $url='';
        switch($method){
            case 1:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-0-1-10-{$page}.html";//相关度
                break;
            case 2:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-5-1-10-{$page}.html";//销量
                break;
            case 3:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-4-1-10-{$page}.html";//价格
                break;
            case 4:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-3-1-10-{$page}.html";//好评度
                break;
            case 5:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-2-1-10-{$page}.html";//上架时间 
                break;
            case 6:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-1-1-10-{$page}.html";//评论数
                break;
            default:
                $url="http://ok.jd.com/m/list-{$shop_id}-0-0-1-10-{$page}.html";//相关度
        }
        return $url;
    }
    public function getPageInfo_shop_base($shop_id){
        $url="http://mall.jd.com/shopLevel-{$shop_id}.html";
        $zz='';
        $data=parent::data($url,$zz);
        $url1="http://mall.jd.com/advance_search-40519-18226-{$shop_id}-0-0-0-1-1-24.html";
        $data1=parent::data($url1,$zz);
        $rarr=array();
        $rarr['name']=$this->getpreg_shop('/\<p class="j-shop-name"\>\n\s*?(\S*?)\s*?\<\/p\>/',$data,1);//获取店铺名字
        $rarr['goods_num']=$this->getpreg_shop('/div class="jModulesTitle"\>找到\<em\>([\s\S]*?)\<\/em\>件商品\<\/div/',$data1,1);//获取店铺销售商品总数
        $rarr['score_total']=$this->getpreg_shop('/class="total-score-num"\>\s*?\n\s*?\<span\>([\s\S]*?)\<\/span\>\s*?\n\s*?\<\/p\>/',$data,1);//获取综合评分
        $rarr['with_trade']=$this->getpreg_shop('/span\>与同行业平均水平\<\/span\>\s*?\n\s*?\<span class="percent"\>([\s\S]*?)\<\/span\>/',$data,1);//获取同行业相比
        $rarr['goodsok_score']=$this->getpreg_shop('/span class="label"\>商品质量满意度[\s\S]*?\>([\s\S]*?)\<\/span/',$data,1);//商品质量满意度-》评分
        $rarr['goodsok_with']=$this->getpreg_shop('/商品质量满意度[\s\S]*?与同行业平均水平[\s\S]*?percent"\>([\s\S]*?)\<\/span/',$data,1);//商品质量满意度-》相比
        $rarr['manner_score']=$this->getpreg_shop('/\<span class="label"\>服务态度满意度：\<\/span\>\<span[\s\S]*?\>([\s\S]*?)\<\/span\>/',$data,1);//服务态度满意度-》评分
        $rarr['manner_with']=$this->getpreg_shop('/服务态度满意度[\s\S]*?与同行业平均水平[\s\S]*?percent"\>([\s\S]*?)\<\/span/',$data,1);//服务态度满意度-》相比
        $rarr['logistics_score']=$this->getpreg_shop('/\<span class="label"\>物流速度满意度：\<\/span\>\<span[\s\S]*?\>([\s\S]*?)\<\/span\>/',$data,1);//物流速度满意度-》评分
        $rarr['logistics_with']=$this->getpreg_shop('/物流速度满意度[\s\S]*?与同行业平均水平[\s\S]*?percent"\>([\s\S]*?)\<\/span/',$data,1);//物流速度满意度-》相比
        $rarr['describe_score']=$this->getpreg_shop('/商品描述满意度[\s\S]*?\>([\s\S]*?)\<\/span/',$data,1);//商品描述满意度-》评分
        $rarr['describe_with']=$this->getpreg_shop('/商品描述满意度[\s\S]*?与同行业平均水平[\s\S]*?percent"\>([\s\S]*?)\<\/span/',$data,1);//商品描述满意度-》相比
        @$rarr['return_score']=$this->getpreg_shop('/\<span class="label"\>退换货处理满意度：\<\/span\>\<span[\s\S]*?\>([\s\S]*?)\<\/span\>/',$data,1);//退换货处理满意度-》评分
        @$rarr['return_with']=$this->getpreg_shop('/退换货处理满意度[\s\S]*?与同行业平均水平[\s\S]*?percent"\>([\s\S]*?)\<\/span/',$data,1);//退换货处理满意度-》相比
        return $rarr;
    }
    private function getpreg_shop($preg,$content,$num){
        $str='';
        preg_match($preg,$content,$re);
        return $re[$num];
    }
    private function getpregall_shop($preg,$content,$num){
        $str='';
        preg_match_all($preg,$content,$re);
        return $re[$num];
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //数据统计
    //行业分析
    //行业整体分析
    public function getcontent_trade($cat2,$cat3,$method=1,$date=''){ //参数  1.类目2  2.类目3   4.搜索模式  5.日期
        if($date==""){
            $date=date("Y-m-d",time()-3600*24);
        }
        $url=$this->getUrl_trade($cat2,$cat3,$method,$date);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $rarr=array();
        foreach($data1['DateTime']['value'] as $k=>$v){
            $rarr['DateTime'][$k]=$v;//时间
        }
        foreach($data1['SearchClickIndex']['value'] as $k=>$v){
            $rarr['SearchClickIndex'][$k]=$v;//搜索点击指数
        }
        foreach($data1['FollowIndex']['value'] as $k=>$v){
            $rarr['FollowIndex'][$k]=$v;//类目关注指数
        }
        foreach($data1['Price']['value'] as $k=>$v){
            $rarr['Price'][$k]=$v;//客单价
        }
        foreach($data1['FollowPopularity']['value'] as $k=>$v){
            $rarr['FollowPopularity'][$k]=$v;//类目关注人气
        }
        foreach($data1['ProductIndex']['value'] as $k=>$v){
            $rarr['ProductIndex'][$k]=$v;//类目成效指数
        }
        return $rarr;
    }
    //不同搜索模式下的url
    private function getUrl_trade($cat2,$cat3,$method,$date){
        $url='';
        switch($method){
            case 1:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.date={$date}";//全部
                break;
            case 2:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=20&filter.date={$date}";// pc
                break;
            case 3:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=0&filter.date={$date}";//无线整体
                break;
            case 4:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=2&filter.date={$date}";// APP
                break;
            case 5:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=1&filter.date={$date}";//  M端
                break;
            case 6:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=3&filter.date={$date}";//  微信端
                break;
            case 7:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=4&filter.date={$date}";//  手q端
                break;
            default:
                $url="http://pop.jd.com/interDataModel/industryStuAct!industryTrend.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.date={$date}";// 全部
        }
        return $url;
    }
    //热销商家排行->热卖商家top榜--------------
    public function getContent_trade_h($cat2,$date,$method=1,$method_1=1){// 参数 1.二级类目   2.日期  3.搜索模式   4.报表类别
        $date==1 ? $date=$this->dtime :$date=$date;
        $url=$this->getUrl_trade_h($cat2,$method,$date,$method_1);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取详情---------------------
    public function getDetail_trade($shop_id,$date,$method){
        $date==1 ? $date=$this->dtime :$date=$date;
        $url=$this->getUrl_trade_detail($shop_id,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //详情url
    private function getUrl_trade_detail($shop_id='',$date,$method=1){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=99&filter.date={$date}";//全部
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=20&filter.date={$date}";//pc
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=0&filter.date={$date}";//无线整体
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=2&filter.date={$date}";//app
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=1&filter.date={$date}";//M端
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=3&filter.date={$date}";//微信端
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=4&filter.date={$date}";//手q
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100_ext.action?filter.extendShopId={$shop_id}&filter.channel=99&filter.date={$date}";//全部
        }
        return $url;
    }
    //选择url
    private function getUrl_trade_h($cat2,$method,$date,$method_1){
        $url="";
        switch($method_1){
            case 1:
                $url=$this->getUrl_trade_h1($cat2,$method,$date);
                break;
            case 2:
                $url=$this->getUrl_trade_h2($cat2,$method,$date);
                break;
            case 3:
                $url=$this->getUrl_trade_h3($cat2,$method,$date);
                break;
            default:
                $url=$this->getUrl_trade_h1($cat2,$method,$date);
        }
        return $url;
    }
    //人气飙升的url
    private function getUrl_trade_h3($cat2,$method,$date){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotRenQiTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //热卖商家url
    private function getUrl_trade_h1($cat2,$method,$date){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//全部
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=20&filter.date={$date}";//pc
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=0&filter.date={$date}";//无线整体
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=2&filter.date={$date}";//APP
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=1&filter.date={$date}";//M端
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=3&filter.date={$date}";//微信
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=4&filter.date={$date}";//手q
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBusTop100.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //热卖飙升url
    private function getUrl_trade_h2($cat2,$method,$date){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=20&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=0&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=2&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=1&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=3&filter.date={$date}";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotBusAct!hotBiaoShengTop.action?filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //行业分析-》热销商品排行
    //获取热销商品排行信息
    public function getHotGoods_trade($cat2,$date,$method=1,$method_1=1){// 参数  类目2   日期   搜索模式    
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_trade_a($cat2,$date,$method,$method_1);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取行业商品相关排行url
    private function getUrl_trade_a($cat2,$date,$method,$method_1=1){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductTop.action?filter.rm_bs_type={$method_1}&filter.secondCatagory={$cat2}&filter.thirdCatagory=&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //热搜关键词 结果
    public function getContent_trade_h_k($sku,$date,$method,$method_1=1){//sku    日期    模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_trade_h_k($sku,$date,$method,$method_1);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        return $data;
    }
    //热搜关键词url
    private function getUrl_trade_h_k($sku,$date,$method,$method_1){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductKW.action?filter.rm_bs_type={$method_1}&filter.sku={$sku}&filter.channel=99&filter.date={$date}";//
        }
        return $url;
        
    }
    //关联购买结果
    public function getContent_trade_h_related($sku,$date,$method){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_trade_h_k_detail($sku,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data);
    }
    //关联购买url
    private function getUrl_trade_h_k_detail($sku,$date,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/hotProAct!hotProductRelateBuy.action?filter.rm_bs_type=1&filter.sku={$sku}&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //行业分析-》飙升商品排行
    //获取飙升商品排行
    public function getContent_trade_rise($cat2,$date,$method,$method_1=2){
        $date == 1 ? $date=$this->ddtime : $date=$date;
        $url=$this->getUrl_trade_a($cat2,$date,$method,$method_1);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //行业分析买家购买分析
    //获取买家购买分析结果
    public function getContent_trade_buy($cat2,$cat3,$date,$method){ //参数   1.类目2   2.类目3    3.日期    4.搜索模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_trade_buy($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取买家购买分析 的url
    private function getUrl_trade_buy($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=99";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=20";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=0";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=2";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=1";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=3";//
                break;
            case 1:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=4";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/shoppingAnlys.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.date={$date}&filter.channel=99";//
        }
        return $url;
    }
    //行业分析-》买家特征分析
    //获取买家特征分析结果
    public function getContent_trade_feature($cat2,$cat3,$date,$method){ // 参数   1.类目二   2.类目三   3.日期    4.搜索模式
        $date == 1 ? $date=$this->ddtime : $date=$date;
        $url=$this->getUrl_trade_feature($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    private function getUrl_trade_feature($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.rapidQueryValue={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=20&filter.rapidQueryValue={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=0&filter.rapidQueryValue={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=2&filter.rapidQueryValue={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=1&filter.rapidQueryValue={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=3&filter.rapidQueryValue={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=4&filter.rapidQueryValue={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureAreaData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.rapidQueryValue={$date}";//
        }
        return $url;
    }
    //时段分布
    public function getContent_time_feature($cat2,$cat3,$date,$method=1){
        $date == 1 ? $date=$this->ddtime : $date=$date;
        $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.rapidQueryValue={$date}";
        //$url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory=5026&filter.thirdCatagory=999999&filter.channel=99&filter.rapidQueryValue=7";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //时段分布url
    private function getContent_time_feature_url($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.rapidQueryValue={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=20&filter.rapidQueryValue={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=0&filter.rapidQueryValue={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=2&filter.rapidQueryValue={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=1&filter.rapidQueryValue={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=3&filter.rapidQueryValue={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=4&filter.rapidQueryValue={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getShoppingFeatureData.action?filter.secondCatagory={$cat2}&filter.thirdCatagory={$cat3}&filter.channel=99&filter.rapidQueryValue={$date}";//
        }
        return $url;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //子行业排行
    //获取子行业排行数据
    public function getContent_sister($cat2,$date,$method){
        $url=$this->getUrl_sister($cat2,$date,$method);
        $zz="";
        $data=parent::data($url,$zz);
        //$data=stripslashes($data);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data);
    }
    private function getUrl_sister($cat2,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryStuAct!subIndustryRank.action?filter.secondCatagory={$cat2}&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //行业关键词-》行业热词
    //获取行业热词
    public function getContent_hword($rat2,$rat3='',$date,$method=1){ //参数   1.类目二    2.类目三    3.日期    4.模式
        $url=$this->getUrl_hword($rat2,$rat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    private function getUrl_hword($rat2,$rat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=99";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=20";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=0";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=2";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=1";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=3";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=4";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsTopResult.action?filter.date={$date}&filter.industryLevel2={$rat2}&filter.industryLevel3={$rat3}&filter.channel=99";//
        }
        return $url;
    }
    //行业关键词-》行业热词飙升榜
    //获取行业执词飙升榜内容
    public function getContent_rword($cat2,$cat3,$date,$method){
        $url=$this->getUrl_rword($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取行业飙升url
    private function getUrl_rword($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=99";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=20";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=0";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=2";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=1";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=3";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=4";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsSoarResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.channel=99";//
        }
        return $url;
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //品牌排行-》品牌热销排行
    //获取品牌热销排行数据
    public function getContent_brand_hort_sister($cat2,$cat3='',$date,$method=1){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_hort_sister($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取品牌热销url
    private function getUrl_brand_hort_sister($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
    //获取品牌飙升排行数据
    public function getContent_brand_sister($cat2,$cat3='',$date,$method=1){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_sister($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取品牌飙升url
    private function getUrl_brand_sister($cat2,$cat3,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!biaoshengTop100.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99&filter.date={$date}";//
        }
        return $url;
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //获取品牌列表
    public function getBrandList($cate1,$cate2,$cate3){//  类目1    类目2   类目3
        $url="http://list.jd.com/list.html?cat={$cate1},{$cate2},{$cate3}&trans=1&md=1&my=list_brand";
        $zz='';
        $data=parent::data($url,$zz);
        //$data=json_decode($data,true);
        //$data1=json_decode($data['resultData'],true);
        return $data;
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //品牌详情-》整体情况
    //整体情况
    public function getContent_brand_detail_1($cat2,$cat3,$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.品牌id   4.日期     5.模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_1_1($cat2,$cat3,$date,$brandid,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //整体情况url
    private function getUrl_brand_detail_1($cat2,$cat3,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=20";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=0";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=2";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=1";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=3";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=4";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!getBrandDropData.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.channel=99";//
            }
        return $url;
        }
    //行业整体趋势，品牌趋势报表url
    private function getUrl_brand_detail_1_1($cat2,$cat3,$date,$brandid,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandTrend.action?filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}&filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
            }
        return $url;
        }
    //品牌行业分布
    public function getContent_brand_detail_2($brandid,$date,$method){ //参数  品牌id   日期    模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_2($brandid,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //品牌行业分布url
    private function getUrl_brand_detail_2($brandid,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=20&filter.date={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=0&filter.date={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=2&filter.date={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=1&filter.date={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=3&filter.date={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=4&filter.date={$date}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!brandDistribution.action?filter.brandIds={$brandid}&filter.channel=99&filter.date={$date}";//
            }
        return $url;
    }
    //热销商家排行
    public function getContent_brand_detail_3($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_3($cat2,$cat3,$brandid,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //热销商家排行 url
    private function getUrl_brand_detail_3($cat2,$cat3,$brandid,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=20&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=0&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=2&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=1&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=3&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=4&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotSaleTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
            }
        return $url;
    }
    //热销商品排行
    public function getContent_brand_detail_4($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_4($cat2,$cat3,$brandid,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //热销商家排行 url
    private function getUrl_brand_detail_4($cat2,$cat3,$brandid,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=20&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=0&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=2&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=1&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=3&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=4&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!hotProductTop.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
            }
        return $url;
    }
    //买家购买分析
    public function getContent_brand_detail_5($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_5($cat2,$cat3,$brandid,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //买家购买分析 url
    private function getUrl_brand_detail_5($cat2,$cat3,$brandid,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=20&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=0&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=2&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=1&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=3&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=4&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingResult.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
            }
        return $url;
    }
    //买家特征分析
    public function getContent_brand_detail_6($cat2,$cat3='',$brandid,$date,$method){ //参数  1.类目二    2.类目三  3.日期   4.品牌id   5.模式
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_brand_detail_6($cat2,$cat3,$brandid,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        @$data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //买家特征分析 url
    private function getUrl_brand_detail_6($cat2,$cat3,$brandid,$date,$method){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=20&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=0&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=2&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=1&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=3&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=4&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/brandAct!shoppingFeatureArea.action?filter.brandIds={$brandid}&filter.date={$date}&filter.channel=99&filter.secondCategory={$cat2}&filter.thirdCategory={$cat3}";//
            }
        return $url;
    }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //属性分析
    public function getContent_attr($cat3,$attrid,$date,$method,$zbtype,$limit=20){  //参数    类目3    属性id   日期   模式      zbtype    limit
        $date=="1" ? $date="-1" : $date=$date;
        $zbtype=urlencode($zbtype);
        $url=$this->getUrl_attr($cat3,$attrid,$date,$method,$zbtype,$limit);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $attrnames=$data1['Attr_level2_name']['value'];
        $data2=json_encode($attrnames);
        $data2=strip_tags($data2);
        $data2=json_decode($data2,1);//去除属性数据的html标签后返回的数据
        $data1['attrname']=$data2;
        return $data1;
    }
    //属性分析url
    private function getUrl_attr($cat3,$attrid,$date,$method,$zbtype,$limit){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$cat3}&filter.Attr_level1_code={$attrid}&filter.data_time={$date}&filter.channel=99&filter.sortBy={$zbtype}&filter.limit={$limit}&filter.isNewQuery=new";//
                break;
        }
        return $url;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //属性详情
    //获取属性的相关信息
    public function getContent_attr_detail($rat3,$attrid1,$attrid2,$method,$date){ // 参数    类目3    属性1    属性2    模式    日期   
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_attr_detail($rat3,$attrid1,$attrid2,$method,$date);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        //P($data1);
        return $data1;
    }
    //获取属性相关信息的url
    private function getUrl_attr_detail($rat3,$attrid1,$attrid2,$method,$date){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=20&filter.data_time={$date}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=0&filter.data_time={$date}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=2&filter.data_time={$date}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=1&filter.data_time={$date}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=3&filter.data_time={$date}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=4&filter.data_time={$date}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisGroup.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}";//
                break;
            }
        return $url;
    }
    //获取属性值详情的相关信息
    public function getContent_attr_detail_1($rat3,$attrid1,$attrid2,$method,$date,$sortby){//参数    类目3    属性1    属性2    模式    日期   sortby
        $url=$this->getUrl_attr_detail_1($rat3,$attrid1,$attrid2,$method,$date,$sortby);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data;
    }
    //属性值详情的url
    private function getUrl_attr_detail_1($rat3,$attrid1,$attrid2,$method,$date,$sortby){
        $sortby=urlencode($sortby);
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=20&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=0&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=2&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=1&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=3&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=4&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisIndex.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}";//
                break;
            }
        return $url;
    }
    //热销店铺排行
    public function getContent_attr_hshop($rat3,$attrid1,$attrid2,$method,$date,$sortby){ //  参数    类目3    属性1   属性2    模式   日期    sortby
        $sortby=urlencode($sortby);
        $url=$this->getUrl_attr_hshop($rat3,$attrid1,$attrid2,$method,$date,$sortby);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //热销店铺排行url
    private function getUrl_attr_hshop($rat3,$attrid1,$attrid2,$method,$date,$sortby){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 2:   
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=20&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=0&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=2&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=1&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=3&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=4&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisShopRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            }
        return $url;
    }
    //属性详情-》热销商品排行
    public function getContent_attr_hgoods($rat3,$attrid1,$attrid2,$method,$date,$sortby){ //  参数    类目3    属性1   属性2    模式   日期    sortby
        $sortby=urlencode($sortby);
        $url=$this->getUrl_attr_hgoods($rat3,$attrid1,$attrid2,$method,$date,$sortby);
       // $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory=12093&filter.Attr_level1_code=85142&filter.Attr_level2_code=538584&filter.channel=99&filter.data_time=7&filter.sortBy=d%3ABargainIndex%20desc&filter.sortColumnRowkey=1";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //热销商品排行url
    private function getUrl_attr_hgoods($rat3,$attrid1,$attrid2,$method,$date,$sortby){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 2:   
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=20&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=0&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=2&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalsysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=1&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=3&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=4&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            default:
                $url="https://pop.jd.com/interDataModel/industryAttrAct!productAnalysisProRank.action?filter.thirdCatagory={$rat3}&filter.Attr_level1_code={$attrid1}&filter.Attr_level2_code={$attrid2}&filter.channel=99&filter.data_time={$date}&filter.sortBy={$sortby}&filter.sortColumnRowkey=1";//
                break;
            }
        return $url;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //来源搜索词
   /* public function getContent_rate_source_sku($sku,$date){//参数 sku   日期   
        $date==1 ? $date=$this->dtime : $date=$date;
        $url="http://item.jd.com/{$sku}.html";
        $zz='';
        $data=parent::data($url,$zz);
        P($data);
    }
    public function get*/
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //类目关联热词
    //参考行业关键词-》行业热词榜
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //标题分析
    //匹配热词
    public function getContent_mate_hw($sku,$date,$method){
        $date==1 ? $date=$this->dtime : $date=$date;
        $arr=$this->get_mate_hw_title_key($sku,$date,$method);
        $cat2=$arr['cat2'];
        $cat3=$arr['cat3'];
        $key='';
        foreach($arr['key'] as $k=>$v){
            $word=urlencode($v);
            $key.="filter.keyWordsStr=".$word."&";
        }
        $key=rtrim($key,"&");
        $url=$this->getUrl_mate($cat2,$cat3,$date,$method,$key);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取匹配的热词相关信息的url
    private function getUrl_mate($cat2,$cat3,$date,$method,$key){
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.date={$date}&filter.channel=99&{$key}";//
        }   
        return $url;
    }
    //获取标题分析关键词,所属类目2，3 商品名
    public function get_mate_hw_title_key($sku,$date,$method){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->get_mate_hw_title_key_url($sku,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $rarr=array();
        $rarr['cat2']=$data['skuBaseInfo']['industryLevel2'];
        $rarr['cat3']=$data['skuBaseInfo']['industryLevel3'];
        $rarr['name']=$data['skuBaseInfo']['skuName'];
        $rarr['key']=$data['segmentedKeyWord'];
        return $rarr;
    }
    //获取标题分析关键词url
    private function get_mate_hw_title_key_url($sku,$date,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/queryKeyWordLead.action?keyWordFilter.sku={$sku}&keyWordFilter.date={$date}&keyWordFilter.channel=99";
        }
        return $url;
    }
    //关键词详情
    //public function getContent_mate_key_detail($cat3_name,$key,$date,$method=1){//注意需要跟据cat3的名字  找出cat2,cat3  编号
    public function getContent_mate_key_detail($key,$cate2,$cate3,$date,$method=1){//注意需要跟据cat3的名字  找出cat2,cat3  编号
        $date==1 ? $date=$this->dtime : $date=$date;
        //$url=$this->getUrl_mate_key_detail($key,$cate2,$cate3,$date,$method);
        $url=$this->getUrl_mate_key_detail($key,$cate2,$cate3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $data1['key']=$key;
        return $data1;
    }
    public function getEcharts_mate_key_detail($cat3_name,$key,$date,$method=1,$title=''){//获取echarts 图表数据
        $data=$this->getContent_mate_key_detail($cat3_name,$key,$date,$method);
        $chr=array(
                'title'=>array('text'=>$title),
                'tooltip'=>array('trigger'=>'axis'),
                'legend'=>array('data'=>array('搜索人气','搜索指数','点击指数')),
                'grid'=>array('left'=>'3%','right'=>'4%','bottom'=>'3%','containLabel'=>true,),
                'toolbox'=>array('feature'=>array('saveAsImage'=>array())),
                'xAxis'=>array('type'=>'category','boundaryGap'=>false,'data'=>$data['SearchPopularity']['TimeID']['value']),
                'yAxis'=>array('type'=>'value'),
                'series'=>array(
                    array(
                            'name'=>'搜索人气',
                            'type'=>'line',
                            'stack'=>'总量',
                            'data'=>$data['SearchPopularity'][$key]['value'],
                        ),
                    array(
                            'name'=>'搜索指数',
                            'type'=>'line',
                            'stack'=>'总量',
                            'data'=>$data['SearchIndex'][$key]['value'],
                        ),
                    array(
                            'name'=>'点击指数',
                            'type'=>'line',
                            'stack'=>'总量',
                            'data'=>$data['ClickIndex'][$key]['value'],
                        ),
                    ),
                            );
        $data1=json_encode($chr);
        
        $data1=preg_replace('/"/',"'",$data1);
        $data1=preg_replace('/\\\u/',"//u",$data1);
        //$data1=stripslashes($data1);
        //$data1='{"title":{"text":"\u90ae\u4ef6\u8425\u9500"},"tooltip":{"trigger":"axis"},"legend":{"data":["\u90ae\u4ef6\u8425\u9500","\u8054\u76df\u5e7f\u544a","\u89c6\u9891\u5e7f\u544a","\u76f4\u63a5\u8bbf\u95ee","\u641c\u7d22\u5f15\u64ce"]},"grid":{"left":"3%","right":"4%","bottom":"3%","containLabel":true},"toolbox":{"feature":{"saveAsImage":[]}},"xAxis":{"type":"category","boundaryGap":false,"data":["\u5468\u4e00","\u5468\u4e8c","\u5468\u4e09","\u5468\u56db","\u5468\u4e94","\u5468\u516d","\u5468\u65e5"]},"yAxis":{"type":"value"},"series":[{"name":"\u90ae\u4ef6\u8425\u9500","type":"line","stack":"\u603b\u91cf","data":[22,13,32,13,14,14,125]},{"name":"\u8054\u76df\u5e7f\u544a","type":"line","stack":"\u603b\u91cf","data":[122,133,13,153,124,164,125]},{"name":"\u89c6\u9891\u5e7f\u544a","type":"line","stack":"\u603b\u91cf","data":[122,133,132,15,124,164,125]},{"name":"\u76f4\u63a5\u8bbf\u95ee","type":"line","stack":"\u603b\u91cf","data":[2,133,32,153,624,164,25]},{"name":"\u641c\u7d22\u5f15\u64ce","type":"line","stack":"\u603b\u91cf","data":[12,133,532,153,124,564,525]}]}';
        return $data1;
    }
    private function getUrl_mate_key_detail($key,$cat2,$cat3,$date,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=99";
                      https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsCompareResult.action?filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.date={$date}&filter.channel=99";
        }
        return $url;
    }
    //关联行业热词
    public function get_mate_trade_hw($key,$cat2,$cat3,$date,$method=1){// 参数    关键词    类目2     类目3    日期    模式  
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_mate_tarde_hw($key,$cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    private function getUrl_mate_tarde_hw($key,$cat2,$cat3,$date,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getIndustryKeyWordsRelatedResult.action?filter.date={$date}&filter.industryLevel2={$cat2}&filter.industryLevel3={$cat3}&filter.keyWordsStr={$key}&filter.channel=99";
        }
        return $url;
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //流失客户分析
    public function getContent_client_run($sku,$date,$method){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_client_run($sku,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data);
    }
    //流失客户分析的url
    private function getUrl_client_run($sku,$date,$method){
        $spu=$this->get_spu($sku,$date,$method);
        $spu=$spu['spu'];
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/queryShopLossUserStat.action?filter.date={$date}&filter.spu={$spu}&filter.channel=99";
        }
        return $url;
    }
    //得到spu
    private function get_spu($sku,$date,$method){
        $gurl="http://item.jd.com/{$sku}.html";
        $gurl=urlencode($gurl);
        $url=$this->getUrl_spu($sku,$date,$method,$gurl);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $rarr=array();
        $rarr['spu']=$data['sluta']['SPU'];
        $rarr['name']=$data['sluta']['skuName'];
        return $rarr;
    }
    //spu  url
    private function getUrl_spu($sku,$date,$method,$gurl){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/viewShopLossUserProductTitle.action?sluta.productLink={$gurl}&sluta.SKU={$sku}&filter.date={$date}&filter.channel=99";
        }
        return $url;
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //经营概况
    public function getContent_shop_general($date){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/shopAnalysis/getShopOverviewDailyResult.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        //P($data);
        $mdata=json_decode($data['mobileResultData']);
        $pcdata=json_decode($data['pcResultData']);
        //组合summary
        $summary=array();
        $summary[]=$data1['summary']['PV']['value'][0];
        $summary[]=$data1['summary']['UV']['value'][0];
        $summary[]=$data1['summary']['CollectNum']['value'][0];//商品关注量
        $summary[]=$data1['summary']['ShopCollectNum']['value'][0];//店铺关注量
        $summary[]=$data1['summary']['CustPriceAvg']['value'][0];//下单金额
        //$summary[]=$data1['summary']['CollectNum']['value'][0];//客单价
        $summary[]=$data1['summary']['OrdCustNum']['value'][0];//下单客户数
        $summary[]=$data1['summary']['OrdNum']['value'][0];//下单单量
        $summary[]=$data1['summary']['OrdProNum']['value'][0];//下单商品件数
        $summary[]=$data1['summary']['CustRate']['value'][0];//店铺成交转化率
        $summary[]=$data1['summary']['FirstPaymentRate']['value'][0];//先款付款率
        $summary[]=$data1['summary']['The30ReturnRate']['value'][0];//30日客户回头率
        $summary[]=$data1['summary']['The30RepeatPurchaseRate']['value'][0];//30日重复购买率
        $summary[]=$data1['summary']['OnlProSPUNum']['value'][0];//上架商品数量(SPU)
        $summary[]=$data1['summary']['OnlProSKUNum']['value'][0];//上架商品数量(SKU)

        $data1['summary1']=$summary;
        return $data1;
    }
    //pc端经营概况
    public function getContent_shop_general_pc($date){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/shopAnalysis/getShopOverviewDailyResult.action?filter.date={$date}";
        //$url="https://pop.jd.com/shopAnalysis/getShopOverviewDailyResult.action";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        //P($data);
        //$pcdata=json_decode($data['mobileResultData']);
        $pcdata=json_decode($data['pcResultData'],1);
        $data1=$pcdata;
        //组合summary
        $summary=array();
        $summary[]=$data1['summary']['PV']['value'][0];
        $summary[]=$data1['summary']['UV']['value'][0];
        $summary[]=$data1['summary']['CollectNum']['value'][0];//商品关注量
        $summary[]=$data1['summary']['ShopCollectNum']['value'][0];//店铺关注量
        $summary[]=$data1['summary']['CustPriceAvg']['value'][0];//下单金额
        //$summary[]=$data1['summary']['CollectNum']['value'][0];//客单价
        $summary[]=$data1['summary']['OrdCustNum']['value'][0];//下单客户数
        $summary[]=$data1['summary']['OrdNum']['value'][0];//下单单量
        $summary[]=$data1['summary']['OrdProNum']['value'][0];//下单商品件数
        $summary[]=$data1['summary']['CustRate']['value'][0];//店铺成交转化率
        $summary[]=$data1['summary']['FirstPaymentRate']['value'][0];//先款付款率
        $summary[]=$data1['summary']['The30ReturnRate']['value'][0];//30日客户回头率
        $summary[]=$data1['summary']['The30RepeatPurchaseRate']['value'][0];//30日重复购买率
        $summary[]=$data1['summary']['OnlProSPUNum']['value'][0];//上架商品数量(SPU)
        $summary[]=$data1['summary']['OnlProSKUNum']['value'][0];//上架商品数量(SKU)

        $pcdata['summary1']=$summary;
        return $pcdata;
    }
    //移到端经营概况
    public function getContent_shop_general_app($date){
        $date==1 ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/advancedDataModel/getMobileSaleStat.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $data1['name']=array('总计','M端','APP端','微信端','手机QQ端','其他');
        return $data1;//0->移动端整体  1->M端  2->app端    3->微信端    4->手机qq端   10->其它  
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //pc端经营概况    跟经营概况 调用相同数据
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //移动端经营概况
    public function getContent_shop_general_m($date=''){
        if($date==''){
            $date=$this->dtime;
        }
        $url="https://pop.jd.com/advancedDataModel/getMobileSaleStat.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data);
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //实时概况
    //浏览量实时数据各访客数实时数据
    public function getContent_real_1($method=1){
        $url=$this->getUrl_real_1($method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $summary=array(
                $data1['summary']['PV']['value'][0],
                $data1['summary']['UV']['value'][0],
                $data1['summary']['OrdNum']['value'][0],
                $data1['summary']['OrdAmt']['value'][0],
                $data1['summary']['OrdProNum']['value'][0],
                $data1['summary']['DealNum']['value'][0],
                $data1['summary']['DealAmt']['value'][0],
                $data1['summary']['DealProNum']['value'][0],
            );
        $data1['summary1']=$summary;
        $data1['myuv_max']=$this->getContent_real_mydata($data1,"UV");
        $data1['mypv_max']=$this->getContent_real_mydata($data1,"PV");
        $data1['myDealNum_max']=$this->getContent_real_mydata($data1,"DealNum");//下单单量
        $data1['myDealProNum_max']=$this->getContent_real_mydata($data1,"DealProNum");//成交单量
        $data1['myOrdAmt_max']=$this->getContent_real_mydata($data1,"OrdAmt");//下单金额
        $data1['myDealAmt_max']=$this->getContent_real_mydata($data1,"DealAmt");//成交金额
        $data1['myOrdNum_max']=$this->getContent_real_mydata($data1,"OrdNum");//下单商品件数
        $data1['myOrdProNum_max']=$this->getContent_real_mydata($data1,"OrdProNum");//成交商品件数
        return $data1;
    }
    public function getContent_real_mydata($data,$key){
        $myuv_max=array_search(max($data['currentData'][$key]['value']),$data['currentData'][$key]['value']);
        $myuv_max=$data['currentData'][$key]['value'][$myuv_max];
        $myuv_max_t=array_search(max($data['lastData'][$key]['value']),$data['lastData'][$key]['value']);
        $myuv_max_t=$data['lastData'][$key]['value'][$myuv_max_t];
        return max($myuv_max,$myuv_max_t);//返回两天最大的uv
    }
    //获取浏览量实时数据各访客数实时数据url
    private function getUrl_real_1($method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/interDataModel/getRealTimeResultNew.action?&filter.hourRange=false&filter.channel=99";
        }
        return $url;
    }
    //获取实时单量信息
    public function getContent_real_2($method=1){
        $url=$this->getUrl_real_2($method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //获取实时单量信url
    private function getUrl_real_2($method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/interDataModel/getRealTimeRefleshPV.action?&filter.channel=99";
        }
        return $url;
    }
    //获取实金额信息   调用上一个 实时单量的数据
    //获取实商品件数信息   调用上一个 实时单量的数据
    //数据报表
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //实时访客
    public function getContent_real_caller($source1,$source2,$vurl="all",$method=1){//流量来源类目1    流量来源类目2    访问的页面的url(默认all)    访问设备来源   
        //$url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel={$method}";
        $url=$this->getContent_real_url($source1,$source2,$vurl,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        $data1=$data1['detail'];
        //$data1=$data['resultData'];
        return $data1;  
    }
    //实时榜单url
    private function getContent_real_url($source1,$source2,$vurl,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel=20";//pc
                break;
            case 2:
                $url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel=1";//M端
                break;
            case 3:
                $url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel=3";//微信端
                break;
            case 4:
                $url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel=4";//手Q
                break;
            default:
                $url="https://pop.jd.com/interDataModel/getAllRTVisitorResult.action?filter.viewSource1={$source1}&filter.viewSource2={$source2}&filter.visitUrl={$vurl}&filter.channel=20";
        }
        return $url;
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //实时榜单
    public function getContent_real_list($cat2,$cat3,$date,$method=1){  //参数    类目2   类目3    模式    日期
        $date=="" ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_real_list($cat2,$cat3,$date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    //实时榜单url
    private function getUrl_real_list($cat2,$cat3,$date,$method){
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.channel=99";
        }
        return $url;
    }
    //实时榜单筛选
    public function getContent_real_condition(){
        $url="https://pop.jd.com/model/realTime/rtBoard.jsp";
        $zz='';
        $data=parent::data($url,$zz);
        preg_match_all('/pinyinStr\:([\s\S]*?)\,disableLevel/',$data,$re);
        $data=json_decode($re[1][0],1);
        $arr=array();
        $arr[0]=json_decode($re[1][0],1);
        $arr[1]=json_decode($re[1][1],1);
        //P($arr);
        return $arr;
    }
    //实时榜单数据
    public function getContent_real_data($cate1,$cate2,$method='1',$date='',$method1='1'){// 行业或店铺类目一   行业或店铺类目二   来源终端  日期
        $method='' ? $method=1 :$method=$method;
        $date=="" ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_real_data($cate1,$cate2,$method,$date,$method1);
        //$url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType=industryCategoryId&filter.second={$cate1}&filter.third={$cate2}&filter.channel=99";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,1);
        $data=json_decode($data['resultData'],1);
        return $data;
    }
    //获取url
    private function getUrl_real_data($cate1,$cate2,$method,$date,$method1){
        $url='';
        $method1=='1' ? $method1="industryCategoryId" : $method1="shopCategoryId";
        switch($method){
            case 1:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=99";
                break;
            case 2:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=20";
                break;
            case 3:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=0";
                break;
            case 4:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=2";
                break;
            case 5:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=1";
                break;
            case 6:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=3";
                break;
            case 7:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=4";
                break;
            default:
                $url="https://pop.jd.com/shopSale/getSaleDetailRealTimeResult.action?filter.date={$date}&filter.isMergeSKU=true&filter.categoryType={$method1}&filter.second={$cate1}&filter.third={$cate2}&filter.channel=99";
        }
        return $url;
    }
    //spu转sku
    public function spuTosku($spuarr){
        $post=urlencode(join(',',$spuarr));
        $url="https://pop.jd.com/getProductSkuForOneBySpu.action?filter.spuId=$post";
        $zz='';
        $data=parent::data($url,$zz);
        $data=stripslashes($data);
        $data='{"'.rtrim(ltrim($data,'{"resultData":'),'"}')."}}";
        $data=json_decode($data,1);
        return $data;
        //P($cc);
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //实时流量
    public function getContent_real_rate(){
        $url="https://pop.jd.com/shopAnalysis/getShopRTFlowData.action";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data;
    }
    //访客数
    public function getContent_real_num(){
        $url="https://pop.jd.com/shopAnalysis/getShopRTMapData.action";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //商品统计
    public function getContent_goods_count($date,$method,$issku=true){  //参数    日期   搜索模式(1->整体 2->pc 3->移动)    是否是用sku搜索
        $url=$this->getUrl_goods_count($date,$method,$issku);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        return $data1;
    }
    private function getUrl_goods_count($date,$method,$issku){
        if($issku==true){
            $issku="filter.isMergeSKU=true";
        }else{
            $issku="filter.isMergeSKU=false&filter.isMergeSKU=false";
        }
        $url="";
        switch($method){
            case 1:
                $url="https://pop.jd.com/shopAnalysis/getProStaticResult.action?Dimension=&Date=&ProNum=&Rapid=&Sku=&Type=&filter.date={$date}&{$issku}&filter.type=0";//整体
                break;
            case 2:
                $url="https://pop.jd.com/shopAnalysis/getProStaticResult.action?Dimension=&Date=&ProNum=&Rapid=&Sku=&Type=&filter.date={$date}&{$issku}&filter.type=1";//pc
                break;
            case 3:
                $url="https://pop.jd.com/shopAnalysis/getProStaticResult.action?Dimension=&Date=&ProNum=&Rapid=&Sku=&Type=&filter.date={$date}&{$issku}&filter.type=2";//移动
                break;
            default:
                $url="https://pop.jd.com/shopAnalysis/getProStaticResult.action?Dimension=&Date=&ProNum=&Rapid=&Sku=&Type=&filter.date={$date}&{$issku}&filter.type=0";
        }
        return $url;
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //销售明细
    public function getContent_detail_s($date,$cat2=999999,$cat3=999999,$industry1=999999,$industry2='',$shopcat1=999999,$shopcat2='',$method=1,$issku=true){ //参数    日期    类目2      类目 3    indu类目1  indu类目2  shop类目1   shop类目2  行业分类     店铺分类
        $date=="" ? $date=$this->dtime : $date=$date;
        $url=$this->getUrl_detail_s($date,$cat2=999999,$cat3=999999,$industry1=999999,$industry2='',$shopcat1=999999,$shopcat2='',$method,$issku=true);
        //$url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date=2016-07-28&filter.isMergeSKU=true&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1=999999&industryCategoryId_dropLevel2=&shopCategoryId_dropLevel1=999999&shopCategoryId_dropLevel2=&filter.categoryType=industryCategoryId&filter.second=999999&filter.third=999999&filter.mobileType=3";
        //$url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date=2016-07-28&filter.isMergeSKU=true&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1=999999&industryCategoryId_dropLevel2=&shopCategoryId_dropLevel1=999999&shopCategoryId_dropLevel2=&filter.categoryType=industryCategoryId&filter.second=999999&filter.third=999999&filter.mobileType=1";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data1);
    }
    //销售明细url
    private function getUrl_detail_s($date,$cat2=999999,$cat3=999999,$industry1=999999,$industry2='',$shopcat1=999999,$shopcat2='',$method,$issku=true,$id=''){
        if($issku==true){
            $issku="filter.isMergeSKU=true";
        }else{
            $issku="filter.isMergeSKU=false&filter.isMergeSKU=false";
        }
        if($id!==''){
            $id="&filter.proNums={$id}";
        }
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/shopSale/getSaleDetailsData.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}{$id}";//整体
                break;
            case 2:
                $url="https://pop.jd.com/shopSale/getSaleDetailsPCData.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}{$id}";//pc
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=0{$id}";//移动整体
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=-1{$id}";//移动M
                break;
            case 5:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=2{$id}";//移动APP
                break;
            case 6:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=3{$id}";//移动微信
                break;
            case 7:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=4{$id}";//移动qq
                break;
            case 8:
                $url="https://pop.jd.com/advancedDataModel/getMobileSaleDetail.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}&filter.mobileType=10{$id}";//移动其它
                break;
            default:
                $url="https://pop.jd.com/shopSale/getSaleDetailsData.action?filter.date={$date}&{$issku}&filter.rapidQueryValue=-1&industryCategoryId_dropLevel1={$industry1}&industryCategoryId_dropLevel2={$industry2}&shopCategoryId_dropLevel1={$shopcat1}&shopCategoryId_dropLevel2={$shopcat2}&filter.categoryType=industryCategoryId&filter.second={$cat2}&filter.third={$cat3}{$id}";
        }
        return $url;
    }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //单品趋势
    public function getContent_trend($date,$cat2=999999,$cat3=999999,$industry1=999999,$industry2='',$shopcat1=999999,$shopcat2='',$method,$issku=true,$id){ //参数跟销售明细的参数一样   多出$id 商品sku或spu
        $url=$this->getUrl_detail_s($date,$cat2=999999,$cat3=999999,$industry1=999999,$industry2='',$shopcat1=999999,$shopcat2='',$method,$issku=true,$id);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data1);
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //销量分析
    public function getContent_sales_analyse($date){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/dataModel/getSalesStatReportInitData.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data1);
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //定单明细
    public function getContent_order_detail($date='',$orderid='',$proid='',$paymethod="A",$method=1){ //参数   日期     订单id     商品id   支付方式("A","N","Y")  搜索模式
        $url=$this->getUrl_order_detail($date,$orderid,$proid,$paymethod,$method);
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data);
    }
    private function getUrl_order_detail($date,$orderid,$proid,$paymethod,$method){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=999";
                break;
            case 2:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=5";
                break;
            case 3:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=-1";
                break;
            case 4:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=6";
                break;
            case 5:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=7";
                break;
            case 6:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=8";
                break;
            case 7:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=9";
                break;
            default:
                $url="https://pop.jd.com/dataModel/getShopOrderDetailData.action?filter.date={$date}&filter.orderId={$orderid}&filter.proId={$proid}&filter.goodsFirstTag={$paymethod}&filter.orderType=999";
        }
        return $url;
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //流量概况
    public function getContent_rate_general($date=''){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/dataModel/getViewProfileResult.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data1);
    }
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //小时流量分析
    public function getContent_hour_analyse($date=""){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/advancedDataModel/getViewFlowHour.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        $data=json_decode($data,true);
        $data1=json_decode($data['resultData'],true);
        P($data1);
    }
    //小时流量-》流量对比
    public function getContent_hour_analyse_contrast($starttime='',$endtime=''){
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url="https://pop.jd.com/advancedDataModel/getViewFlowHourCompare.action?filter.startDate={$starttime}&filter.endDate={$endtime}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //按天流量 
    public function getContent_day_rate($date){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/advancedDataModel/getViewFlowForDayWatch.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
    //按天流量-》流量对比
    public function getContent_day_rate_contrast($starttime='',$endtime=''){
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url="https://pop.jd.com/advancedDataModel/getViewFlowForDayCompare.action?filter.startDate={$starttime}&filter.endDate={$endtime}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //流量来源
    public function getContent_rate_source($starttime='',$endtime='',$method=1){
        $url=$this->getUrl_rate_source($starttime,$endtime,$method);
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
    private function getUrl_rate_source($starttime,$endtime,$method){
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getViewFlowTopResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.zbType=ArrivePagePV";//到达页面的
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getViewFlowTopResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.zbType=ArrivePagePVPERC";//到达页面站比
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getViewFlowTopResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.zbType=PV";//浏览量
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getViewFlowTopResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.zbType=PVPERC";//浏览量站比
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getViewFlowTopResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.zbType=ArrivePagePV";
        }
        return $url;
    }
    //数据报表
    public function getContent_rate_data($starttime='',$endtime=''){
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url="https://pop.jd.com/advancedDataModel/getViewFlowResult.action?filter.startDate={$starttime}&filter.endDate={$endtime}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //访客来源
    public function getContent_rate_visitor($date='',$method=1){
        $url=$this->getUrl_rate_visitor($date,$method);
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
    private function getUrl_rate_visitor($date,$method){
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url='';
        switch($method){
            case 1:
                $url="https://pop.jd.com/advancedDataModel/getTopVisitorFlowResult.action?filter.date={$date}&filter.index=UV";//访客数
                break;
            case 2:
                $url="https://pop.jd.com/advancedDataModel/getTopVisitorFlowResult.action?filter.date={$date}&filter.index=UPV";//访问次数
                break;
            case 3:
                $url="https://pop.jd.com/advancedDataModel/getTopVisitorFlowResult.action?filter.date={$date}&filter.index=VisitDept";//平均访问深度
                break;
            case 4:
                $url="https://pop.jd.com/advancedDataModel/getTopVisitorFlowResult.action?filter.date={$date}&filter.index=SkipOut";//跳失率
                break;
            default:
                $url="https://pop.jd.com/advancedDataModel/getTopVisitorFlowResult.action?filter.date={$date}&filter.index=UV";
        }
        return $url;
    }
    //数据报表
    public function getContent_visitor_data($date=''){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/advancedDataModel/getVisitorFlowResult.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //商品流量
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //来源成交
    public function getContent_resource_strike($starttime='',$endtime='',$method=1){//参数    开始时间    结束时间    搜索模式（1.首次入站来源   2.首次入店来源）
        $endtime=="" ? $endtime=$this->dtime && $starttime=date("Y-m-d",time()-3600*24*2) : $endtime=$endtime;
        $url="https://pop.jd.com/advancedDataModel/sourceDealStatistics.action?filter.startDate={$starttime}&filter.endDate={$endtime}&filter.sourceDealType={$method}&filter.ZBType=OrdProNum";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //关键词分析
    public function getContent_key_analyse($date=''){
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/interDataModel/getVisitKeyWordInitData.action?filter.date={$date}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
    //关键词对应商品页
    public function getContent_key_goods($date='',$code=''){  //参数   日期   商品code码
        $date=="" ? $date=$this->dtime : $date=$date;
        $url="https://pop.jd.com/interDataModel/getVisitKWPageDetail.action?filter.date={$date}&filter.code={$code}";
        $zz='';
        $data=parent::data($url,$zz);
        echo $data;
    }
}
