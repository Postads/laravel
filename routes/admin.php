<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware' => ['auth','admin','locale.set']],function (){
    Route::get('/', 'IndexController@index')->name('admin');
});


