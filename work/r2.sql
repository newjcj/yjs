/*
    用户订单管理系统
 */
/*Alter database character set utf8;  更改库的字符集*/
/*创建库*/

CREATE DATABASE r_user DEFAULT CHARSET utf8 COLLATE utf8_general_ci;


/*会员表*/
CREATE TABLE r_user(
    uid INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user CHAR(30),
    password VARCHAR(50) NOT NULL,
    email VARCHAR(30) NOT NULL DEFAULT '',
    qq INT(12) UNSIGNED NOT NULL DEFAULT '0',
    tell INT(11) UNSIGNED NOT NULL DEFAULT '0',
    shop_user CHAR(30),
    shop_password VARCHAR(50) NOT NULL,
    statu TINYINT
);



/*购买记录*/
CREATE TABLE r_record(
    record_id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    goods_id INT(20) UNSIGNED NOT NULL,
    uid INT(10) UNSIGNED NOT NULL,
    goods_name CHAR(60),
    order_time INT(10) UNSIGNED NOT NULL,
    expire_time INT(10) UNSIGNED NOT NULL
);
/*产品*/
CREATE TABLE r_goods(
    goods_id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    goods_name CHAR(60) NOT NULL DEFAULT '',
    price FLOAT(6,1) NOT NULL DEFAULT '0.0',
    describes TEXT,
    validity_time INT(10) UNSIGNED NOT NULL
);
/*订单*/
CREATE TABLE r_order(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time INT(10) UNSIGNED NOT NULL
)ENGINE=InnoDB;

/*---------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/*单个商品查询到的记录信息*/
CREATE TABLE r_skugoods(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    name CHAR(100) NOT NULL DEFAULT '',
    price float(6,2) NOT NULL DEFAULT "0",
    assess INT(10) UNSIGNED NOT NULL,
    href CHAR(100) NOT NULL DEFAULT '',
    img CHAR(100) NOT NULL DEFAULT '',
    who CHAR(20) NOT NULL DEFAULT '',
    ranking INT(10) UNSIGNED NOT NULL,
    page INT(10) UNSIGNED NOT NULL
)ENGINE=InnoDB;

