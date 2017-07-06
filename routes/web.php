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

Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

Route::get('/about/{id}', 'Dir\FirstController@show');
Route::get('/articles', 'admin\core@getPages');
//Route::get('/page/{$id}/{$cat}', function ($id) {
//    echo '<pre>';
//    //print_r($_ENV);
//    //echo config('app.php.locale');
//    //echo Config::set('app.locale', "ru");
//    //echo Config::get('app.locale');
//    //echo env("APP_ENV");
//    echo '</pre>';
//})/*->where(['id'=>'[0-9]+', 'cat'=>'[A-Za-z]+'])*/;
//
//Route::group(['prefix'=>'admin'], function(){
//
//    Route::get('/page/create', function () {
//        echo "/page/create";
//    });
//    Route::get('/page/edit', function () {
//        echo "/page/edit";
//    });
//});
/*Route::post('/test', function () {
    echo "привет мир!";
});*/