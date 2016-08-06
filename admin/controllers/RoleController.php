<?php
/**
 * 角色管理控制器
 * @author: hxp
 * @Date: 16/8/2
 * @Time: 下午4:58
 */

namespace app\admin\controllers;


use app\models\WarRole;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class RoleController extends Controller
{
    public function actionIndex(){
        $query = WarRole::find();
        $queryCount = clone $query;

        $pages = new Pagination(['totalCount'=>$queryCount->count()]);

        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('index',[
            'model'=>$models,
            'pages'=>$pages
        ]);
    }

    public function actionCreate(){
        $model = new WarRole();
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                $this->redirect(['index']);
            }
        }
        return $this->render('create');
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                $this->redirect(['index']);
            }
        }
        return $this->render('create');
    }

    public function actionDelete($id){
        $this->findModel($id)->delete();
        $this->redirect(['index']);
    }

    private function findModel($id){
        if(($model = WarRole::findOne($id)) !== false){
            return $model;
        }else{
            throw new NotFoundHttpException('页面不存在');
        }
    }


}