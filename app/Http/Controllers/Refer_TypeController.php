<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Refer_Type;

class Refer_TypeController extends Controller
{
    //
    public function index(){
        return Refer_Type::All();
    }
}
