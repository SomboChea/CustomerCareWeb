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

Route::get('/db', function () {
    return DB::select("EXEC testFunc");
});

Route::get('person', 'PersonController@getPerson');

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        echo 'Index';
    });
    
    Route::get('/profile', function () {
        echo "Admin Profile";
    });

});

