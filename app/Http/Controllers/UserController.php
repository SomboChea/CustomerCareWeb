<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class UserController extends Controller
{
    //
    public function index(){
        return User::all();
    }
    public function Insert(Request $request){
        $user=new User();
        $user->name_id= DB::select("call insertname('$request->fullname')")[0]->id;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->role_id=$request->role_id;
        $user->save();
        return redirect(route('admin.users.view'));
    }
 
    public function update(Request $request, $id){
        $user=new User();
        $user->id=$id;
        $user->name_id=DB::select("call insertname('$request->fullname')")[0]->id;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->role_id=$request->role_id;
        $user->update();
        return redirect(route('admin.users.view'));
   }

    public function delete($id) {
        $user= User::find($id);   
        $user->delete();
    }
}
