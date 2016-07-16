<?php

/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 上午11:26
 */
namespace app\package\response\template;
class TextTpl
{
    public function getTpl(){
        $data = \Yii::$app->params['postObject'];
        $resp = \Yii::$app->params['text'];
        $time = time();
        $tpl = "<xml>
                <ToUserName><![CDATA[{$data->FromUserName}]]></ToUserName>
                <FromUserName><![CDATA[{$data->ToUserName}]]></FromUserName>
                <CreateTime>{$time}</CreateTime>
                <MsgType><![CDATA[text]]></MsgType>
                <Content><![CDATA[{$resp}]]></Content>
                </xml>";
        echo $tpl;
    }
}