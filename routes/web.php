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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list-user', 'UserController@getListUser');
Route::get('/testAngular', 'UserController@testAngular');
Route::get('/angular', 'UserController@displaytestAngular');
Route::post('/postSaveUserEdited', 'UserController@postSaveUserEdited');


//test folder

Route::get('/testhome', 'Test@getTestHome');
Route::get('/test1', 'Test@getTest1');
Route::get('/list_order', 'OrderController@getViewOrder');
Route::get('/view_list_order', 'OrderController@displayViewOrder');
Route::get('/test3', 'Test@getTest3');
Route::post('/edit_order', 'OrderController@postEditOrder');

