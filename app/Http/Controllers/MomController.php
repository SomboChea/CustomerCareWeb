<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mom;

class MomController extends Controller
{
    //
    public function index(){
        return Mom::All();
    }
}
