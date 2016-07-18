<?php

/**
 * 根据不同路由
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:08
 */
namespace app\package;
use app\package\response\Event;
use app\package\response\Image;
use app\package\response\Link;
use app\package\response\Location;
use app\package\response\News;
use app\package\response\Shortvideo;
use app\package\response\Text;
use app\package\response\Video;
use app\package\response\Voice;

class RouterPackage
{
    public function setType(){
        $type = (string) \Yii::$app->params['postObject']->MsgType;
        if(!empty($type)){
            $type = 'set'.ucfirst($type);
            $this->$type();
        }
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
        (new Voice())->setMethod();
    }

    /**
     * 视频为video
     * @author hxp
     */
    public function setVideo(){
        (new Video())->setMethod();
    }

    /**
     * 小视频为shortvideo
     * @author hxp
     */
    public function setShortvideo(){
        (new Shortvideo())->setMethod();
    }

    /**
     * 地理信息
     * @author hxp
     */
    public function setLocation(){
        (new Location())->setMethod();
    }

    /**
     * 消息类型
     * @author hxp
     */
    public function setLink(){
        (new Link())->setMethod();
    }

    /**
     * 事件处理
     * @author hxp
     */
    public function setEvent(){
        (new Event())->setMethod();
    }

}