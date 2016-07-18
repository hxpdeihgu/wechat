<?php
/**
 * @author: hxp
 * @Date: 16/7/18
 * @Time: 下午3:45
 */

namespace app\package\response\template;


class NewsTpl
{
    public function getTpl(){

        $item = $this->getItem();
        $tpl = "<xml>
                    <ToUserName><![CDATA[toUser]]></ToUserName>
                    <FromUserName><![CDATA[fromUser]]></FromUserName>
                    <CreateTime>12345678</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>
                    <ArticleCount>2</ArticleCount>
                    <Articles>
                       {$item}
                    </Articles>
                </xml>";
        return $tpl;
    }

    protected function getItem(){
        $item = '<item>
                    <Title><![CDATA[%s]]></Title>
                    <Description><![CDATA[%s]]></Description>
                    <PicUrl><![CDATA[%s]]></PicUrl>
                    <Url><![CDATA[%s]]></Url>
                 </item>';

        return $item;
    }
}