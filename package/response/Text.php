<?php

/**
 * 文本消息处理类
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:23
 */
namespace app\package\response;
use app\package\response\handle\ResponseText;
use app\package\response\template\ImageTpl;
use app\package\response\template\MusicTpl;
use app\package\response\template\NewsTpl;
use app\package\response\template\TextTpl;
use app\package\response\template\VideoTpl;
use app\package\response\template\VoiceTpl;

class Text
{
    /**
     * 处理结果操作
     * @author hxp
     */
    public function setMethod(){
        $method = $this->getResponseText();
        //返回处理方法为空时直接返回
        if(empty($method)){
            echo "SUCCESS";
            return;
        }
        $method = 'resp'.ucfirst($method);
        return $this->$method();
    }

    /**
     * 响应内容处理及类型
     * @author hxp
     * @return [mixed|void]
     */
    private function getResponseText(){
        return (new ResponseText())->getResponseText();
    }

    /**
     * 处理文本消息模板
     * @author hxp
     */
    private function respText(){
        (new TextTpl())->getTpl();
    }

    /**
     * 处理图片消息模板
     * @author hxp
     */
    private function respImage(){
        (new ImageTpl())->getTpl();
    }

    private function respVoice(){
        (new VoiceTpl())->getTpl();
    }

    private function respVideo(){
        (new VideoTpl())->getTpl();
    }

    private function respMusic(){
        (new MusicTpl())->getTpl();
    }

    private function respNews(){
        (new NewsTpl())->getTpl();
    }


}