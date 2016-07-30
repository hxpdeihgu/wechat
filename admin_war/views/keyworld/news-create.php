<?php
/**
 * @author: hxp
 * @Date: 16/7/17
 * @Time: 上午11:12
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'war微信管理系统-添加文本消息';
$this->params['breadcrumbs'][] = ['label'=>'回复管理','url'=>['index']];
$this->params['breadcrumbs'][] = '添加文本消息';
?>
<link rel="stylesheet" href="/css/common.css">
<script src="/assets/c76c368e/jquery.js"></script>
<script type="text/javascript" src="/js/vue.min.js"></script>
<script type="text/javascript" src="/js/vue-validator.js"></script>
<script type="text/javascript" src="/js/jquery.ajaxfileupload.js"></script>
<div class="container">
    <div class="clearfix ng-scope" id="js-reply-form" ng-controller="replyForm">
        <form id="reply-form" class="form-horizontal form ng-pristine ng-valid">
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">添加回复规则 <span class="text-muted">删除，修改规则、关键字以及回复后，请提交以保存操作。</span></div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-group" v-bind:class="[name ? 'has-success':'has-error']">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">回复规则名称</label>
                                    <div class="col-sm-6 col-md-8 col-xs-12">
                                        <input type="text" class="form-control" placeholder="请输入回复规则的名称" name="name" v-model="name"">
									<span class="help-block">
										您可以给这条规则起一个名字, 方便下次修改和查看. <br>
									</span>
                                    </div>
                                </div>
                                <div class="form-group" v-bind:class="[key ? 'has-success':'has-error']">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">触发关键字</label>
                                    <div class="col-sm-6 col-md-8 col-xs-12">
                                        <input type="text" class="form-control keyword ng-pristine ng-untouched ng-valid" placeholder="请输入触发关键字" v-model="key"">
                                        <span class="help-block"></span>
                                        <input type="hidden" name="keywords">
									<span class="help-block">
										当用户的对话内容符合以上的关键字定义时，会触发这个回复定义。 <br>
									</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <div class="alert alert-info" style="margin-top:-20px">
                        <i class="fa fa-info-circle"></i>
                        图文可添加多组回复，如果添加了多组回复，系统将随机选择一条回复给粉丝
                    </div>
                    <div class="panel panel-default clearfix">
                        <div class="panel-heading">回复内容</div>
                        <div class="panel-body">
                            <div class="row clearfix reply">
                                <div class="col-xs-6 col-sm-3 col-md-3">
                                    <!-- ngRepeat: items in context.groups -->

                                    <div class="panel-group ng-scope">
                                        <!-- ngRepeat: item in items -->
                                        <template v-for="item in items">
                                            <div class="panel panel-default ng-scope" v-if="$index == 0">
                                                <!-- ngIf: $index == 0 -->
                                                <div class="panel-body ng-scope" >
                                                    <div class="img">
                                                        <i class="default">封面图片</i>
                                                        <img src="{{ item.img }}">
                                                        <span class="text-left ng-binding">{{item.title}}</span>
                                                        <div class="mask">
                                                            <a href="javascript:;" v-on:click="editItem($index,item)"><i class="fa fa-edit"></i>编辑</a>
                                                            <a href="javascript:;" v-on:click="removeItem($index)"><i class="fa fa-times"></i>删除</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end ngIf: $index == 0 -->
                                            </div>
                                            <!-- ngIf: $index != 0 -->
                                            <div class="panel panel-default ng-scope" v-if="$index != 0">
                                                <div class="panel-body ng-scope">
                                                    <div class="text">
                                                        <h4 class="ng-binding">{{item.title}}</h4>
                                                    </div>
                                                    <div class="img">
                                                        <img src="{{ item.img }}">
                                                        <i class="default">缩略图</i>
                                                    </div>
                                                    <div class="mask">
                                                        <a href="javascript:;" v-on:click="editItem($index,item)"><i class="fa fa-edit"></i> 编辑</a>
                                                        <a href="javascript:;" v-on:click="removeItem($index,item)"><i class="fa fa-times"></i> 删除</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                        <div class="panel panel-default" v-show="items.length < 8">
                                            <div class="panel-body" style="padding-right:15px">
                                                <div class="add" v-on:click="items.length >= 8 ? '' : addItem();"><span><i class="fa fa-plus"></i> 添加</span></div>
                                            </div>
                                        </div>
                                        <div class="no ng-binding">{{items.length}}</div>
                                    </div><!-- end ngRepeat: items in context.groups -->
                                </div>


                                <!--编辑框-->
                                <validator name="news">
                                    <div class="col-xs-6 col-sm-9 col-md-9 aside" id="edit-container" style="display: none">
                                        <div style="margin-bottom: {{editHeight}}px;"></div>
                                        <div class="card">
                                            <div class="arrow-left"></div>
                                            <div class="inner">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">标题</label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" v-model="activeItem.title" placeholder="添加图文消息的标题" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">封面</label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <!-- ngIf: context.activeItem.thumb == '' -->
                                                                <div class="col-xs-3 img ng-scope">
                                                                    <span><div  v-on:click = "changeImage(activeItem)"><i class="fa fa-plus-circle green"></i>&nbsp;添加图片</div></span>
                                                                </div><!-- end ngIf: context.activeItem.thumb == '' -->
                                                                <!-- ngIf: context.activeItem.thumb != '' -->
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">图片地址：</label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control ng-pristine ng-untouched ng-valid" v-model="activeItem.img">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <label>
                                                                    封面（大图片建议尺寸：360像素 * 200像素）
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">描述</label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <textarea class="form-control ng-pristine ng-untouched ng-valid" placeholder="添加图文消息的简短描述" v-model="activeItem.des"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group" v-bind:class="[ !$news.url.url ? 'has-success':'has-error']">
                                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">来源</label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="URL地址" v-model="activeItem.url" v-validate:url="['required','url']">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" ng-click="context.selectLink()"><i class="fa fa-external-link"></i> URL链接</button>
                                                                </span>
                                                                </div>
                                                                <span class="help-block" v-if="$news.url.url">URL地址为空，格式：http://www.uqiauto.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </validator>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                    <input name="submit" type="button" v-on:click="send()" value="保存数据" class="btn btn-success col-lg-1 btn-block">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="changeImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加图片</h4>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <label>上传文件: <input type="file" name="UploadForm[imageFile]" id="uploadFile" /></label>
                    <div id="uploads">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" onclick="ok()"  class="btn btn-primary">确定使用</button>
            </div>
        </div>
    </div>
</div>


<script>
    var baseUrl = "";
    var indexAction=0;
    var items = [];
    var name='';
    var key;
    var editHeight=20;
    var imgUrls='';

    var activeItem;

    Vue.validator('url', function (val) {
        return /^(http\:\/\/|https\:\/\/)(.{4,})$/.test(val);
    });
    var vm = new Vue({
        el:'#reply-form',
        data:{
            items,
            key,
            name,
            editHeight,
            activeItem,
            indexAction
        },
        methods: {
            send: function() {
                if(!this.key){
                    alert('触发关键字 不能为空');
                    return false;
                }
                if(!this.name){
                    alert('回复规则名称 不能为空');
                    return false;
                }
                $.post('/answermedia/create',this.$data,function(data){
                    if(data.answer_media_name){
                        alert(data.answer_media_name[0]);
                        return;
                    }
                    if(data.answer_media_key){
                        alert(data.answer_media_key[0]);
                        return;
                    }
                    window.location.href='/admin_war/keyworld/index/';
                },'json');
            },
            editItem:function(index,item){
                switch (index){
                    case 0:
                        this.editHeight = 20;
                        break;
                    case 1:
                        this.editHeight = 200;
                        break;
                    default :
                        this.editHeight = index * 100 +120;
                        break;
                }
                console.log(item);
                this.activeItem = item;
                this.indexAction = index;
            },
            removeItem:function(index){

                this.items.splice(index, 1)
                index = index==0?index:index-1;
                switch (index){
                    case 0:
                        this.editHeight = 20;
                        break;
                    case 1:
                        this.editHeight = 200;
                        break;
                    default :
                        this.editHeight = index * 100 +120;
                        break;
                }
                this.activeItem = this.items[index];
            },
            addItem:function(){
                $('#edit-container').show();
                this.items.push({title:'',img:'',des:'',url:''});
                if(this.items.length == 1){
                    this.activeItem = this.items[0];
                }
            },
            changeImage:function(){
                $('#changeImage').modal('show');
            },
            ok:function(){

            }
        }
    });
    //初始化
    $(document).ready(function() {
        $("#uploadFile").AjaxFileUpload({
            action: '/answermedia/ajaxupload',
            onComplete: function(filename, response) {
                if(response.name){
                    imgUrls = '/'+response.name;
                    $("#uploads").html(
                        $("<img />").attr("src",'/'+response.name).attr("width", 200)
                    );
                }

            }
        });
    });

    //加载图片，并跟新视图
    function ok(){
        vm.activeItem.img = baseUrl+imgUrls;
        vm.items.$set(vm.indexAction,vm.activeItem);
        $('#changeImage').modal('hide');
    }
</script>

