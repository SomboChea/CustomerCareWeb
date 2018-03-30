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
    // I pushed
});

Route::get('/db', function () {
    return DB::select("EXEC checkName ?",["sunlong"]);
});

Route::get('/Test',function(){
    return view('Test');
});

Route::post('test/name','UserController@test');

// Route::post('test/name',function(Request $req){
//     echo $r
// });


Route::get('person', 'PersonController@getPerson');

Route::prefix('/api/v1')->group(function () {
    Route::get('/',function(){

    });
    Route::prefix('/user')->group(function () {
        Route::get('/','UserController@index');
        Route::post('/new','UserController@insert');
        Route::post('/update/{id}','UserController@update');
        Route::get('/delete/{id}','UserController@delete');
    });
});

Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('index');
    });
    
    Route::post('/profile', function () {
        echo "Admin Profile";
    });

});

