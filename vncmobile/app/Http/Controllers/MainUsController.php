<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\product;
use Illuminate\Http\Request;

class MainUsController extends Controller
{
    //
    public function index(){

        $menus_lm= Menu::where('parent_id',0)->get();
        $product = product::select('id','name','price','price_sale','thum')->orderByDesc('id')->limit(6);
        return view('main',[
            'title'=>'Vnc Store',


        ])->with('menus_lm',$menus_lm,'product',$product);
    }
}
