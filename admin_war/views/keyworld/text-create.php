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
        <?php $form = ActiveForm::begin([
            'options'=>['class'=>'form-horizontal'],
            'fieldConfig' => [
                'template' => "<div class=\"col-sm-2 text-right\">{label}</div><div class=\"col-sm-8\">{input}</div><div class=\"col-sm-2\">{error}</div>",
            ]
        ]); ?>
        <input type="hidden" name="WarKey[key_type_text]" value="text">
        <?= $form->field($model, 'key_name') ?>
        <?= $form->field($model, 'key_text') ?>
        <?= $form->field($model, 'key_prior')->label('优先值') ?>

        <?= $form->field($modelContent, 'content_text')->textarea()->label('回复内容') ?>

        <div class="form-group text-center">
            <?= Html::submitButton('保存', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
