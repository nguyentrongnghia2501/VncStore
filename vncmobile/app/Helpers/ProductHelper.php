<?php

namespace App\Helpers;

use App\Models\product;

class ProductHelper{

                    public static function product($product , $char=''){
                        product::orderbyDesc('id')->paginate(20);
                            $html='';
                            

                    }




}