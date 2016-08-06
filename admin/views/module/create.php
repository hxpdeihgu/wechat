<?php
/**
 * @author: hxp
 * @Date: 16/8/2
 * @Time: 下午3:27
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app','后台管理模型');
$this->params['breadcrumbs'][] = ['label'=>$this->title,'url'=>['index']];
$this->params['breadcrumbs'][] = '操作模型';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">操作模型</div>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin([
            'options'=>['class'=>'form-horizontal'],
            'fieldConfig' => [
                'template' => "<div class=\"col-sm-2 text-right\">{label}</div><div class=\"col-sm-8\">{input}</div><div class=\"col-sm-2\">{error}</div>",
            ]
        ]); ?>

        <?= $form->field($model, 'module_name') ?>
        <?= $form->field($model, 'module_name_en') ?>
        <?= $form->field($model, 'module_status')->dropDownList([1=>'开启',0=>'禁用'])->label('状态') ?>

        <div class="form-group text-center">
            <?= Html::submitButton('保存数据', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>