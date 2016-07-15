<?php
/**
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午5:36
 */

namespace app\commands;


use yii\console\Controller;

class AccesstokenController extends Controller
{
    public function actionIndex($id,$bb){
        echo $bb.$id."\n";
        \Yii::$app->params['a'] = $id;
    }

    public function actionTest(){
       echo  \Yii::$app->params['a'];
    }
}