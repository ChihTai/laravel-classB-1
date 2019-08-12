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
Route::get('/admin', function () {
    return view('admin',['main'=>'title']);
});
Route::get('/admin/title', function () {
    return view('admin',['main'=>'title']);
});
Route::get('/admin/ad', function () {
    return view('admin',['main'=>'ad']);
});



Route::get('/news', function () {
    return view('index',["main"=>"news"]);
});
Route::get('/login', function () {
    return view('index',["main"=>"login"]);
});