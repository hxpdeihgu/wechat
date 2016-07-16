<?php

namespace app\admin_war;

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

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
