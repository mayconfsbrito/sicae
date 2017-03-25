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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('/CotacaoController/index', 'CotacaoController@index');
Route::get('/CotacaoController/cadastrar', 'CotacaoController@cadastrar');
Route::get('/CotacaoController/cotacao', 'CotacaoController@cotacao');
Route::get('/UsuariosController/index', 'UsuariosController@index');
Route::get('/UsuariosController/save', 'UsuariosController@save');