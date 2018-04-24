<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PartsController extends Controller
{
        public function getIndex(){
        return view('parts');
        }
}
