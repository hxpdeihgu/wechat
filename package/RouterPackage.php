<?php

/**
 * 根据不同路由
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:08
 */
namespace app\package;
use app\package\response\Image;
use app\package\response\Text;

class RouterPackage
{
    public function setType(){
        $type = \Yii::$app->params['postObject']['MsgType'];
        $this->$type();
    }
    /**
     * 文本类型路由方法
     * @author hxp
     */
    public function setText(){
        (new Text())->setMethod();
    }

    /**
     * 图片内容路由方法
     * @author hxp
     */
    public function setImage(){
        (new Image())->setMethod();
    }

    /**
     * 语音为voice
     * @author hxp
     */
    public function setVoice(){

    }

    /**
     * 视频为video
     * @author hxp
     */
    public function setVideo(){

    }

    /**
     * 小视频为shortvideo
     * @author hxp
     */
    public function setShortvideo(){

    }

    /**
     * 地理信息
     * @author hxp
     */
    public function setLocation(){

    }

    /**
     * 消息类型
     * @author hxp
     */
    public function setLink(){

    }

    /**
     * 事件处理
     * @author hxp
     */
    public function setEvent(){

    }

}