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
    
    Route::get('alert',function(){
        return view('admin.alert.all');
    });

    Route::prefix('/call')->group(function () {
        Route::get('/', function () {
            return view('admin.call.all');
        })->name('admin.call.all');

        Route::get('/{type}/{name?}', function ($type, $name=null) {
            if(empty($name))
                return view('admin.call.view', ['type'=>$type]);
            else
            return view('admin.call.queue', ['type'=>$type, 'name'=>$name]);
        })->name('admin.call.name');
    });

    Route::prefix('/customers')->group(function () {
        Route::get('/', function () {
            return view('admin.customers.index');
        })->name('admin.customers.index');

        Route::get('/new', function () {
            return view('admin.customers.new');
        })->name('admin.customers.new');

        Route::get('/view/{type}', function ($type) {
            return view('admin.customers.view', ['type'=>$type]);
        })->name('admin.customers.view');
    });

    Route::prefix('/sources')->group(function () {
        Route::get('/', function () {
            return view('admin.sources.index');
        })->name('admin.sources.index');

        Route::get('/new', function () {
            return view('admin.sources.new');
        })->name('admin.sources.new');

        Route::get('/{type}/{name?}', function ($type, $name=null) {
            if(empty($name))
                return view('admin.sources.view', ['type'=>$type]);
            else
                return view('admin.sources.profile', ['type'=>$type,'name'=>$name]);
        })->name('admin.sources.profile');

    });

    Route::prefix('/products')->group(function () {
        Route::get('/', function () {
            return view('admin.product.view');
        })->name('admin.product.view');
        
        Route::get('/new', function () {
            return view('admin.product.new');
        })->name('admin.product.new');
    });

    Route::prefix('/users')->group(function () {
        Route::get('/', function () {
            return view("admin.users.view");
        })->name('admin.users.view');

        Route::get('/new', function () {
            return view("admin.users.new");
        })->name('admin.users.new');

        Route::get('/roles', function () {
            return view("admin.users.roles");
        })->name('admin.users.roles');
    });

    Route::post('/profile', function () {
        return view('admin.user.profile');
    })->name('admin.profile');

});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return "Logout";
});

