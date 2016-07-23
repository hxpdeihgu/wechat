<?php
/**
 * 用户mark包
 * @author: hxp
 * @Date: 16/7/23
 * @Time: 下午5:24
 */

namespace app\admin_war\package;


use app\common\Curl;

class MarkPackage
{
    private $access_token;

    /**
     * 初始化access_token
     */
    public function __construct(){
        $this->access_token = \Yii::$app->cache->get('access_token');
    }

    /**
     *
     * http请求方式: POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "openid":"oDF3iY9ffA-hqb2vVvbr7qxf6A0Q",
        "remark":"pangzi"
        }
     * @author hxp
     * @param $data
     * {
        "errcode":0,
        "errmsg":"ok"
        }

     * @return [mixed]
     */
    public function updateremark($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/user/info/updateremark?access_token='.$this->access_token;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }
}