<?php

namespace app\admin_war\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin_war` module
 */
class DefaultController extends Controller
{
    /**
     * 个人中心
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * 修改密码
     * @author hxp
     * @return [string]
     */
    public function actionRpassword(){
        return $this->render('rpassword');
    }

}
