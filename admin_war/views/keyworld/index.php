<?php
/**
 * @author: hxp
 * @Date: 16/7/16
 * @Time: 下午6:19
 */
use \yii\helpers\Url;
$this->title = '关键词管理';
$this->params['breadcrumbs'][] = '关键字管理';
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="btn-group">
            <a href="<?=Url::to(['keyworld/text-create'])?>" class="btn btn-default">添加文字</a>
            <a href="<?=Url::to(['keyworld/create'])?>" class="btn btn-success">添加图文</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped text-center">
            <tr>
                <th class="text-center">编号</th>
                <th class="text-center">标题</th>
                <th class="text-center">关键字</th>
                <th class="text-center">操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>
                    <a href=""><i class="iconfont">&#xe600;</i>编辑</a>
                    <a href=""><i class="iconfont">&#xe601;</i>删除</a>
                </td>
            </tr>
            <tr>
                <td colspan="4">没有数据</td>
            </tr>
        </table>
    </div>
</div>
