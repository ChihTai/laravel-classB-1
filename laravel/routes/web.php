<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',["main"=>"index"]);
});
Route::get('/admin', "TitleCT@index");
Route::get('/admin/title', "TitleCT@index");

Route::get('/admin/ad', function () {
    return view('admin',['main'=>'ad']);
});



Route::get('/news', function () {
    return view('index',["main"=>"news"]);
});
Route::get('/login', function () {
    return view('index',["main"=>"login"]);
});


//後台更新圖片的請求路徑

Route::get('/admin/update/title/{id}', "TitleCT@updateImg");



//後台新增資料
Route::get('/admin/add/title', "TitleCT@create");


//api的路由
Route::post('/api/add/title', "TitleCT@store");