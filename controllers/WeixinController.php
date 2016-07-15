<?php
/**
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午4:57
 */

namespace app\controllers;


use yii\base\Controller;

class WeixinController extends Controller
{
    public function actionIndex()
    {

        if($postStr = file_get_contents('php://input')){

        }else{
            $this->valid();
        }
    }

    /**
     * 验证微信
     * @author hxp
     */
    private function valid()
    {

        $echoStr = \Yii::$app->request->get('echostr');
        if($this->checkSignature()){
            echo $echoStr;
            return;
        }
    }
    /**
     * 微信验证
     * @author hxp
     * @return [bool]
     */
    private function checkSignature()
    {

        $signature = \Yii::$app->request->get('signature');
        $timestamp = \Yii::$app->request->get('timestamp');
        $nonce     = \Yii::$app->request->get('nonce');
        $token     = \Yii::$app->params['token'];

        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );
        if( $tmpStr == $signature ){
            return true;
        }else {
            return false;
        }

    }
}