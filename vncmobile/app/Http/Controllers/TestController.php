<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Http\Services\TestService;
use App\Models\test;
use App\Models\Menu;


class TestController extends Controller
{
    //
    protected $testService;
    public function __construct(TestService $testService)
    {
         $this->testService =$testService;

    }
    public function store(Request $request)
    {
        $collection = collect([1, 2]);

        $matrix = $collection->crossJoin(['a', 'b']);

        $matrix->all();

        /*
            [
                [1, 'a'],
                [1, 'b'],
                [2, 'a'],
                [2, 'b'],
            ]
        */

        $collection = collect([1, 2]);

        $matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);

        $matrix->all();


    }

    public function ps(Request $request){
        // $Tests= new Tests;
        $test = new test;

        $test->name =$request->input('name');

        if($request->hasFile('thum'))
        {
                $file= $request->file('thum');
                $extention = $file->getClientOriginalExtension();
                $filename=time().'.'.$extention;
                $file->move('nvs',$filename);
                $test->thum=$filename;
        }
        $test->save();
        return redirect()->back();
    //  $name=$request->input('name');
    //  $path=$request->file('thum')->store('imh');
    //  Test::ps([
    //         'name'=>(string)$request->input('name'),
    //         'thum'=>$path,


    //  ]);

    }
}
