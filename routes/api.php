<?php

use Illuminate\Http\Request;
use App\User;
use App\Name;
use App\Mom;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/db')->group(function(){
    Route::get('/', function () {
        return DB::select("EXEC checkName ?",["sunlong"]);
    });
    Route::get('calllist',function(){
        return DB::select("Select * from ViewAllCall");
    });

    Route::get('/{table}',function($table){
        return DB::table($table)->get();
    });

    Route::get('column/{table}',function($table){
        return Schema::getcolumnlisting($table);
    });
    
});

Route::prefix('/name')->group(function(){
    Route::get('/',function(){
        return Name::all();
   });
   Route::get('/{name_id}',function($id){
    return Name::find($id);
   })->where('name_id','[0-9]+');

   Route::get('/{name}',function($name){
    return DB::select("EXEC checkName ?",[$name]);
   })->where('name','[a-zA-Z]+');

   Route::get('/search/{name}',function($name){
        return Name::where('name','LIKE',"%$name%")->get();
});
   
});

Route::prefix('auth')->group(function(){
    Route::get("/",function(){
        echo "Access forbiden!";
    });
    
    
    Route::post('/login',function(Request $req){
        User::where('username',$req->username)->where('password',$req->password);
    })->name('login');
    
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
    })->name('alert.days');
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

Route::prefix('/sources')->group(function () {
    Route::post('/new', 'ReferController@store')->name('api.sources.save');
});