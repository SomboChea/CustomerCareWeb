<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregnent;

class PregnentController extends Controller
{
    //
    public function index(){
        return Pregnent::All();
    }
}
