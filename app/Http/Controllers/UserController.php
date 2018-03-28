<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function index(){
        return mdUser::all();
    }
    public function Insert(Request $request){
         $user=new User();
         $user->fullname_id=$request->fullname_id;
         $user->username=$request->username;
         $user->password=$request->password;
         $user->role_id=$request->role_id;

$user->save();
    }

 
    public function update(Request $request){
        $user=new User();
        $user->id=$request->id;
        $user->fullname_id=$request->fullname_id;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->role_id=$request->role_id;

$user->update();
   }
   public function delete($id){
    $user= User::find($id);   
$user->delete();
}
}
