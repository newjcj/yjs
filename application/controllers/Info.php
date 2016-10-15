<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller {

    private $data = array();
    private $error_message = '';
    private $status_code = 200;
    private $error_code = 0;
    private $content_type = 'application/json';

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        set_time_limit(0);
        $this->_check_method('get');
        $regNo = $this->input->get('regNo');
        $intCls = $this->input->get('intCls');
        if ($this->_required_data($regNo) && $this->_required_data($intCls)) {
//        $intCls = isset($params['intCls']) ? $params['intCls'] : '';
            $sql = 'select img.id as tmImg,'
                    . 'info.`注册/申请号` as regNo,'
                    . 'info.`国际分类号` as intCls,'
                    . 'tname.tm_name as tmName,'
                    . 'info.`申请日期` as appDate,'
                    . 'info.`申请人名称(中文)` as applicantCn,'
                    . 'info.`申请日期` as appDate,'
//                . 'info.`申请人身份证号` as idCardNo,'
                    . 'info.`申请人地址(中文)` as addressCn,'
//                . 'info.`共有申请人1` as applicantOther1,'
//                . 'info.`共有申请人2` as applicantOther2,'
                    . 'info.`申请人名称(英文)` as applicantEn,'
                    . 'info.`申请人地址(英文)` as addressEn,'
//                . 'info.`代理公司` as agent,'
                    . 'info.`初审公告期号` as announcementIssue,'
                    . 'info.`初审公告日期` as announcementDate,'
                    . 'info.`注册公告期号` as regIssue,'
                    . 'info.`注册公告日期` as regDate,'
                    . 'info.`专用期限` as privateDate,'
                    . 'info.`商标类型` as category,'
                    . 'info.`后期指定日期` as hqzdrq,'
                    . 'info.`国际注册日期` as gjzcrq,'
                    . 'info.`优先权日期` as yxqrq,'
                    . 'info.`颜色组合` as color,'
//                . 'info.`使用商品` as goods,'
                    . 'info.`商标流程` as flow';
            $sql.='  from `detailedinfo` as info ';
            $sql.=' left join infoimg as img on img.id=info.ddid ';
            $sql.=' left join tm_name as tname on tname.ddid=info.ddid ';
            $sql.=' where  info.`注册/申请号`="' . $regNo . '" and info.`国际分类号`="' . $intCls . '"';
            $sql.=' limit 1 ';
            $data = $this->db->query($sql)->row_array();
//            var_dump($data['flow']);exit;
            if ($data) {
                //处理 `商标流程`字段
                $flow = explode(']', $data['flow']);
                $res = array();
                foreach ($flow as $key => $val) {
                    if ($key == 0) {//去掉第一个
                        continue;
                    } elseif (empty($val)) {
                        continue;
                    }
                    $one = str_replace('[', '', $val);
                    $content = explode(',', $one);
                    $res[$key - 1]['flowDate'] = $this->_date_replace($content[1]);
                    $res[$key - 1]['flowName'] = $content[0];
                }
                $data['appDate'] = $this->_date_replace($data['appDate']);
                $data['announcementDate'] = $this->_date_replace($data['announcementDate']);
                $data['regDate'] = $this->_date_replace($data['regDate']);
                $data['privateDate'] = $this->_date_replace($data['privateDate']);
                $data['regDate'] = $this->_date_replace($data['regDate']);
                $data['flow'] =$res;
                $data['tmImg'] = 'pic.sbj.com/pic.php?id=' . $data['tmImg'];
                $data['ret'] = 0;
            } else {
                $data['ret'] = -1;
                $this->error_message = '未找到数据';
            }
            $this->data = $data;
        }
        $this->_response();
    }

    private function _date_replace($string) {
        $data = '';
        if (is_string($string)) {
            $data = str_replace('年', '-', $string);
            $data = str_replace('月', '-', $data);
            $data = str_replace('日', '', $data);
        }
        return $data;
    }

    /**
     * @param $data          返回数据
     * @param $error_message 错误消息文字
     * @param $content_type  content_type
     * @param $error_code    约定错误代码  参考 @link http://mp.weixin.qq.com/wiki/17/fa4e1434e57290788bde25603fa2fcbd.html
     */
    private function _response() {
        $this->output
                ->set_status_header(200)
                ->set_content_type($this->content_type)
                ->set_output(json_encode($this->data, JSON_UNESCAPED_UNICODE));
    }

    private function _404() {
        $this->status_code = 404;
        $this->error_message = 'Not Found';
        $this->_response();
    }

    /**
     * 检查提交方式是否是指定的
     * @return void
     */
    private function _check_method($method = 'POST') {
        if (strtolower($method) != strtolower($_SERVER['REQUEST_METHOD'])) {
            $this->error_message = '不允许的请求方法';
            $this->status_code = 405;
            show_error($this->error_message, $this->status_code);
        }
    }

    /**
     * 用正则表达式检查提交的数据格式
     * @param string $pattern '~some regex~'
     * @param string $check 测试的数据
     */
    private function _check_format($pattern, $check) {
        if (!preg_match($pattern, $check)) {
            $this->error_message = '无效的数据格式';
            $this->error_code = 10000;
            return false;
        }
        return true;
    }

    /**
     * @param mixed $required_filed
     * @return boolen
     */
    private function _required_data($required_data) {
        if (is_array($required_data)) {
            foreach ($required_data as $required_filed) {
                if (false === $this->_required_data($required_filed)) {
                    return false;
                }
            }
        } else {
            if (empty($required_data) || ('' == $required_data)) {
                $this->error_message = '数据字段不能为空';
                $this->error_code = 10001;
                return false;
            }
        }

        return true;
    }

}
