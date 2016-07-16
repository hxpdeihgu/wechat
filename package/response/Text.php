<?php

/**
 * 文本消息处理类
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:23
 */
namespace app\package\response;
use app\package\response\handle\ResponseText;
use app\package\response\template\TextTpl;

class Text
{
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

    private function getResponseText(){
        return (new ResponseText())->getResponseText();
    }

    private function respText(){
        (new TextTpl())->getTpl();
    }

    private function respImage(){

    }

    private function respVoice(){

    }

    private function respVideo(){

    }

    private function respMusic(){

    }

    private function respNews(){

    }


}