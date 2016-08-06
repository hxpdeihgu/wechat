<?php
/**
 * @author: hxp
 * @Date: 16/8/2
 * @Time: 下午5:26
 */
$this->title = Yii::t('app','权限管理设置');
$this->params['breadcrumbs'][] = ['label'=>$this->title,'url'=>['index']];
$this->params['breadcrumbs'][] = '设置权限';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">设置权限</div>
    </div>
    <div class="panel-body">
        <form class="form-inline">
            <div class="form-group">
                <label for="exampleInputEmail1">角色名称</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <hr>
            <div class="well">
                <p class="panel-title">
                    <label>
                        <input type="checkbox">
                    </label>
                    消息管理
                </p>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                    <label>
                        <input type="checkbox"> <span style="padding-right:10px">消息管理</span>
                    </label>
                </div>
                <hr>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
