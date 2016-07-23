<?php
/**
 * @author: hxp
 * @Date: 16/7/20
 * @Time: 下午4:32
 */

?>
<script src="/js/angular.js"></script>
<div class="container" ng-app="myApp" style="margin-top: 60px">
<runoob-directive></runoob-directive>
    <div runoob-directive></div>

<script>
    var app = angular.module("myApp", []);
    app.directive("runoobDirective", function() {
        return {
            restrict : "AE",
            template : "<h1>自定义指令!</h1>"
        };
    });
    app.service('test',function(){
        this.testFun = function(x){

        }
    })
</script>

</div>

