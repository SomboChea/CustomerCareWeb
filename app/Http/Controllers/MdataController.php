<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mdata;

class MdataController extends Controller
{
    //
    public function index(){
        return Mdata::All();
    }
}
