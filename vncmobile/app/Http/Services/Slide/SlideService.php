<?php

namespace App\Http\Services\Slide;

use app\Models\Silde;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class SlideService{

        public function insert($request)
        {
                
        }
        public function getshow(){
            
            return DB::table('sildes')->get();
            
        }
        public function get($id){

           return Silde::where('id',$id)->get();
        }


}