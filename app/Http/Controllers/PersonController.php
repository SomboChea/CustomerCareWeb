<?php

namespace App\Http\Controllers;

use App\Kid;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getPerson() {
        $test="Kid";
        return $test::all();
    }
}
