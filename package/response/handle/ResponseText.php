<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 上午11:23
 */

namespace app\package\response\handle;


class ResponseText
{
    public function getResponseText(){
        \Yii::$app->params['text'] = '你好hxp';
        return 'text';
    }
}