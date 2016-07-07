<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', 'MainController@index');
    // Authentication routes...
    Route::get('password/login', 'Auth\AuthController@getLogin');
    Route::post('password/login', 'Auth\AuthController@postLogin');
    Route::get('password/logout', ['middleware' => 'auth', 'uses' => 'Auth\AuthController@logout']);
    // Registration routes...
    Route::get('password/register', 'Auth\AuthController@getRegister');
    Route::post('password/register', 'Auth\AuthController@postRegister');

    // 发送密码重置链接路由
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    //Route::post('password/email', 'Auth\PasswordController@postEmail');

    //Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    //Route::post('password/reset', 'Auth\PasswordController@postReset');

   // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
