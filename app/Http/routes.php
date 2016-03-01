<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => function(){
    return view('index');
}]);

Route::get('institucional', ['as' => 'institucional', 'uses' => function(){
    return view('institucional');
}]);

Route::get('ofertas', ['as' => 'ofertas', 'uses' => function(){
    return view('ofertas');
}]);

Route::get('noticias', ['as' => 'noticias', 'uses' => function(){
    return view('noticias');
}]);

Route::get('contatos', ['as' => 'contatos', 'uses' => function(){
    return view('contatos');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
