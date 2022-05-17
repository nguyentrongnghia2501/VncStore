<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Slide\SlideService;
use Illuminate\Http\Request;

class SildeController extends Controller
{

        protected $slide;
        public function __construct(SlideService $slide)
        {
            $this->slide= $slide;
        }
    
        public function create(){
            return view('admin.slider.add',[
                'title'=>'Thêm slide mới !'
            ]);

        }


}
