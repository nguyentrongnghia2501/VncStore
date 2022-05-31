<?php
namespace App;

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\Events\Routing;
use App\Http\Controllers\Admin\SildeController;
use App\Http\Controllers\MainUsController;

// Route::get('/', function () {
//     return view('welcome');

// });



Route::get('/admin/users/login/',[LoginController::class,'index'])->name('login');
Route::post('/admin/users/login/store/',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function () {

        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('/test',[TestController::class,'store']);
        Route::post('/test/ps/',[TestController::class,'ps']);

        //  Menus áda
            Route::prefix('menus')->group(function(){
                    Route::get('add',[MenuController::class,'create']);
                    Route::post('add',[MenuController::class,'store']);
                    Route::get('list',[MenuController::class,'index']);
                    Route::DELETE('delete',[MenuController::class,'delete']);
                    Route::get('edit/{menu}',[MenuController::class,'show']);
                    Route::post('edit/{menu}',[MenuController::class,'update']);


            });
        ///products

        Route::prefix('products')->group(function(){
            Route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::get('delete/{id}',[ProductController::class,'destroy']);
            Route::get('edit/{id}',[ProductController::class,'show']);
            Route::post('edit/{id}',[ProductController::class,'update']);
    });
    /// slide
    Route::prefix(('slider'))->group(function(){

            Route::get('add',[SildeController::class,'create']);
            Route::post('add',[SildeController::class,'store']);
            Route::get('list',[SildeController::class,'index']);
            Route::get('delete/{id}',[SildeController::class,'destroy']);
            Route::get('edit/{id}',[SildeController::class,'show']);
            Route::post('edit/{id}',[SildeController::class,'update']);
    });




        });

});
///

Route::get('/',[MainUsController::class,'index']);
Route::get('',[MainUsController::class,'index']);
Route::get('/single-product/{id}',[MainUsController::class,'single']);
