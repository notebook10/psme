<?php

Route::get('/', 'HomeController@viewHomePage');
Route::get('login','HomeController@showLogin');
Route::post('login','HomeController@login');
Route::get('register','HomeController@showRegister');
Route::post('register','HomeController@insertUser');
Route::get('logout','HomeController@logout');
Route::group(['middleware' => ['auth']], function(){
    Route::get('admin','HomeController@viewAdmin');
});