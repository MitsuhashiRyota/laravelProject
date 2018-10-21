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
    return view('welcome');
});

// ルートを追加
Route::get('foo/foo4', 'FooController@foo4');

//          BladeTemplateURL, PHP ControllerName Fuction
Route::get('home/', 'indexController@Index');
