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

// Handoff control to vue/vue-router
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

// Default laravel welcome page
Route::get('/', function () {
    return view('welcome');
});
