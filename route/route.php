<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
//


//设置全局变量规则
Route::pattern([
    'id'   => '\d+',
    'type'  => '\d+',
    'page'  => '\d+',
    'limit'  => '\d+',
]);

/*
 *
 * 前端路由处理模块
 *
 * */
Route::get('/','admin/login/index');




//miss路由：没有匹配路由时执行
//Route::miss('/');
//获取验证码处理
Route::post('/getCode/:mobile/:type/[:over]','index/Verify/getCode');
//图片上传处理
Route::get('uploader','admin/Uploader/uploader');





















return [

];
