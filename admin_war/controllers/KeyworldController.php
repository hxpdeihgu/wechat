<?php
/**
 * 关键字处理类
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午4:00
 */

namespace app\admin_war\controllers;


use app\models\WarKey;
use app\models\WarKeyContent;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class KeyworldController extends Controller
{
    public function actionIndex(){
        $query = WarKey::find()->orderBy('key_id desc');
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
            'model' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionCreate($type){
        $this->findType($type);//判断类型是否正确
        $model = new WarKey();
        $modelContent = new WarKeyContent();

        if($model->load(\Yii::$app->request->post()) && $model->save()){
            if($modelContent->load(\Yii::$app->request->post())){
                $modelContent->key_id = $model->key_id;
                if($modelContent->save()){
                    $this->redirect(['index']);
                }
            }
        }
        return $this->render($type.'-create',['model'=>$model,'modelContent'=>$modelContent]);
    }

    public function actionUpdate($id,$type){
        $this->findType($type);//判断类型是否正确

        $model = $this->findModel($id);
        $modelContent = $this->findModelContent($model->key_id);
        if($model->load(\Yii::$app->request->post()) && $model->save()){
            if($modelContent->load(\Yii::$app->request->post())){
                $modelContent->content_type_text = 'text';
                $modelContent->key_id = $model->key_id;
                if($modelContent->save()){
                    $this->redirect(['index']);
                }
            }
        }
        return $this->render($type.'-create',['model'=>$model,'modelContent'=>$modelContent]);
    }

    public function actionDelete($id){
        $this->findModel($id)->delete();
        $this->findModelContent($id)->deleteAll();
        $this->redirect(['index']);
    }

    private function findModel($id){
        if(($mode = WarKey::findOne($id)) !== null){
            return $mode;
        }else{
            throw new NotFoundHttpException('您访问的页面不存在');
        }
    }

    private function findModelContent($key_id){
        $mode = WarKeyContent::find()->where(['key_id'=>$key_id])->one();
        if($mode!== null){
            return $mode;
        }else{
            throw new NotFoundHttpException('您访问的页面不存在');
        }
    }

    private function findType($type){
        $typeArray = ['text','news'];
        if(!in_array($type,$typeArray)){
            throw new NotFoundHttpException('您访问的页面不存在');
        }
    }

}