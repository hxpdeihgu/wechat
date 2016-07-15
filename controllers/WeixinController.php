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

    public function actionIndex(){
        $postXml = file_get_contents("php://input");
    }
}