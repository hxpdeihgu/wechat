<?php
/**
 * 用户标签管理包
 * @author: hxp
 * @Date: 16/7/23
 * @Time: 下午5:10
 */

namespace app\admin_war\package;


use app\common\Curl;

class TagsPackage
{
    private $access_token;

    /**
     * 初始化access_token
     */
    public function __construct(){
        $this->access_token = \Yii::$app->cache->get('access_token');
    }
    /**
     * 1. 创建标签
     * @author hxp
     * @param $data
     * @return [mixed]
     *
     * demo
     * ttp请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/create?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "tag" : {
        "name" : "广东"//标签名
        }
        }
     */
    public function create($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/tags/create?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**2. 获取公众号已创建的标签
     * @author hxp
     * {
        "tags":[{
        "id":1,
        "name":"每天一罐可乐星人",
        "count":0 //此标签下粉丝数
        },{
        "id":2,
        "name":"星标组",
        "count":0
        },{
        "id":127,
        "name":"广东",
        "count":5
        }
        ]
        }
     * @return [mixed]
     */
    public function getTags(){
        $url = 'https://api.weixin.qq.com/cgi-bin/tags/get?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }

    /**
     * 3. 编辑标签
     * post data
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/update?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "tag" : {
        "id" : 134,
        "name" : "广东人"
        }
        }
     * @author hxp
     * @param $data
     * {
        "errcode":0,
        "errmsg":"ok"
        }
     * @return [mixed]
     */
    public function update($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/tags/update?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**
     * 4. 删除标签
     *
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/delete?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "tag":{
        "id" : 134
        }
        }
     * @author hxp
     * @param $data
     * {
        "errcode":0,
        "errmsg":"ok"
        }
     * @return [mixed]
     */
    public function delete($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/tags/delete?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**
     * 5. 获取标签下粉丝列表
     *
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/user/tag/get?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "tagid" : 134,
        "next_openid":""//第一个拉取的OPENID，不填默认从头开始拉取
        }
     * @author hxp
     * @param $data
     *
     * {
        "count":2,//这次获取的粉丝数量
        "data":{//粉丝列表
        "openid":[
        "ocYxcuAEy30bX0NXmGn4ypqx3tI0",
        "ocYxcuBt0mRugKZ7tGAHPnUaOW7Y"
        ]
        },
        "next_openid":"ocYxcuBt0mRugKZ7tGAHPnUaOW7Y"//拉取列表最后一个用户的openid
        }
     * @return [mixed]
     */
    public function userGetTags($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/user/tag/get?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**
     * 1. 批量为用户打标签
     *
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/members/batchtagging?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "openid_list" : [//粉丝列表
        "ocYxcuAEy30bX0NXmGn4ypqx3tI0",
        "ocYxcuBt0mRugKZ7tGAHPnUaOW7Y"
        ],
        "tagid" : 134
        }
     * @author hxp
     * @param $data
     * {
        "errcode":0,
        "errmsg":"ok"
        }
     * @return [mixed]
     */
    public function batchtagging($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/user/tag/get?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**
     * 2. 批量为用户取消标签
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/members/batchuntagging?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "openid_list" : [//粉丝列表
        "ocYxcuAEy30bX0NXmGn4ypqx3tI0",
        "ocYxcuBt0mRugKZ7tGAHPnUaOW7Y"
        ],
        "tagid" : 134
        }
     * @author hxp
     * @param $data
     * {
        "errcode":0,
        "errmsg":"ok"
        }
     * @return [mixed]
     */
    public function batchuntagging($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/user/tag/get?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }

    /**
     * 3. 获取用户身上的标签列表
     * http请求方式：POST（请使用https协议）
        https://api.weixin.qq.com/cgi-bin/tags/getidlist?access_token=ACCESS_TOKEN
        POST数据格式：JSON
        POST数据例子：
        {
        "openid" : "ocYxcuBt0mRugKZ7tGAHPnUaOW7Y"
        }
     * @author hxp
     * @param $data
     * {
        "tagid_list":[//被置上的标签列表
        134,
        2
        ]
        }
     * @return [mixed]
     */
    public function getidlist($data){
        $url = 'https://api.weixin.qq.com/cgi-bin/tags/getidlist?access_token='.$this->access_token;;
        $curl = new Curl();
        $result = $curl->setOption(CURLOPT_POSTFIELDS,json_encode($data))->post($url);
        return $result;
    }
}