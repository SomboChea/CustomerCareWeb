<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Refer;

class ReferController extends Controller
{
    //
    public function index(){
        return Refer::All();
    }
}
