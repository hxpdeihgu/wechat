<?php
/**
 * @author: hxp
 * @Date: 16/7/22
 * @Time: 下午6:53
 */
$this->title = Yii::t('app','菜单管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">菜单管理</div>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">菜单一</th>
                    <th class="text-center">菜单二</th>
                    <th class="text-center">
                        菜单三
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="3">
                        <div class="col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item" menu="menu1">
                                    <table>
                                        <tr>
                                            <td width="70%">
                                                <input type="text" name="name[value][]" value="菜单" class="form-control">
                                            </td>
                                            <td width="1%"></td>
                                            <td width="10%">
                                                <div class="text-right btn-group">
                                                <a class="btn btn-sm btn-default" onclick="dodelit(this)">删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70%">
                                                <input type="text" name="name[value][]" value="菜单22" class="form-control">
                                            </td>
                                            <td width="1%"></td>
                                            <td width="10%">
                                                <div class="text-right btn-group">
                                                <a class="btn btn-sm btn-default" onclick="dodelit(this)">本地</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-sm btn-success" onclick="doaddit(this)">添加</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item" menu="menu1">
                                    <table>
                                        <tr>
                                            <td width="70%"><input type="text" name="name[value][]" value="菜单" class="form-control"></td>
                                            <td width="1%"></td>
                                            <td width="10%">
                                                <div class="text-right btn-group">
                                                <a class="btn btn-sm btn-default" onclick="dodelit(this)">删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-sm btn-success" onclick="doaddit(this)">添加</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item" menu="menu1">
                                    <table>
                                        <tr>
                                            <td width="70%"><input type="text" name="name[value][]" value="菜单" class="form-control"></td>
                                            <td width="1%"></td>
                                            <td width="10%">
                                                <div class="text-right btn-group">
                                                <a class="btn btn-sm btn-default" onclick="dodelit(this)">删除</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-sm btn-success" onclick="doaddit(this)">添加</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                   <td colspan="3" class="text-center"><a href="" class="btn btn-primary">保存菜单</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function dodelit(o){
        $(o).parent().parent().parent().parent().parent().parent().remove();
    }
    function doaddit(o){
        var tr = $(o).parent().siblings('ul').children('li:first-child');
        var newtr = tr.clone();
        newtr.find('select').val(tr.find('select').val());
        tr.after(newtr);
        initbookingmsg(newtr);
        newtr.find('select').change(function(){
            newtr.find('input[type="text"]').val('');
            initbookingmsg(newtr);
        });
    }

    function initbookingmsg(tr){
        tr.find('input[type="text"]').each(function(){
            if($.trim($(this).val())==''){
                var hn = $(this).attr('name');
                $(this).attr('placeholder','如：'+tr.find('option:selected').attr(hn));
            }
        });
    }
</script>
