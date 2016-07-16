<?php

namespace app\admin_war\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin_war` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
