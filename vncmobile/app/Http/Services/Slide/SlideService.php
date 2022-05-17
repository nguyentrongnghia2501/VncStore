<?php

namespace App\Http\Services\Slide;
use app\Models\Silde;
class SlideService{

        public function insert($request)
        {
                try {
                    //code...
                    Silde::create($request->input());

                } catch (\Throwable $th) {
                    //throw $th;
                }
        }


}