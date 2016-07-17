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
            <a href="<?=Url::to(['keyworld/create','type'=>'text'])?>" class="btn btn-default">添加文字</a>
            <a href="<?=Url::to(['keyworld/create','type'=>'news'])?>" class="btn btn-success">添加图文</a>
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
            <?php if(!empty($model)){?>
            <?php foreach($model as $k=>&$v){?>
            <tr>
                <td><?=$k+1?></td>
                <td><?=$v->key_name?></td>
                <td><?=$v->key_text?></td>
                <td>
                    <a href="<?=Url::to(["keyworld/update",'id'=>$v->key_id,'type'=>$v->key_type_text])?>"><i class="iconfont">&#xe600;</i></a>
                    <a href="<?=Url::to(["keyworld/delete",'id'=>$v->key_id])?>" title="删除" aria-label="删除" data-confirm="您确定要删除此项吗？" data-method="post" data-pjax="0"><i class="iconfont">&#xe601;</i></a>
                </td>
            </tr>
            <?php }?>
            <tr>
                <td colspan="4">
                    <?php
                    echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages,
                        'nextPageLabel' => '下一页',
                        'prevPageLabel' => '上一页',
                        'firstPageLabel' => '首页',
                        'lastPageLabel' => '尾页',
                    ]);
                    ?>
                </td>
                <?php }else{?>
                <td colspan="4">没有数据</td>
                <?php }?>
            </tr>
        </table>
    </div>
</div>
