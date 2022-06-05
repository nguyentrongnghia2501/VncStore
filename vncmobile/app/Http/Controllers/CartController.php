<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Session;



use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Menu;


class CartController extends Controller
{
    //
    public function index(Request $request)
    {
            $quanty = (int)$request->input('quantity_product');
            $product_id = (int)$request->input('product_id');

            if($quanty <=0 || $product_id<=0 )
            {
               Session::flash('error','Số lượng hoặc sản phẩm không chính xác !');

                return false;
            }

            $carts = Session::get('carts');
           if(is_null($carts)){
               Session::put('carts', [
                   $product_id =>$quanty
               ]);
               return true;
           }

           $exists = Arr::exists($carts, $product_id);
           if($exists)
           {

              //update
              $quantyNew =$carts[$product_id] + $quanty;
              Session::put('carts',[
                  $product_id =>$quantyNew
              ]);
                return true;
           }

           Session::put('carts', [
            $product_id =>$quanty
        ]);
       return redirect('/carts');


    }
    public function show(){
        $carts = Session::get('carts');
        if(is_null($carts))  return [];
        $productId = array_keys($carts);  /// lấy id

        $products= product::where('id',$productId)->get();
        $menus_lm= Menu::where('parent_id',0)->get();

      return view('ShoppingCart',[
          'title'=>'Giỏ hàng',
          'products'=>$products,
          'menus_lm'=>$menus_lm
      ]);
    }
}
