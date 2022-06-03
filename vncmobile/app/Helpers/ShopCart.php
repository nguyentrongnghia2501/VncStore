<?php

namespace App\Helpers;

class ShopCart{


       public $products = null;
       public $total_price =0;
       public $total_quanty=0;
       public function __construct($cart)
       {
           if($cart){
           $this->products = $cart->products;
           $this->total_price = $cart->total_price;
           $this->total_quanty = $cart->total_quanty;

              }
       }
       public function AddCart($product,$id,$products){
           $newProduct = ['quanty'=>0,'price'=>$product->price,'productInfo'=>$product];
           if($this->products)
           {
                if(array_key_exists($id, $products)){
                             $newProduct = $products[$id];
                }

           }
           $newProduct ['quanty']++;
           $newProduct['price']=  $newProduct ['quanty']*$product->price;
           $this->products[$id]= $newProduct;
           $this->total_price += $product->price;
           $this->total_quanty ++;
       }

       ///
       public function remove($id)
       {

       }
       public function update($id,$quantity=1)
       {

       }
       public function clear()
       {

       }
       private function get_total_price()
       {
                $t=0;
                foreach($this->items as $item)
                {
                    $t+= $item['price']*$item['quantity'];

                }
                        $t= (int)$t;
               return $t;

       }
        private function get_total_quantity()
        {
                $t=0;
                foreach($this->items as $item)
                {
                    $t += $item['quantity'];
                }
                return $t;

        }
}

?>
