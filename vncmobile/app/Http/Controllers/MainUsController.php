<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MainUsController extends Controller
{
    //
    public function index(){
    
        $menus_lm= Menu::where('parent_id',0)->get();
        return view('home',[
            'title'=>'Vnc Store',
         
        
        ])->with('menus_lm',$menus_lm);
    }
}
