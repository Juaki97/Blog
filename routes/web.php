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

/*Route::get('articles/{nombre?}', function ($nombre = "NS") {
    echo 'El nombre es ' . $nombre;
});*/

Route::group(['prefix' => 'articles'], function(){
    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as' => 'articlesView'
    ]);
});