<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午7:48
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'war微信管理系统-添加文本消息';
$this->params['breadcrumbs'][] = ['label'=>'回复管理','url'=>['index']];
$this->params['breadcrumbs'][] = '添加文本消息';
?>
<div class="panel panel-default">
    <div class="panel-heading"><h4>添加文本消息</h4></div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'key_text') ?>
        <?= $form->field($model, 'key_prior') ?>

        <?= $form->field($modelContent, 'content_name') ?>
        <?= $form->field($modelContent, 'content_text') ?>
        <?= $form->field($modelContent, 'content_type_text') ?>
        <?= $form->field($modelContent, 'content_status') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
