<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/name', function () {
    return print('saxeli');
});

Route::get('/surname', function () {
    return print('gvari');
});

Route::get('/age', function () {
    return print('20');
});

Route::get('/hobby', function () {
    return print('hobi');
});

Route::get('/number', function () {
    return print('555 11 22 33');
});

Route::get('/email', function () {
    return print('test@gmail.com');
});


