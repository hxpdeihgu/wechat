<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午1:38
 */

namespace app\admin_war\controllers;


use app\models\WarUser;
use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex(){
        $this->doLogin();//验证用户登录
        return $this->render('index');
    }

    /**
     * 用户登录验证
     * @author hxp
     */
    private function doLogin(){
        $request = \Yii::$app->request;
        $data = WarUser::find()->where([
            'user_name'=>$request->post('name'),
            'user_password'=>md5($request->post('password')),
            'user_status'=>1
        ])->one();

        if(empty($data)){
            \Yii::$app->session->addFlash('login','用户名和密码错误');
        }else{
            \Yii::$app->session->set('user_name',$data->user_name);
            \Yii::$app->session->set('user_id',$data->user_id);
            $this->redirect(['default/index']);
        }
    }
}