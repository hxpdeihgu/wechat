<?php
/**
 * 网页授权access_token
 * @author: hxp
 * @Date: 16/7/18
 * @Time: 下午5:11
 */

namespace app\package;


use app\common\Curl;

class WebAccessToken
{
    public function authorize($redirect_uri,$scope='SCOPE',$state='STATE'){
        $appID = \Yii::$app->params['AppID'];
        $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appID}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state={$state}#wechat_redirect";
        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }

    public function access_token($code){
        $appID = \Yii::$app->params['AppID'];
        $appSecret = \Yii::$app->params['AppSecret'];
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appID}&secret={$appSecret}&code=$code&grant_type=authorization_code";
        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }

    public function refresh_token($refresh_token){
        $appID = \Yii::$app->params['AppID'];
        $url = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid={$appID}&grant_type=refresh_token&refresh_token={$refresh_token}";
        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }

    public function userinfo($access_token){
        $appID = \Yii::$app->params['AppID'];
        $url = "https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$appID}&lang=zh_CN";
        $curl = new Curl();
        $result = $curl->get($url);
        return $result;
    }
}