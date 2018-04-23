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
   //return redirect()->route('TestForm');
    // I pushed
});

Route::get('/db', function () {
    return DB::select("EXEC checkName ?",["sunlong"]);
});

Route::get('/Test',function(){
    return view('tests.welcome');
});

Route::post('test/name','UserController@test');

// Route::post('test/name',function(Request $req){
//     echo $r
// });



Route::get('person', 'PersonController@getPerson');


Route::middleware(['test'])->group(function(){
    Route::prefix('/api/v1')->group(function () {
        Route::get('/',function(){
            return view('test');
        });

        Route::prefix('auth')->group(function(){
            route::get("/",function(){

            });
            
            route::post('login/',function(Request $req){
                $Role=User::where('username',$req->user)->where('password',$req->pass)->get()[0]["role_id"];
                // return view('test',["role"=>$Role]);
            });
        });

        Route::prefix('/alert')->group(function(){
            Route::get('/', function() {
                //
                return DB::select("Exec CheckDatePreg 0,'day'");     
            });
        
            Route::get('/month/{duration}', function($duration) {
                //
                return DB::select("Exec CheckDatePreg ? , ?", [$duration,"month"]);     
            });
        
            Route::get('/day/{duration}', function($duration) {
                //
                return DB::select("Exec CheckDatePreg ? , ?", [$duration,"day"]);     
            });
        });
        
        
        Route::prefix('/user')->group(function () {
            Route::get('/','UserController@index');
            Route::post('/new','UserController@insert');
            Route::post('/update/{id}','UserController@update');
            Route::get('/delete/{id}','UserController@delete');
            Route::put('/update', function () {
                return "Updated";
            });
        });
    });
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

