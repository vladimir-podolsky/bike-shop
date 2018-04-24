<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SingleController extends Controller
{
        public function getIndex(){
        return view('single');
        }
}
