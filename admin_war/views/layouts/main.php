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
            <div id="J-sidenav" class="mi-sidebar" style="border-radius: 4px;">
                <div class="account-info fn-clear">
                    <div class="account-main">
                        <a class="account-photo account-link" href="/platform/baseInfo.htm" seed="accountMain-accountPhoto" smartracker="on">
                            <img class="avatar-img" src="https://t.alipayobjects.com/images/publichome/T1rQXrXdhaXXb1upjX.jpg " alt="" width="66" height="66/">
                            <img src="https://i.alipayobjects.com/i/ecmng/png/201407/30ROPfhMeD.png" class="avatar-round">
                        </a>
                        <a class="account-name" href="/platform/baseInfo.htm" seed="accountMain-accountName" smartracker="on"><span>零零商</span></a>
                    </div>
                </div>
                <dl class="mi-sidenav">
                    <dt class="main-menu" data-link="">
                    <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201407/35WEb0s1Tj.png" seed="mainMenuDiv-iIEcmngPng20140735WEb0s1Tj" smartracker="on"></div>
                    <a href="index.htm" class="menu-name " seed="mainMenu-menuName" smartracker="on">首页</a>
                    </dt>

                    <!------------消息-------------->
                    <dt class="main-menu menu-parent">
                    <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201407/35UzHRrtYN.png" seed="mainMenuDiv-iIEcmngPng20140735UzHRrtYN" smartracker="on"></div>
                    <a href="javascript:;" class="menu-toggle" seed="mainMenu-menuToggle" smartracker="on">消息</a>
                    </dt>
                    <dd class="sub-menu">
                        <ul class="sub-menu-list">
                            <li class="sub-menu-item "><a href="sendMessage.htm" class="sub-menu-name " seed="subMenuItem-subMenuName" smartracker="on">群发广播</a></li>
                            <li class="sub-menu-item customerServiceConfig fn-hide"><a href="customerServiceShow.htm" class="sub-menu-name " seed="subMenuItem-subMenuNameT1" smartracker="on">多客服</a></li>
                            <li class="sub-menu-item replayConfig"><a href="reply.htm" class="sub-menu-name " seed="subMenuItem-subMenuNameT2" smartracker="on">用户消息</a><span class="globTip" style="display:none;width: 10px;height: 10px;margin: -29px 0 0 121px;float: left;background-color: #f73557;border-radius: 50%;"></span></li>

                            <li class="sub-menu-item"><a href="autoReply.htm" class="sub-menu-name " seed="subMenuItem-subMenuNameT3" smartracker="on">自动回复</a></li>
                            <li class="sub-menu-item"><a href="messageTemplate.htm" class="sub-menu-name-end " seed="subMenuItem-subMenuNameEnd" smartracker="on">模板消息</a></li>
                        </ul>
                    </dd>
                    <!------------管理-------------->
                    <dt class="main-menu menu-parent">
                    <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201407/35UzHWhbV1.png" seed="mainMenuDiv-iIEcmngPng20140735UzHWhbV1" smartracker="on"></div>
                    <a href="javascript:;" class="menu-toggle down-current" seed="mainMenu-menuToggleT1" smartracker="on">管理</a>
                    </dt>
                    <dd class="sub-menu">
                        <ul class="sub-menu-list">
                            <li class="sub-menu-item"><a href="material.htm" class="sub-menu-name " seed="subMenuItem-subMenuNameT4" smartracker="on">素材管理</a></li>
                            <li class="sub-menu-item menuManger"><a href="queryMenu.htm" class="sub-menu-name  sub-menu-current" data-key="menuinfo" seed="subMenuItem-subMenuNameT5" smartracker="on">菜单管理<span id="J_theRBI" class="menutheRBI" style="display: none;"></span></a></li>
                            <li class="sub-menu-item"><a href="group.htm?action=list" class="sub-menu-name " seed="subMenuItem-subMenuNameT6" smartracker="on">用户管理</a></li>
                            <!-- FD:153:publichome/consultCenterManageSwitch/topbars.vm:START --><!-- FD:153:publichome/consultCenterManageSwitch/topbars.vm:1114:consultCenterManageSwitch/ads.schema:左侧菜单开关（咨询中心）:START -->
                            <!-- FD:153:publichome/consultCenterManageSwitch/topbars.vm:1114:consultCenterManageSwitch/ads.schema:左侧菜单开关（咨询中心）:END -->

                            <!-- FD:153:publichome/consultCenterManageSwitch/topbars.vm:END -->                                <!-- <li class="sub-menu-item"><a href="consultCenterManage.htm" class="sub-menu-name-end ">咨询中心管理</a></li> -->
                        </ul>
                    </dd>
                    <!------------数据-------------->
                    <!--
                            <dt class="main-menu ">
                            <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201404/2WOolFKWzF.png" width="63" height="50"></div>
                            <a href="https://fuwu.alipay.com:443/platform/followData.htm" class="menu-name ">数据
                            </a>
                            </dt>
                     -->

                    <dt class="main-menu  menu-parent">
                    <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201407/35UzHXjARj.png" seed="mainMenuDiv-iIEcmngPng20140735UzHXjARj" smartracker="on"></div>
                    <a href="" class="menu-toggle" seed="mainMenu-menuToggleT2" smartracker="on">数据</a>
                    </dt>
                    <dd class="sub-menu">
                        <ul class="sub-menu-list">
                            <li class="sub-menu-item"><a href="followData.htm" data-key="menuinfo" class="sub-menu-name " seed="subMenuItem-subMenuNameT7" smartracker="on">用户分析</a></li>
                            <li class="sub-menu-item "><a href="graphicdata.htm" data-key="menuinfo" class="sub-menu-name " seed="subMenuItem-subMenuNameT8" smartracker="on">图文分析</a></li>
                            <li class="sub-menu-item "><a href="transactiondata.htm" data-key="menuinfo" class="sub-menu-name " seed="subMenuItem-subMenuNameT9" smartracker="on">交易分析</a></li>
                            <li class="sub-menu-item "><a href="menuData.htm" data-key="menuinfo" class="sub-menu-name " seed="subMenuItem-subMenuNameT10" smartracker="on">菜单分析</a></li>
                            <li class="sub-menu-item "><a href="visitData.htm" data-key="menuinfo" class="sub-menu-name-end " seed="subMenuItem-subMenuNameEndT1" smartracker="on">访问分析</a></li>
                        </ul>
                    </dd>

                    <!------------推广-------------->
                    <dt class="main-menu  menu-parent">
                    <div class="main-menu-div fn-left"><img src="https://i.alipayobjects.com/i/ecmng/png/201407/35UzHcCwLn.png" seed="mainMenuDiv-iIEcmngPng20140735UzHcCwLn" smartracker="on"></div>
                    <a href="javascript:;" class="menu-toggle" seed="mainMenu-menuToggleT3" smartracker="on">推广</a>
                    </dt>
                    <dd class="sub-menu">
                        <ul class="sub-menu-list">
                            <li class="sub-menu-item"><a href="promotion.htm" class="sub-menu-name " seed="subMenuItem-subMenuNameT11" smartracker="on">服务推广</a></li>
                            <li class="sub-menu-item "><a href="qrcodelist.htm" class="sub-menu-name-end " seed="subMenuItem-subMenuNameEndT2" smartracker="on">二维码</a></li>

                        </ul>
                    </dd>
                </dl>
            </div>
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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
