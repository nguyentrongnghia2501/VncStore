<?php

namespace App\Http\Controllers;

use App\Models\product;
use Session;


use Illuminate\Http\Request;

use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    //
    public function SaveCart(Request $request){

        $productId = $request->productIdd_hidden;
        $id = $productId;
        // $data = Collection::make([1, 2 ])->sum();
        // dd($data);
        $quanty= $request->quantity_product;
        $menus_lm= Menu::where('parent_id',0)->get();
        $product_cart = product::find($productId);
         $cart =session()->get('cart');
       // $cart= array();
           if(isset($cart[$id]))
           {

                    $cart[$id]['quanty']=Collection::make([$cart[$id]['quanty'], $quanty ])->sum();

           }
           else{
               $cart[$id] =[
                   'name'=>$product_cart->name,
                   'price'=>$product_cart->price,
                   'quanty'=>$quanty,
                   'thum'=>$product_cart->thum,
                   'price_sale'=>$product_cart->price_sale,

               ];
           }
           session()->put('cart',$cart);
           $carts = session()->get('cart');

          return view('ShoppingCart',
            [
                'title'=>'Giỏ hàng',
                'menus_lm'=>$menus_lm,
                'carts'=>$carts
            ]
        );


     }

}
