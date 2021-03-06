<?php

use Illuminate\Http\Request;
use App\User;
use App\Name;
use App\Mom;
use Illuminate\Support\Facades\Session;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix'=>'/','as'=>'api'], function () {
    Route::get('/', function () {
        return json_encode(['msg'=>'error']);
    });
});

Route::prefix('/call')->group(function(){
    Route::get('/new',function(){
        return DB::Select('Select * from viewlastcall where Count=1');
    })->name('api.call.new');
    Route::get('/step',function(){
        return DB::Select('Select * from viewlastcall where Count=1');
    })->name('api.call.step');
    Route::get('/pregnent',function(){
        return DB::Select('select * from `viewlastcall` where `Kid_Name` = "(Pregnent)"');
    })->name('api.call.pregnent');
    Route::get("/table/pregent",function(){

    });
});

Route::prefix('/db')->group(function(){

    Route::get('/', function () {
        return DB::select("EXEC checkName ?",["sunlong"]);
    })->name('api.db');

    Route::get('/select/{statement}',function($stat){
        return DB::select($stat);
    })->name('api.db.select');

    Route::get('/checkusername/{username}',function($uname){
        return User::where('username','=',$uname)->get();
    })->name('api.user.check');

    Route::get('/{table}',function($table){
        return DB::table($table)->get();
    })->name('api.db.table');

    Route::get('column/{table}',function($table){
        return Schema::getcolumnlisting($table);
    })->name('api.db.column');

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
        return redirect(route('api'));
    });

    Route::post('/login',function(Request $req){
        // $id = User::where('username',$req->username)->where('password',$req->password)->get();
        // session(['username'=>$id[0]['username']]);
        // Session::put('uname','SB');
        return  redirect(route('dashboard'));
    })->name('auth.login');

});

Route::prefix('location')->group(function(){
    Route::get('/',function(){})->name('api.location');

    Route::get('/province',function(){
        return DB::select("Call ShowProvince()");
    })->name('api.province');

    Route::get('/district/{id}',function($pid){
        return DB::select("Call ShowDistrict($pid)");
    })->name('api.district');

    Route::get('/commune/{id}',function($did){
        return DB::select("Call ShowCommune($did)");
    })->name('api.commune');
});

Route::prefix('/alert')->group(function(){
    Route::get('/', function() {
        //
        return DB::table("viewalert")->get();
    })->name('api.alert');

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

Route::prefix('/product')->group(function(){
    Route::get('/',function(){
        return DB::select('select * from viewProduct');
    })->name('api.product');

    Route::post('/add','ProductController@insert')->name('api.product.add');
});

Route::prefix('/customer')->group(function(){
    Route::get('/',function(){})->name('api.customer');


    Route::get('/mom',function(){
        return DB::select('select * from viewMom');
    })->name('api.customer.mom');

    Route::get('/kid',function(){
        return DB::select('select * from viewKid');
    })->name('api.customer.kid');
});


Route::prefix('/sources')->group(function () {
    Route::get('/',function(){})->name('api.source');

    Route::post('/new', 'ReferController@store')->name('api.sources.save');

    Route::get('/hcp',function(){
        return DB::select("Select * from viewrefers where type_id=1");
    })->name('api.source.hcp');
    Route::get('/retail',function(){
        return DB::select("Select * from viewrefers where type_id=2");
    })->name('api.source.retail');
    Route::get('/pc',function(){
        return DB::select("Select * from viewrefers where type_id=3");
    })->name('api.source.pc');
    Route::get('/other',function(){
        return DB::select("Select * from viewrefers where type_id=4");
    })->name('api.source.other');
});
