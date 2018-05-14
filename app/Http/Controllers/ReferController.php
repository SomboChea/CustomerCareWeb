<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Refer;
use DB;

class ReferController extends Controller
{
    //
    public function index() {
        return Refer::All();
    }

    public function store(Request $req){
        $SrcType=array('','hcp','retail','pc','other');
        $refer = new Refer();
        $refer->name_id = DB::select("call insertname('$req->name')")[0]->id;
        $refer->owner_id = DB::select("call insertname('$req->owner')")[0]->id;;
        $refer->tel_1 = $req->tel_1;
        $refer->tel_2 = $req->tel_2;
        $refer->email = $req->email;
        $refer->location_id = DB::select("select GetAddrID('$req->province','$req->district','$req->commune','$req->address') as id")[0]->id;
        $refer->memo = $req->memo;
        $refer->type_id=$req->type;
        $refer->save();
        return redirect(route("admin.sources.profile",[$type=$SrcType[$req->type]]));
    }
}
