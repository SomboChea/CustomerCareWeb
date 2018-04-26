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

Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/calendar', function () {
        return view('admin.calendar');
    });
    
    Route::prefix('/call')->group(function () {
        Route::get('/', function () {
            return view('admin.call.all');
        });

        Route::get('/{id}', function ($id) {
            return view('admin.call.all',['id'=>$id]);
        })->name('admin.call');


        Route::get('/{type}/{name?}', function ($type, $name=null) {
            if(empty($name))
                return view('admin.call.view', ['type'=>$type]);
            else
            return view('admin.call.queue', ['type'=>$type, 'name'=>$name]);
        })->name('call.name');
    });

    Route::prefix('/users')->group(function () {
        Route::get('/', function () {
            return view("admin.users.view");
        });

        Route::get('/new', function () {
            return view("admin.users.new");
        });
    });

    Route::prefix('/sources')->group(function () {
        Route::get('/', function () {
            return view('admin.sources.view');
        });

        Route::get('/new', function () {
            return view('admin.sources.new');
        });

        Route::get('/{type}/{name}', function ($type, $name) {
            return view('admin.sources.profile', ['type'=>$type,'name'=>$name]);
        });

    });

    Route::post('/profile', function () {
        echo "Admin Profile";
    });

});

Route::get('login', function () {
    return view('auth.login');
});

