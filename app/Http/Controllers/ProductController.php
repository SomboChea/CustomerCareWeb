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
        $pro->name=$request->name;
        $pro->info=$request->Info;
       
        $pro->level=$request->level;
        $pro->status=1;
        $pro->owner=$request->owner =="owner"?"Yes":"No";
    
        $pro->save();
        return redirect(route('admin.product.view'));
    }
}
