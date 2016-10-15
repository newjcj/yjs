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
    id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
);
:update




/*关系表*/
CREATE TABLE r_relation(
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid INT(10) UNSIGNED NOT NULL,
    goods_id INT(20) UNSIGNED NOT NULL
);







CREATE TABLE `app_margin`.`tb_status` (
    `appid` int(10) UNSIGNED NOT NULL,
    `freeze` int(10) NOT NULL DEFAULT 0,
    `create_time` datetime NOT NULL,
    `change_time` datetime NOT NULL,
    PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



insert into r_user(user,password,email,shop_user,shop_password,statu) values('admin',md5('admin'),'admin@admin.com','adminshop',md5('adminshop'),0);

