<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Refer;

class ReferController extends Controller
{
    //
    public function index() {
        return Refer::All();
    }

    public function store(Request $req){
        $refer = new Refer();

        $refer->name_id = 1;
        $refer->owner_id = 2;
        $refer->tel_1 = $req->tel_1;
        $refer->tel_2 = $req->tel_2;
        $refer->email = $req->email;
        $refer->location_id = 1;
        $refer->memo = $req->memo;

        $refer->save();
    }
}
