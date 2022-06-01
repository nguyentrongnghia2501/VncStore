<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function single($id)
    {

            $menus_lm= Menu::where('parent_id',0)->get();
             $product_id = product::where('id',$id)->get();
            // $product_id = product::select('id','name','price','price_sale','thum')->orderByDesc('id');
            $product =DB::table('products')->limit(3)->get();

            return view('SingleProduct',[

                    'title'=>'CHi tiết sản phẩm',
                    'menus_lm'=>$menus_lm,
                    'product_id'=>$product_id,
                    'product'=>$product,
            ]
            );
    }
    public function shoppage(){
        $menus_lm= Menu::where('parent_id',0)->get();
        $product =DB::table('products')->limit(8)->get();

         return view('ShopPage',[

            'title'=>'Shop page',
            'menus_lm'=>$menus_lm,
            'product'=>$product,

         ]);
    }
}
