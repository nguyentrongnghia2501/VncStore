<?php

namespace App\Http\Controllers;


use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ShoppingCart extends Controller
{
    //
    public function index()
    {
        $menus_lm= Menu::where('parent_id',0)->get();
        $product =DB::table('products')->limit(8)->get();
        return view('ShoppingCart',[
            'title'=>'Shopping Cart',
            'menus_lm'=>$menus_lm,
            'product'=>$product,
        ]);
    }
    public function Cart(){

    }

}
