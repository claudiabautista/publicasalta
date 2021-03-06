<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',"HomeController@index");
Route::get('ad/{id}',[
    'uses' => 'AdsController@show',
    'as' => 'ad_show_path'
]
);


Route::get("save_user","HomeController@saveUser");
Route::get("find_user","HomeController@find");
Route::get("edit_user","HomeController@edit");
