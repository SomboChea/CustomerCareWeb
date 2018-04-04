<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;

class NameController extends Controller
{
    //
    public function index(){
        return Name::All();
    }
}
