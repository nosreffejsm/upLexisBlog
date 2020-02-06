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
    return view('home');
});



Route::get('/login',['as'=>'login','uses'=>'loginController@index']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'loginController@entrar']);
Route::get('/login/sair',['as'=>'sair','uses'=>'loginController@sair']);


Route::group(['middleware'=>'auth'],function(){

Route::get('/artigosList',['as'=>'artigosList','uses'=>'artigoController@list']);
Route::get('/artigosAdd',['as'=>'artigosAdd','uses'=>'artigoController@add']);
Route::post('/artigosSave',['as'=>'artigosSave','uses'=>'artigoController@save']);
Route::get('/artigosDel{id}',['as'=>'artigosDel','uses'=>'artigoController@del']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
