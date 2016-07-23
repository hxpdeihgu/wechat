<?php
/**
 * @author: hxp
 * @Date: 16/7/15
 * @Time: 下午10:27
 */

namespace app\controllers;


use yii\web\Controller;

class TestController extends Controller
{
    /**
     * 创建数据包
     * @author hxp
     * @throws \yii\db\Exception
     */
    public function actionIndex(){
//        $sql = 'CREATE TABLE `war_wx`.`new_table` (
//                  `id_new` INT NOT NULL,
//                  PRIMARY KEY (`id_new`));
//                ';
//        \Yii::$app->db->createCommand($sql)->execute();
    }

    public function actionAng(){
        return $this->render('ang');
    }
}