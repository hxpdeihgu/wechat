<?php
/**
 * 模块管理类
 * @author: hxp
 * @Date: 16/8/2
 * @Time: 下午3:08
 */

namespace app\admin\controllers;


use app\models\WarModule;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ModuleController extends Controller
{
    public function actionIndex(){
        $query = WarModule::find();
        $queryCount = clone $query;

        $pages = new Pagination(['totalCount'=>$queryCount->count()]);

        $models = $query->limit($pages->limit)->offset($pages->offset)->all();
        return $this->render('index',[
            'model'=>$models,
            'pages'=>$pages
        ]);
    }

    public function actionCreate(){
        $model = new WarModule();
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                $this->redirect(['index']);
            }
        }
        return $this->render('create',['model'=>$model]);
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);
        if($model->load(\Yii::$app->request->post())){
            if($model->save()){
                $this->redirect(['index']);
            }
        }
        return $this->render('create',['model'=>$model]);
    }

    public function actionDelete($id){
        $this->findModel($id)->delete();
        $this->redirect(['index']);
    }

    /**
     * 获取模型
     * @author hxp
     * @param $id
     * @return [null|static]
     * @throws NotFoundHttpException
     */
    private function findModel($id){
        if(($model = WarModule::findOne($id)) !== false){
            return $model;
        }else{
            throw new NotFoundHttpException('页面不存在');
        }
    }
}