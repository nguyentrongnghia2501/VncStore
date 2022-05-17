<?php

namespace App\Http\Services\Slide;
use app\Models\Silde;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class SlideService{

        public function insert($request)
        {
                
        }
        public function getParent(){
              return  Silde::where('id',1)->get();
            
        }


}