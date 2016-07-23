<?php
use yii\widgets\ActiveForm;
$this->title = Yii::t('app','登录页面');
?>
<div class="row center-block" style="margin-top: 40px">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel">
            <div class="panel-heading">
                <h3>请登录</h3>
                <hr>
            </div>
            <div class="panel-body">
                <div class="col-sm-6">
                    <?php $form = ActiveForm::begin([
                        'options'=>[
                            'class'=>'contact-us'
                        ]
                    ]); ?>
                        <h3>登陆 <small>WAR微信管理平台</small></h3>
                        <div class="alert alert-warning">错误提示</div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> 记住密码
                            </label>
                            <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span>登录</button>
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
                <div class="col-sm-6">
                    <div class="contact-us contact-right">
                        <h2><small>你可以管理微信服，例如</small></h2>
                        <ul>
                            <li>消息回复</li>
                            <li>菜单设置</li>
                            <li>网页授权</li>
                            <li>第三方应该</li>
                        </ul>
                        <p><a class="create-account-link" id="create-account" href="" data-evar1="AOS: ">没有用户？立即创建一个。</a></p> </div>
                </div>
            </div>
            <div class="panel-footer"><a href="">取消</a><span class="pull-right">如果您有问题， 欢迎随时提问。<span class="glyphicon glyphicon-envelope"></span> <strong>307701097@qq.com</strong></span></div>
        </div>
    </div>
</div>

