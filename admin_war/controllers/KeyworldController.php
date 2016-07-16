<?php
/**
 * 关键字处理类
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午4:00
 */

namespace app\admin_war\controllers;


use yii\web\Controller;

class KeyworldController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionCreate(){

    }

    public function actionUpdate($id){

    }

    public function actionDelete($id){

    }

    public function findModel($id){

    }

    public function actionTextCreate(){
        return $this->render('text-create');
    }

    public function actionTextUpdate($id){

    }

    public function actionTextDelete($id){

    }

}