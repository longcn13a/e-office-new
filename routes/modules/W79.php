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


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Modules\W79', 'middleware' => 'auth'], function () {
    Route::any('/W79F1000/{task?}/{id?}', 'W79F1000Controller@index');
    Route::any('/W79F1001/{task?}', 'W79F1001Controller@index');
});
