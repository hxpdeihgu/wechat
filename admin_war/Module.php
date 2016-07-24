<?php

namespace app\admin_war;
use app\common\LoginFiter;

/**
 * admin_war module definition class
 */
class Module extends \yii\base\Module
{
    public $layout = 'main';
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\admin_war\controllers';

    public function behaviors()
    {
        return [
            'access'=>[
                'class'=>LoginFiter::className(),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
