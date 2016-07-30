<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://at.alicdn.com/t/font_1468667136_462986.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--[if IE 8]>
    <div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>警告!</strong> 您的浏览器版本过低，可能部分功能无法使用.
    </div>
    <![endif]-->
    <?php
    NavBar::begin([
        'brandLabel' => 'War321|微信管理平台',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-fixed-top',
            'style'=>'background: #294372;'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right item'],
        'items' => [
            ['label' => '欢迎。。。', 'url' => ['/site/index'],'options' => ['style'=>'border-right: 1px solid #54698e;']],
            ['label' => '退出', 'url' => ['/site/about'],'options' => ['style'=>'border-right: 1px solid #54698e;']],
            ['label' => '作者详情', 'url' => ['/site/contact'],'options' => ['style'=>'border-right: 1px solid #54698e;']],
            ['label' => '交流群', 'url' => ['/site/contact']],

        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink'=>[
                'label' => '后台首页',
                'url' => '/admin_war'
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <div class="col-sm-2" style="padding: 0;margin: 0;">
        <?=$this->render('_menu')?>
        </div>
        <div class="col-sm-10" style="padding: 0;margin: 0">
            <div class="section-content fn-right" style="padding:0px;border-radius: 4px;">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <a href="http://www.war321.com">War321|微信管理系统</a></p>
        <p class="pull-right">技术支持：<a href="http://www.war321.com">化学品</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
