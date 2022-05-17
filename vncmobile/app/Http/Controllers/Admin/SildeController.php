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
            
        }
    
        public function create(){

        }


}