/*类目查询*/
CREATE TABLE r_getcontent_c(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    title CHAR(100) NOT NULL DEFAULT '',
    price FLOAT(6,2) NOT NULL ,
    assess INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*app搜索排名*/
CREATE TABLE r_getcontent_a(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    name CHAR(100) NOT NULL DEFAULT '',
    price float(6,2) NOT NULL DEFAULT "0",
    assess INT(10) UNSIGNED NOT NULL,
    href CHAR(100) NOT NULL DEFAULT '',
    img CHAR(100) NOT NULL DEFAULT '',
    who CHAR(20) NOT NULL DEFAULT '',
    ranking INT(10) UNSIGNED NOT NULL,
    page INT(10) UNSIGNED NOT NULL,
    goodrate INT(5) UNSIGNED NOT NULL
)ENGINE=InnoDB;

/*微信搜索排名*/
CREATE TABLE r_getcontent_w(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    name CHAR(100) NOT NULL DEFAULT '',
    price float(6,2) NOT NULL DEFAULT "0",
    assess INT(10) UNSIGNED NOT NULL,
    href CHAR(100) NOT NULL DEFAULT '',
    img CHAR(100) NOT NULL DEFAULT '',
    who CHAR(20) NOT NULL DEFAULT '',
    ranking INT(10) UNSIGNED NOT NULL,
    page INT(10) UNSIGNED NOT NULL,
    goodrate INT(5) UNSIGNED NOT NULL
)ENGINE=InnoDB;

/*相关词查询*/
CREATE TABLE r_inword(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    interfixword CHAR(50) NOT NULL DEFAULT '',
    goods_num INT(20) UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB;

/*京准通查询*/
CREATE TABLE r_getcontent_j(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    title CHAR(100) NOT NULL DEFAULT '',
    ranking INT(15) UNSIGNED NOT NULL DEFAULT '0',
    shop_number CHAR NOT NULL DEFAULT '',
    href CHAR(100) NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*搜索词销量*/
CREATE TABLE r_getcontent_word(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    price float(6,2) NOT NULL DEFAULT "0",
    shop_number CHAR NOT NULL DEFAULT '',
    shop_type CHAR(100) NOT NULL DEFAULT '',
    market_time CHAR NOT NULL,
    money15 FLOAT(8,2) NOT NULL DEFAULT '0',
    pop float(6,2) NOT NULL DEFAULT '0',
    hot FLOAT(6,2) NOT NULL DEFAULT '0',
    appraise INT(10) UNSIGNED NOT NULL,
    goods_weight INT(10) UNSIGNED NOT NULL,
    title_weight INT(10) UNSIGNED NOT NULL,
    goods_name CHAR(100) NOT NULL DEFAULT '',
    shop_name CHAR(100) NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*店铺销量*/
CREATE TABLE r_getcontent_shop(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    price float(6,2) NOT NULL DEFAULT "0",
    shop_number INT(15) UNSIGNED NOT NULL DEFAULT '0',
    shop_type CHAR(100) NOT NULL DEFAULT '',
    market_time CHAR NOT NULL,
    money15 FLOAT(8,2) NOT NULL DEFAULT '0',
    pop FLOAT(6,2) NOT NULL DEFAULT '0',
    hot FLOAT(6,2) NOT NULL DEFAULT '0',
    appraise INT(10) UNSIGNED NOT NULL,
    goods_weight INT(10) UNSIGNED NOT NULL,
    title_weight INT(10) UNSIGNED NOT NULL,
    goods_name CHAR(100) NOT NULL DEFAULT '',
    shop_name CHAR(100) NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*品牌销量*/
CREATE TABLE r_getcontent_brand(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    price float(6,2) NOT NULL DEFAULT "0",
    shop_number INT(15) UNSIGNED NOT NULL DEFAULT '0',
    shop_type CHAR(100) NOT NULL DEFAULT '',
    market_time CHAR NOT NULL,
    money15 FLOAT(8,2) NOT NULL DEFAULT '0',
    pop FLOAT(6,2) NOT NULL DEFAULT '0',
    hot FLOAT(6,2) NOT NULL DEFAULT '0',
    appraise INT(10) UNSIGNED NOT NULL,
    goods_weight INT(10) UNSIGNED NOT NULL,
    title_weight INT(10) UNSIGNED NOT NULL,
    goods_name CHAR(60),
    shop_name CHAR(100) NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*商品详情*/
CREATE TABLE r_getcontent_detail(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    price float(6,2) NOT NULL DEFAULT "0",
    shop_number CHAR NOT NULL DEFAULT '',
    brand_list CHAR NOT NULL,
    market_time CHAR NOT NULL,
    shop_name CHAR NOT NULL DEFAULT '',
    price_app FLOAT(6,2) NOT NULL DEFAULT '0',
    same_list CHAR NOT NULL,
    belong_shop CHAR NOT NULL,
    sales_info CHAR NOT NULL DEFAULT '',
    preferential CHAR NOT NULL DEFAULT '',
    belong_brand CHAR NOT NULL DEFAULT '',
    price_mark FLOAT(6,2) NOT NULL DEFAULT '0',
    price_pc FLOAT(6,2) NOT NULL DEFAULT '0',
    access FLOAT(5,2) NOT NULL DEFAULT '0',
    middle_access FLOAT(5,2) NOT NULL DEFAULT '0',
    bad_access FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_pic INT(10) NOT NULL DEFAULT '0',
    seek INT(10) NOT NULL DEFAULT '0',
    attention INT(10) NOT NULL DEFAULT '0',
    goods_grade FLOAT(5,2) NOT NULL DEFAULT '0',
    color char NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*商品评价*/
CREATE TABLE r_getcontent_assess(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    access_total INT(10) NOT NULL DEFAULT '0',
    show_total INT(10) NOT NULL DEFAULT '0',
    good INT(10) NOT NULL DEFAULT '0',
    good_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    middle_good INT(10) NOT NULL DEFAULT '0',
    middle_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    bad_good INT(10) NOT NULL DEFAULT '0',
    bad_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    five INT(10) NOT NULL DEFAULT '0',
    four INT(10) NOT NULL DEFAULT '0',
    three INT(10) NOT NULL DEFAULT '0',
    two INT(10) NOT NULL DEFAULT '0',
    one INT(10) NOT NULL DEFAULT '0',
    pic INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB; 

/*店铺查询1*/
CREATE TABLE r_getcontent_shop_base1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    shop_name CHAR(100) NOT NULL DEFAULT '',
    sale_shop CHAR NOT NULL DEFAULT '',
    assess FLOAT(5,2) NOT NULL DEFAULT '0',
    trade_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    mass_linear FLOAT(5,2) NOT NULL DEFAULT '0',
    mass_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    serve_linear FLOAT(5,2) NOT NULL DEFAULT '0',
    serve_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    logistics_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    logistice_linear FLOAT(5,2) NOT NULL DEFAULT '0',
    discus_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    discus_linear FLOAT(5,2) NOT NULL DEFAULT '0',
    return_compare FLOAT(5,2) NOT NULL DEFAULT '0',
    return_linear FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*店铺查询2*/
CREATE TABLE r_getcontent_shop_base2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    title CHAR(100) NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    price_pc FLOAT(6,2) NOT NULL DEFAULT '0',
    price_app FLOAT(6,2) NOT NULL DEFAULT '0',
    access_total INT(10) NOT NULL DEFAULT '0',
    good INT(10) NOT NULL DEFAULT '0',
    middle_good INT(10) NOT NULL DEFAULT '0',
    bad_good INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*品牌查询*/
CREATE TABLE r_brand_search(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    page INT(10) NOT NULL DEFAULT '0',
    title CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    price FLOAT(6,2) NOT NULL DEFAULT '0',
    access INT(10) NOT NULL DEFAULT '0',
    shop_id CHAR NOT NULL DEFAULT '',
    shop_name CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*行业整体分析*/
CREATE TABLE r_getcontent_trade1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    search_index FLOAT(5,2) NOT NULL DEFAULT '0',
    cate_index FLOAT(5,2) NOT NULL DEFAULT '0', 
    price_one FLOAT(5,2) NOT NULL DEFAULT '0',
    cate_air FLOAT(5,2) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*热销商家排行*/
CREATE TABLE r_getcontent_trade2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    goods_name CHAR(60),
    hot_index FLOAT(5,2) NOT NULL DEFAULT '0',
    air_index FLOAT(5,2) NOT NULL DEFAULT '0',
    show_goods CHAR NOT NULL DEFAULT '',
    rise FLOAT(5,2) NOT NULL DEFAULT '0',
    show_rise CHAR NOT NULL DEFAULT '',
    new_air INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*热销商品排行*/
CREATE TABLE r_getcontent_trade3(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    price float(6,2) NOT NULL DEFAULT "0",
    strike_index INT(10) NOT NULL DEFAULT '0',
    link_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_sku CHAR NOT NULL DEFAULT '',
    goods_strike CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*飙升商品排行*/
CREATE TABLE r_getcontent_trade4(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    goods_name CHAR(100) NOT NULL DEFAULT '',
    price float(6,2) NOT NULL DEFAULT "0",
    strike_index INT(10) NOT NULL DEFAULT '0',
    link_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    goods_strike CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*买家购买分析*/
CREATE TABLE r_getcontent_trade5(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    pro_section CHAR NOT NULL DEFAULT '',
    pro_num FLOAT(5,2) NOT NULL DEFAULT '0',
    pro_scale FLOAT(5,2) NOT NULL DEFAULT '0',
    pro_unit CHAR NOT NULL DEFAULT '',
    num_unit FLOAT(5,2) NOT NULL DEFAULT '0',
    unit_scale FLOAT(5,2) NOT NULL DEFAULT '0',
    frequency FLOAT(5,2) NOT NULL DEFAULT '0',
    num INT(10) NOT NULL DEFAULT '0',
    pro_strike FLOAT(5,2) NOT NULL DEFAULT '0',
    period CHAR NOT NULL DEFAULT '',
    tty CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*买家购买特征分析*/
CREATE TABLE r_getcontent_trade6(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    uv CHAR NOT NULL DEFAULT '',
    pro_uv CHAR NOT NULL DEFAULT '',
    strike INT(10) NOT NULL DEFAULT '0',
    strike_pro FLOAT(5,2) NOT NULL DEFAULT '0',
    period CHAR NOT NULL DEFAULT '',
    tty CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*子行业排行榜单-》子行业*/
CREATE TABLE r_getcontent_sister1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    strike_pro INT(10) NOT NULL DEFAULT '0',
    strike_total_pro INT(10) NOT NULL DEFAULT '0' 
)ENGINE=InnoDB;

/*搜索点击指数变化趋势*/
CREATE TABLE r_getcontent_sister2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL
)ENGINE=InnoDB;

/*行业热词top*/
CREATE TABLE r_getcontent_hword1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    h_words CHAR NOT NULL DEFAULT '',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    s_air FLOAT(5,2) NOT NULL DEFAULT '0',
    t_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    change_pro FLOAT(5,2) NOT NULL DEFAULT '0',
    cate3 CHAR NOT NULL DEFAULT '',
    related_w CHAR NOT NULL DEFAULT '',
    h_w_detail CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*行业扫热词飙升榜单*/
CREATE TABLE r_getcontent_hword2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    h_words CHAR NOT NULL DEFAULT '',
    extent FLOAT(5,2) NOT NULL DEFAULT '0',
    cate3 CHAR NOT NULL DEFAULT '',
    h_w_related CHAR NOT NULL DEFAULT '',
    h_w_detail CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*品牌热销排行*/
CREATE TABLE r_getcontent_brand_sister1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    banrd_id CHAR NOT NULL DEFAULT '',
    h_index FLOAT(5,2) NOT NULL DEFAULT '0',
    a_index FLOAT(5,2) NOT NULL DEFAULT '0',
    detailed CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*飙升品牌排行*/
CREATE TABLE r_getcontent_brand_sister2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    banrd_id CHAR NOT NULL DEFAULT '',
    h_index FLOAT(5,2) NOT NULL DEFAULT '0',
    a_index FLOAT(5,2) NOT NULL DEFAULT '0',
    detailed FLOAT(5,2) NOT NULL DEFAULT '0',
    h_change FLOAT(5,2) NOT NULL DEFAULT '0',
    a_change FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*品牌详情-》整体情况*/
CREATE TABLE r_getcontent_brand_detail_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    h_index FLOAT(5,2) NOT NULL DEFAULT '0',
    a_index FLOAT(5,2) NOT NULL DEFAULT '0',
    p_one FLOAT(6,2) NOT NULL DEFAULT '0',
    change_rate FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*品牌详情-》品牌行业布*/
CREATE TABLE r_getcontent_brand_detail_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    h_index FLOAT(5,2) NOT NULL DEFAULT '0',
    cate_deep CHAR NOT NULL DEFAULT '',
    cate CHAR NOT NULL DEFAULT '',
    strike_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*热销商家排行 */
CREATE TABLE r_getcontent_brand_detail_3_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    h_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_name CHAR NOT NULL DEFAULT '',
    shop_id CHAR NOT NULL DEFAULT '', 
    air_index CHAR NOT NULL DEFAULT '',
    h_top CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*热销商家排行 品牌详情-》热销商家商品*/
CREATE TABLE r_getcontent_brand_detail_3_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_name CHAR NOT NULL DEFAULT '',
    shop_id CHAR NOT NULL DEFAULT '',
    goods_name CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*品牌详情-》热销商品排行*/
CREATE TABLE r_getcontent_brand_detail_4(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_name CHAR NOT NULL DEFAULT '',
    price FLOAT(6,2) NOT NULL DEFAULT '0',
    goods_name CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    goods_strike CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*品牌详情-》买家购买分析*/
CREATE TABLE r_getcontent_brand_detail_5(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    buy_frequency FLOAT(5,2) NOT NULL DEFAULT '0',
    p_num INT(10) NOT NULL DEFAULT '0',
    p_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*品牌详情-》买家特征分析*/
CREATE TABLE r_getcontent_brand_detail_6(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    banrd CHAR NOT NULL DEFAULT '',
    uv CHAR NOT NULL DEFAULT '',
    uv_pro FLOAT(5,2) NOT NULL DEFAULT '0',
    p_buy INT(10) NOT NULL DEFAULT '0',
    strike_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*属性分析*/
CREATE TABLE r_getcontent_attr(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    attribute CHAR NOT NULL DEFAULT '',
    project CHAR NOT NULL DEFAULT '',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    p_strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_num INT(10) NOT NULL DEFAULT '0',
    goods_num INT(10) NOT NULL DEFAULT '0',
    shop_ranking INT(10) NOT NULL DEFAULT '0',
    goods_ranking INT(10) NOT NULL DEFAULT '0',
    attribute_detail CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*属性详情-》属性值详情*/
CREATE TABLE r_getcontent_attr_detail_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    goods_num INT(10) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    p_strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_num INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*属性详情-》热销店铺排行*/
CREATE TABLE r_getcontent_attr_detail_2 (
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    shop_name CHAR NOT NULL DEFAULT '',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    p_strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_n CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*属性详情-》热销商品排行*/
CREATE TABLE r_getcontent_attr_detail_3(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    client CHAR NOT NULL DEFAULT '',
    goods_name CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    p_strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    price FLOAT(6,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*来源搜索词-》流量来源*/
CREATE TABLE r_src_key_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    rate_src CHAR NOT NULL DEFAULT '',
    goods_p_num INT(10) NOT NULL DEFAULT '0',
    look_pro FLOAT(5,2) NOT NULL DEFAULT '0',
    goods_l_n INT(10) NOT NULL DEFAULT '0',
    aver_look FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*来源搜索词-》热搜关键词*/
CREATE TABLE r_src_key_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    h_s_key CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*来源搜索词-》关联购买*/
CREATE TABLE r_src_key_3(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    sku CHAR NOT NULL,
    period CHAR NOT NULL DEFAULT '',
    goods_name CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*类目关联热词*/
CREATE TABLE r_cate_r_hot(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    h_s_key CHAR NOT NULL DEFAULT '',
    s_air FLOAT(5,2) NOT NULL DEFAULT '0',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    c_rate FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*行业关键词-》行业热词top榜单 */
CREATE TABLE r_getcontent_mate_hw_1_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    h_s_key CHAR NOT NULL DEFAULT '',
    s_air FLOAT(5,2) NOT NULL DEFAULT '0',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    c_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    h_w_detail CHAR NOT NULL DEFAULT '',
    h_w_n CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*行业关键词-》行业热词飙升*/
CREATE TABLE r_getcontent_mate_hw_1_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    interfix_w CHAR NOT NULL DEFAULT '',
    h_w_detail CHAR NOT NULL DEFAULT '',
    h_w_n CHAR NOT NULL DEFAULT '',
    soaring FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*行业关键词-》相关行业热词*/
CREATE TABLE r_getcontent_mate_hw_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    interfix_w CHAR NOT NULL DEFAULT '',
    s_air FLOAT(5,2) NOT NULL DEFAULT '0',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    h_w_detail CHAR NOT NULL DEFAULT '',
    h_w_n CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*标题分析-》匹配热词*/
CREATE TABLE r_getcontent_mate_hw1_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    goods_title CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    h_w_name CHAR NOT NULL DEFAULT '',
    s_a FLOAT(5,2) NOT NULL DEFAULT '0',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_ragte FLOAT(5,2) NOT NULL DEFAULT '0',
    strike_index FLOAT(5,2) NOT NULL DEFAULT '0',
    rate_tra FLOAT(5,2) NOT NULL DEFAULT '0',
    interfix_w CHAR NOT NULL DEFAULT '',
    h_w CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*标题分析-》关联热词*/
CREATE TABLE r_getcontent_mate_hw1_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate1 CHAR NOT NULL DEFAULT '',
    cate2 CHAR NOT NULL DEFAULT '',
    cate3 CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    goods_title CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    h_w_name CHAR NOT NULL DEFAULT '',
    s_a FLOAT(5,2) NOT NULL DEFAULT '0',
    s_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_index FLOAT(5,2) NOT NULL DEFAULT '0',
    t_ragte FLOAT(5,2) NOT NULL DEFAULT '0',
    h_w_detail CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*客户流失分析*/
CREATE TABLE r_getcontent_client_run(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    client CHAR NOT NULL DEFAULT '',
    total_v INT(10) NOT NULL DEFAULT '0',
    spu CHAR NOT NULL DEFAULT '',
    period CHAR NOT NULL DEFAULT '',
    direct INT(10) NOT NULL DEFAULT '0', 
    indirect INT(10) NOT NULL DEFAULT '0',
    nodirect INT(10) NOT NULL DEFAULT '0',
    other_direct INT(10) NOT NULL DEFAULT '0',
    nothing INT(10) NOT NULL DEFAULT '0',
    goods_name CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    under_shop CHAR NOT NULL DEFAULT '',
    jd_price FLOAT(6,2) NOT NULL DEFAULT '0',
    buy_num INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*经营概况*/
CREATE TABLE r_getcontent_shop_general(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    look_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    unit_price FLOAT(6,2) NOT NULL DEFAULT '0',
    shop_c_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    turn_30 FLOAT(5,2) NOT NULL DEFAULT '0',
    ground_spu INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    f_p_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    repeat_30 FLOAT(5,2) NOT NULL DEFAULT '0',
    ground_sku CHAR NOT NULL DEFAULT '',
    goods_interest INT(10) NOT NULL DEFAULT '0',
    shop_interest INT(10) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    order_goods INT(10) NOT NULL DEFAULT '0' 
)ENGINE=InnoDB;

/*pc经营状况*/
CREATE TABLE r_pcmanage(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    look_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    unit_price FLOAT(6,2) NOT NULL DEFAULT '0',
    shop_c_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    turn_30 FLOAT(5,2) NOT NULL DEFAULT '0',
    teturn_7 FLOAT(5,2) NOT NULL DEFAULT '0',
    repeat_30 FLOAT(5,2) NOT NULL DEFAULT '0',
    return_30 FLOAT(5,2) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    degree_ave FLOAT(5,2) NOT NULL DEFAULT '0',
    order_goods_total INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*移动端经营概况-》移动端整体数据报表*/
CREATE TABLE r_getcontent_shop_general_m_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    app_src INT(10) NOT NULL DEFAULT '0',
    look_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_client INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_g_num INT(10) NOT NULL DEFAULT '0',
    unit_price FLOAT(5,2) NOT NULL DEFAULT '0',
    shop_strikp_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*移动端经营概况-》移动端时段分布报表*/
CREATE TABLE r_getcontent_shop_general_m_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_part CHAR NOT NULL DEFAULT '',
    look_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_client INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_g_num INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*实时概况*/
CREATE TABLE r_getcontent_real(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    v_time CHAR NOT NULL DEFAULT '',
    t_num INT(10) NOT NULL DEFAULT '0',
    tm_num INT(10) NOT NULL DEFAULT '0',
    t_v_num INT(10) NOT NULL DEFAULT '0',
    tm_v_num INT(10) NOT NULL DEFAULT '0',
    t_order_num INT(10) NOT NULL DEFAULT '0',
    tm_order_num INT(10) NOT NULL DEFAULT '0',
    t_strike_num INT(10) NOT NULL DEFAULT '0',
    tm_strike_num INT(10) NOT NULL DEFAULT '0',
    t_order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    tm_order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    t_price FLOAT(6,2) NOT NULL DEFAULT '0',
    tm_price FLOAT(6,2) NOT NULL DEFAULT '0',
    t_goods_num INT(10) NOT NULL DEFAULT '0',
    tm_goods_num INT(10) NOT NULL DEFAULT '0',
    t_order_g_n INT(10) NOT NULL DEFAULT '0',
    tm_order_g_n INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*实时访客*/
CREATE TABLE r_getContent_real_caller(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    v_time CHAR NOT NULL DEFAULT '',
    src_big_cat CHAR NOT NULL DEFAULT '',
    src_chil_cat CHAR NOT NULL DEFAULT '',
    src_key CHAR NOT NULL DEFAULT '',
    v_p_title CHAR NOT NULL DEFAULT '',
    v_herf CHAR NOT NULL DEFAULT '',
    v_position CHAR NOT NULL DEFAULT '',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_follow CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*实时榜单*/
CREATE TABLE r_getcontent_real_list(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    goods_name CHAR NOT NULL DEFAULT '',
    newly_time CHAR NOT NULL DEFAULT '',
    look_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    order_goods_num INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(5,2) NOT NULL DEFAULT '0',
    order_p INT(10) NOT NULL DEFAULT '0',
    goods_change_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    sku CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*实时流量*/
CREATE TABLE r_getcontent_real_rate_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    rank CHAR NOT NULL DEFAULT '',
    src_look CHAR NOT NULL DEFAULT '',
    look_num INT(10) NOT NULL DEFAULT '0',
    look_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*实时流量*/
CREATE TABLE r_getcontent_real_rate_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    rank CHAR NOT NULL DEFAULT '',
    rate_src CHAR NOT NULL DEFAULT '',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_pro FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*商品统计*/
CREATE TABLE r_getcontent_goods_count(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    client CHAR NOT NULL DEFAULT '',
    look_num INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    shop_follow INT(10) NOT NULL DEFAULT '0',
    goods_follow INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_p INT(10) NOT NULL DEFAULT '0',
    p_price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_goods_num INT(10) NOT NULL DEFAULT '0',
    shop_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    f_pay_rate FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*销售明细*/
CREATE TABLE r_getcontent_detail_s(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    client CHAR NOT NULL DEFAULT '',
    goods_name CHAR NOT NULL DEFAULT '',
    sku_or_spu CHAR NOT NULL DEFAULT '',
    trend CHAR NOT NULL DEFAULT '',
    cate2_id INT(10) NOT NULL DEFAULT '0',
    cate3_id INT(10) NOT NULL DEFAULT '0',
    cate3_name CHAR NOT NULL DEFAULT '',
    v_deep FLOAT(5,2) NOT NULL DEFAULT '0',
    cate_t_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    order_goods_num INT(10) NOT NULL DEFAULT '0',
    page_stip_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    goods_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    goods_follow_num INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    comment_num INT(10) NOT NULL DEFAULT '0',
    good_num INT(10) NOT NULL DEFAULT '0',
    uv_price FLOAT(5,2) NOT NULL DEFAULT '0', 
    order_p_num INT(10) NOT NULL DEFAULT '0',
    s_t_num CHAR NOT NULL DEFAULT '',
    ave_price FLOAT(6,2) NOT NULL DEFAULT '0',
    good_rate FLOAT(6,2) NOT NULL DEFAULT '0',
    v_page_num INT(10) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    nearly_time CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*商品趋势分析*/
CREATE TABLE r_getcontent_trend(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    client CHAR NOT NULL DEFAULT '',
    goods_name CHAR NOT NULL DEFAULT '',
    sku_or_spu CHAR NOT NULL DEFAULT '',
    goods_n CHAR NOT NULL DEFAULT '',
    cate2_id INT(10) NOT NULL DEFAULT '0', 
    cate2_name CHAR NOT NULL DEFAULT '',
    cate3_id INT(10) NOT NULL DEFAULT '0',
    cate3_name CHAR NOT NULL DEFAULT '',
    nearly_time CHAR NOT NULL DEFAULT '',
    v_page_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    cate_t_num INT(10) NOT NULL DEFAULT '0',
    v_deep FLOAT(5,2) NOT NULL DEFAULT '0',
    s_t_num INT(10) NOT NULL DEFAULT '0',
    page_stip_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    ave_stop_time CHAR NOT NULL DEFAULT '',
    goods_follow_num INT(10) NOT NULL DEFAULT '0',
    gomment_num INT(10) NOT NULL DEFAULT '0',
    good_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    good_num INT(10) NOT NULL DEFAULT '0',
    order_p_num INT(10) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    order_goods_num INT(10) NOT NULL DEFAULT '0',
    goods_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    vu_price FLOAT(6,2) NOT NULL DEFAULT '0',
    ave_price FLOAT(6,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*销量分析-》访问次数汇总*/
CREATE TABLE r_getcontent_sales_analyse_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_period CHAR NOT NULL DEFAULT '',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_total INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*销量分析-》按下单件数汇总*/
CREATE TABLE r_getcontent_sales_analyse_2(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_period CHAR NOT NULL DEFAULT '',
    order_num INT(10) NOT NULL DEFAULT '0',
    ground_goods_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_total INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*订单明细*/
CREATE TABLE r_getcontent_order_detail(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    client CHAR NOT NULL DEFAULT '',
    pay_way CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    order_id CHAR NOT NULL DEFAULT '',
    price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    favor FLOAT(5,2) NOT NULL DEFAULT '0',
    transporation FLOAT(5,2) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    order_time CHAR NOT NULL DEFAULT '',
    pay_time CHAR NOT NULL DEFAULT '',
    pay_type CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*流量概况*/
CREATE TABLE r_getcontent_rate_general(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    cate CHAR NOT NULL DEFAULT '',
    v_num INT(10) NOT NULL DEFAULT '0',
    pro FLOAT(5,2) NOT NULL DEFAULT '0',
    quantum CHAR NOT NULL DEFAULT '',
    q_v_num INT(10) NOT NULL DEFAULT '0',
    v_frequency INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*小时流量分析*/
CREATE TABLE r_getcontent_hour_analyse(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    v_p_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    ave_stop_time INT(10) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*按天流量分析*/
CREATE TABLE r_getcontent_day_rate(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    v_num INT(10) NOT NULL DEFAULT '0',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    ave_v_deep FLOAT(5,2) NOT NULL DEFAULT '0',
    stip_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    return_7 FLOAT(5,2) NOT NULL DEFAULT '0'
)ENGINE=InnoDB;

/*流量来源*/
CREATE TABLE r_getcontent_rate_source(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_part CHAR NOT NULL DEFAULT '', 
    s_type CHAR NOT NULL DEFAULT '',
    src CHAR NOT NULL DEFAULT '',
    arrive_num INT(10) NOT NULL DEFAULT '0',
    num INT(10) NOT NULL DEFAULT '0',
    num_pro CHAR NOT NULL DEFAULT '',
    trend_analyse CHAR NOT NULL DEFAULT '',
    src_total CHAR NOT NULL DEFAULT '',
    key_analyse CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*访客来源*/
CREATE TABLE r_getcontent_rate_visitor(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    s_type CHAR NOT NULL DEFAULT '',
    src CHAR NOT NULL DEFAULT '',
    v_p_num INT(10) NOT NULL DEFAULT '0',
    v_num INT(10) NOT NULL DEFAULT '0',
    v_deep FLOAT(5,2) NOT NULL DEFAULT '0',
    stip_rate FLOAT(5,2) NOT NULL DEFAULT '0',
    trend_analyse CHAR NOT NULL DEFAULT '',
    src_total CHAR NOT NULL DEFAULT '',
    key_analyse CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*来源成交-》关键词列表*/
CREATE TABLE r_getcontent_resource_strike(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_part CHAR NOT NULL DEFAULT '',
    src_ditch CHAR NOT NULL DEFAULT '',
    src_ditch_trend FLOAT(5,2) NOT NULL DEFAULT '0',
    src_url CHAR NOT NULL DEFAULT '',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_price INT(10) NOT NULL DEFAULT '0',
    order_total INT(10) NOT NULL DEFAULT '0',
    detail CHAR NOT NULL DEFAULT ''
)ENGINE=InnoDB;

/*关键词分析-》商品列表*/
CREATE TABLE r_getcontent_key_analyse_1(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    time CHAR  NOT NULL,
    time_part CHAR NOT NULL DEFAULT '',
    sku CHAR NOT NULL DEFAULT '',
    goods_page CHAR NOT NULL DEFAULT '',
    t_num INT(10) NOT NULL DEFAULT '0',
    order_num INT(10) NOT NULL DEFAULT '0',
    order_price FLOAT(6,2) NOT NULL DEFAULT '0',
    rate FLOAT(5,2) NOT NULL DEFAULT '0',
    spu CHAR NOT NULL DEFAULT '' 
)ENGINE=InnoDB;


