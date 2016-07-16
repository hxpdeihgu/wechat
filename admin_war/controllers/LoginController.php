<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午1:38
 */

namespace app\admin_war\controllers;


use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}