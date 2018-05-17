<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        return Product::All();
    }

    public function insert(Request $request){
        $pro=new Product();
        $pro->name=$request->pro_name;
        $pro->info=$request->info;
        $pro->owner=$request->owner;
        $pro->level=$request->level;
        $pro->save();
        return redirect(route('admin.users.view'));
    }
}
