<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Slide\SlideService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SildeController extends Controller
{

        protected $slide;
        public function __construct(SlideService $slide)
        {
            $this->slide= $slide;
        }
    
        public function create(){
            return view('admin.slider.add',[
                'title'=>'Thêm slide mới !',
                'slider'=>$this->slide->getParent()
            ]);

        }
        public function store(Request $request){
               $img='';
               if($request->hasFile('thumb')){
                   $this->validate($request,[
                        'thumb'=>'mimes:jpg,jpeg,png,gift|max:2048',

                   ],
                [
                    'thum.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				    'thum.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );

                 $thum = $request->file('thumb');
                 $img=time().'_'.$thum->getClientOriginalName();
                 $desti = public_path('nvs');
                 $thum->move($desti,$img);
               }
               $allRequest = $request->all();
               $name= $allRequest['name'];
               $url= $allRequest['url'];
               $sort_by=$allRequest['sort_by'];
               $active= $allRequest['active'];
                  $install = array(
                      'name'=>$name,
                      'url'=>$url,
                    'sort_by'=>$sort_by,
                    'thumb'=>$img,
                    'active'=>$active
                  );
                  //install
                  $insertData = DB::table('sildes')->insert($install);
                  if($insertData){
                    Session::flash('success', 'Thêm Slider mới thành công!');

                   }
                   else{
                    Session::flash('error', 'Thêm Slider thất bại!');
                   }

                   return redirect()->back();
               

        }


}
