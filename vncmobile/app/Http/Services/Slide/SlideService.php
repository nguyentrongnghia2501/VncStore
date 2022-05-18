<?php

namespace App\Http\Services\Slide;

use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use app\Models\Silde;
use Illuminate\Support\Facades\DB;

class SlideService{

        public function insert($request)
        {
                
        }
        public function getshow(){
            
            return DB::table('sildes')->get();
            
        }


}