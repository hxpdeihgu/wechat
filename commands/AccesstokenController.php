<?php
/**
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:36
 */

namespace app\commands;


use app\common\Curl;
use yii\console\Controller;

class AccesstokenController extends Controller
{
    public function actionIndex(){
        $appID = \Yii::$app->params['AppID'];
        $appSecret = \Yii::$app->params['AppSecret'];
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appID}&secret={$appSecret}";

        $curl = new Curl();
        $result = $curl->get($url);
        $result = json_decode($result);

        if(isset($result->access_token)){
            \Yii::$app->cache->set('access_token',$result->access_token,7100);
            echo 'get access_token success';
        }else{
            echo 'get access_token fail';
        }
    }

}