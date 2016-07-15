<?php

/**
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:00
 */
namespace app\package;
class PostXmlPackage
{
    private $postXml;

    /**
     * 设置xml
     * @author hxp
     * @param $postXml
     */
    public function setPostXml($postXml){
        $this->postXml = $postXml;
    }

    /**
     * 得到数据xml
     * @author hxp
     * @return [mixed]
     */
    public function getPostXml(){
        return $this->postXml;
    }

    /**
     * xml转换为数据
     * @author hxp
     * @return [SimpleXMLElement]
     */
    public function xmlToObject(){
        \Yii::$app->params['postObject'] =  simplexml_load_string($this->getPostXml(), 'SimpleXMLElement', LIBXML_NOCDATA);

    }
}