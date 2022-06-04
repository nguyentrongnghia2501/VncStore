<?php

namespace App\Http\Controllers;

use App\Helpers\ShopCart;
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
    public function add(Request $request,$id)
    {
       $product = DB::table('products')->where('id',$id)->first();
       if($product != null)
       {

            $oldcart= Session('cart') ? Session('cart') : null;
            //  biến giỏ hàng mới
            $newCart =  new ShopCart($oldcart);
            $newCart->AddCart($product,$id,$product->id);
            $request->session()->put('cart',$newCart);


       }
       return view('ShoppingCart',[
            'newCart' => $newCart,
    ]);

    }
}
