<?php
/**
 * 微信菜单管理
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午4:03
 */

namespace app\admin_war\controllers;


use yii\web\Controller;

class MenuController extends Controller
{
    public function actionSet(){
        return $this->render('set');
    }
}