<?php
namespace App;

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Routing\Events\Routing;


Route::get('/', function () {
    return view('welcome');
});
///đâsỳuyufyuouyi

Route::get('/admin/users/login/',[LoginController::class,'index'])->name('login');
Route::post('/admin/users/login/store/',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function(){

    Route::prefix('admin')->group(function () {
                 
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('/test',[TestController::class,'store']);
        Route::post('/test/ps/',[TestController::class,'ps']);

        //  Menus
            Route::prefix('menus')->group(function(){
                    Route::get('add',[MenuController::class,'create']);
                    Route::post('add',[MenuController::class,'store']);
                    Route::get('list',[MenuController::class,'index']);
                    Route::DELETE('delete',[MenuController::class,'delete']);
                    Route::get('edit/{menu}',[MenuController::class,'show']);
                    Route::post('edit/{menu}',[MenuController::class,'update']);
                

            });
        ///products ádas ádasd
   
        Route::prefix('products')->group(function(){
            Route::get('add',[ProductController::class,'create']);
            Route::post('add',[ProductController::class,'store']);
            Route::get('list',[ProductController::class,'index']);
            Route::get('delete/{id}',[ProductController::class,'destroy']);
            Route::get('edit/{id}',[ProductController::class,'show']);
            Route::post('edit/{id}',[ProductController::class,'update']);
    });
        

gccgh

        });

});