<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BicyclesController extends Controller
{
        public function getIndex(){
        return view('bicycles');
        }
}
