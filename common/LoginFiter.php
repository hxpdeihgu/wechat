<?php
/**
 * @author: hxp
 * @Date: 16/7/24
 * @Time: 上午10:53
 */

namespace app\common;


use yii\base\ActionFilter;
use yii\helpers\Url;

class LoginFiter extends ActionFilter
{
    public function beforeAction($action)
    {
        $session = \Yii::$app->getSession();
        if(!$session->has('user_id')){
            \Yii::$app->getResponse()->redirect(Url::to('/login'));
            return;
        }
        return parent::beforeAction($action);
    }

    public function afterAction($action,$result)
    {
        return parent::afterAction($action, $result);
    }
}