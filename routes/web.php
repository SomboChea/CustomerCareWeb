<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web inroutes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/Test',function(){
    return redirect( route("admin.sources.profile")."/hcp");
});

Route::post('test/name','UserController@test');

Route::get('person', 'PersonController@getPerson');

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/calendar', function () {
        return view('admin.calendar');
    });

    Route::get('test', function () {
        return view('tests.Test');
    });

    Route::prefix('/call')->group(function () {
        Route::get('/', function () {
            return view('admin.call.all');
        })->name('admin.call.all');

        Route::get('/new', function () {
            return view("admin.call.new");
        })->name('admin.call.new');
        Route::get('/step', function () {
            return view('admin.call.step');
        })->name('admin.call.step');
        Route::get('/pregnent', function () {
            return view("admin.call.Pregnent");
        })->name('admin.call.pregnent');

        Route::get('/{type}/{name?}', function ($type, $name=null) {
            if (empty($name)) {
                return view('admin.call.view', ['type'=>$type]);
            } else {
                return view('admin.call.queue', ['type'=>$type, 'name'=>$name]);
            }
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
            if (empty($name)) {
                return view('admin.sources.view', ['type'=>$type]);
            } else {
                return view('admin.sources.profile', ['type'=>$type,'name'=>$name]);
            }
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

    Route::prefix('/reports')->group(function () {
        Route::get('/', function () {
            echo "All Reports";
        });

        Route::get('/simple', function () {
            return view('admin.reports.simple');
        })->name('admin.reports.all');
    });

    Route::prefix('/users')->group(function () {
        Route::get('/', function () {
            return view("admin.users.all");
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
