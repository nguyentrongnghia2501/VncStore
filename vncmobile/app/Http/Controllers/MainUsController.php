<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainUsController extends Controller
{
    //
    public function index(){
        return view('main',[
            'title'=>'Vnc Store']);
    }
}
