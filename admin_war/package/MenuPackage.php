<?php

/**
 * 菜单相关的类
 * @author: hxp
 * @Date: 16/7/18
 * @Time: 下午4:38
 */
namespace app\admin_war\package;
use app\common\Curl;

class MenuPackage
{
    private $access_token;

    /**
     * 初始化access_token
     */
    public function __construct(){
        $this->access_token = \Yii::$app->cache->get('access_token');
    }
    /**
     * 创建菜单
     * @author hxp
     * @param $data
     */
    public function create($data){
        $access_token = \Yii::$app->cache->get('access_token');
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$this->access_token;
        $curl = new Curl();
        return $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data,JSON_UNESCAPED_UNICODE))->post($url);

    }


    /**
     * 自定义菜单查询接口
     * @author hxp
     * @return [mixed]
     */
    public function getMenu(){
        $access_token = \Yii::$app->cache->get('access_token');
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token='.$this->access_token;

        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }

    /**
     * 删除菜单
     * @author hxp
     * @return [mixed]
     */
    public function deleteMenu(){
        $access_token = \Yii::$app->cache->get('access_token');
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$this->access_token;
        $curl = new Curl();
        return $curl->get($url);
    }

    /**
     * 创建个性化菜单
     * @author hxp
     * @param $data
     * @return [mixed]
     */
    public function addconditional($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/addconditional?access_token='.$this->access_token;

        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data,JSON_UNESCAPED_UNICODE))->post($url);
        return $result;

    }

    /**
     * 删除个性化菜单
     * @author hxp
     * @return [mixed]
     */
    public function delconditional($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/delconditional?access_token='.$this->access_token;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data,JSON_UNESCAPED_UNICODE))->post($url);

        return $result;
    }

    /**
     * 测试个性化菜单匹配结果
     * @author hxp
     * @param $data
     * @return [mixed]
     */
    public function trymatch($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/trymatch?access_token='.$this->access_token;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data,JSON_UNESCAPED_UNICODE))->post($url);

        return $result;
    }

    /**
     * 获取自定义菜单配置接口
     * @author hxp
     * @return [mixed]
     */
    public function get_current_selfmenu_info(){
        $url = 'https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token='.$this->access_token;

        $curl  = new Curl();
        $result = $curl->get($url);

        return $result;
    }
}