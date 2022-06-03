<?php
    namespace App;
    class Cart{
                public $products = null;
                public $TotalPrice=0;
                public $TotalQuanty =0 ;
                public function __construct($cart)

                {
                    if($cart){
                        $this->products = $cart->products;
                        $this->TotalPrice = $cart->TotalPrice;
                        $this->TotalQuanty = $cart->TotalQuanty;
                    }

                }
        //    public function AddCart($product,$id)
        // {
        //     $newProduct=['quanty'=>1,'productInfo'=>$product];
        //     if($this->products){

        //         if(array_key_exists($id,$products)){

        //         }

        //     }

        // }
    }

?>
