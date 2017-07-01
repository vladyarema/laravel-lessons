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

Route::get('/page', function () {
    echo '<pre>';
    //print_r($_ENV);
    //echo config('app.php.locale');
    //echo Config::set('app.locale', "ru");
    //echo Config::get('app.locale');
    echo env("APP_ENV");
    echo '</pre>';
});


Route::post('/test', function () {
    echo "привет мир!";
});