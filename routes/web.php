<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main','middleware' => ['locale.set']],function () {

    Route::get('/', 'IndexController@index')->name('main');
});

Route::group(['middleware' => ['locale.set']],function () {

    Auth::routes();
});



