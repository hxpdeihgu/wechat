<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 上午11:23
 */

namespace app\package\response\handle;


use app\models\WarKey;
use app\models\WarKeyContent;

class ResponseText
{
    /**
     * 对接收到的数据进行分析处理
     * @author hxp
     */
    public function getResponseText(){
        $text = (string) \Yii::$app->params['postObject']->Content;
        $result = WarKey::find()->where(['key_text'=>$text])->orderBy(['key_prior' => SORT_DESC])->one();
        if(empty($result)){
            return;
        }
        $result = WarKeyContent::find()->where(['key_id'=>$result->key_id])->one();
        if(empty($result)){
            return;
        }
        \Yii::$app->params[$result->content_type_text] = $result;
        return $result->content_type_text;
    }
}