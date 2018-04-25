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

use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
   return view('index');
});

Route::get('/db', function () {
    return DB::select("EXEC checkName ?",["sunlong"]);
});

Route::get('/Test',function(){
    return view('tests.welcome');
});

Route::post('test/name','UserController@test');

Route::get('person', 'PersonController@getPerson');

Route::middleware(['test'])->group(function(){

    
});

Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/calendar', function () {
        return view('admin.calendar');
    });
    
    Route::post('/profile', function () {
        echo "Admin Profile";
    });

});

Route::get('login', function () {
    return view('auth.login');
});

